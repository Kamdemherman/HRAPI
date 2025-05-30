<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\SpecialFilterService;
use App\Services\DynamicQueryService;
use Carbon\Carbon;


class CustomApiController extends Controller
{

    protected $dynamicQueryService;
    protected $specialFilterService;

    public function __construct(DynamicQueryService $dynamicQueryService, 
    SpecialFilterService $specialFilterService
    )
    {
        $this->dynamicQueryService = $dynamicQueryService;
        $this->specialFilterService = $specialFilterService;
    }

 
    public function index(string $table, Request $request)
    {

        if ($table === 'quickList') {
            if ($request->has('matricules')) {
                return $this->quickListMatricules();
            }
            if ($request->has('needs')) {
                return $this->quickListNeeds();
            }
            if ($request->has('references')) {
                return $this->quickListReferences();
            }
            if ($request->has('questions')) {
                return $this->quickListQuestions();
            }
            if ($request->has('evaluators')) {
                return $this->quickListEvaluators();
            }
        }

        if ($table === 'hirings') {
            return $this->getHirings(); 

        }

        if ($table === 'offers' && $request->has('needs')) {
            return $this->quickListNeeds(); 
        }
        
        if ($table === 'needs') {
            return response()->json($this->dynamicQueryService->fetch('needs'));
        }

        if ($request->has('questions')) {
            $data = DB::table('questions')
                ->select(
                    'ID_QUESTION', 'NAME', 'CONTENT', 'POINTS', 'DATE_POST', 'ID_OFFER'
                )
                ->orderByDesc('ID_QUESTION')
                ->get();
    
            return response()->json($data);
        }

        if ($request->has('evaluators')) {
            $data = DB::table('evaluators')
                ->select('ID_EVALUATOR', 'NAME', 'ROLE', 'SERVICE', 'ID_OFFER', 'DATE_POST')
                ->orderByDesc('ID_EVALUATOR')
                ->get()
                ->map(function ($evaluator) {
                    return [
                        'ID_EVALUATOR' => (string) $evaluator->ID_EVALUATOR,
                        'NAME' => $evaluator->NAME,
                        'ROLE' => $evaluator->ROLE,
                        'SERVICE' => $evaluator->SERVICE,
                        'ID_OFFER' => (string) $evaluator->ID_OFFER,
                        'DATE_POST' => (string) $evaluator->DATE_POST,
                    ];
                });
    
            return response()->json($data);
        }

        if ($table === 'widget4') {
            return $this->getWidget4Data();
        }

        if ($table === 'widget5') {
            return $this->getWidget5Data();
        }

        
        if ($table === 'widget6') {
            return $this->getWidget6Data();
        }

           
        if ($table === 'widget2') {
            return $this->getWidget2Data();
        }

        if ($table === 'widget3') {
            return $this->getWidget3Data();
        }

        if ($table === 'widgets') {
            return $this->getWidgetsData();
        }

        if ($table === 'widget1') {
            return $this->getWidget1Data();
        }

        foreach ($request->query() as $key => $value) {
            if (is_string($key) && $this->specialFilterService->has($table, $key)) {
                $data = $this->specialFilterService->handle($table, $key);
                return response()->json($data);
            }
        }

        $data = $this->dynamicQueryService->fetch($table);
        return response()->json($data);
    }

    public function quickListMatricules() 
    {
        $data = DB::table('applicants')
            ->select('ID_APPLICANT', 'MATRICULE')
            ->whereNotNull('MATRICULE')
            ->orderBy('ID_APPLICANT')
            ->get();

        return response()->json($data);
    }

    public function quickListNeeds()
{
    $data = DB::table('needs')
        ->select(
            'ID_NEED', 'REFERENCE', 'NAME', 'DESCRIPTION','EMITER','DETAILS','STATUS','VALIDATOR',
            'MOTIVE','PLACES','DATE_POST','DATE_APPROUVAL' )
        ->where('STATUS', 'approuved')
        ->orderByDesc('ID_NEED')
        ->get();

    return response()->json($data);
        }

        public function quickListReferences()
        {
            $data = DB::table('offers')
                ->select('ID_OFFER','REFERENCE', 'SESSION_START','SESSION_END') 
                ->get()
                ->map(function ($offer) {
                    return [
                        'ID_OFFER' => (string) $offer->ID_OFFER,
                        'REFERENCE' => $offer->REFERENCE,
                        'SESSION_START' => Carbon::createFromTimestampMs($offer->SESSION_START)->toISOString(),
                        'SESSION_END' => Carbon::createFromTimestampMs($offer->SESSION_END)->toISOString(),
                    ];
                });
    
            return response()->json($data);
            }

        public function quickListQuestions()
            {
          $data = DB::table('questions')
        ->select('ID_QUESTION', 'NAME', 'POINTS')
        ->orderBy('ID_QUESTION')
        ->get()
        ->map(function ($question) {
            return [
                'ID_QUESTION' => (string) $question->ID_QUESTION,
                'NAME' => $question->NAME,
                'POINTS' => (string) $question->POINTS,
            ];
        });

    return response()->json($data);
}

public function quickListEvaluators()
{
    $data = DB::table('evaluators')
        ->select('ID_EVALUATOR', 'NAME')
        ->orderBy('ID_EVALUATOR')
        ->get()
        ->map(function ($evaluator) {
            return [
                'ID_EVALUATOR' => (string) $evaluator->ID_EVALUATOR,
                'NAME' => $evaluator->NAME,
            ];
        });

    return response()->json($data);
}

public function getHirings()
{
    $applications = DB::table('applications')
    ->leftJoin('offers', 'applications.ID_OFFER', '=', 'offers.ID_OFFER') 
    ->leftJoin('applicants', 'applications.ID_APPLICANT', '=', 'applicants.ID_APPLICANT') 
    ->select(
        'applications.ID_APPLICATION as id',
        'applications.DATE_START as start',
        'applications.DATE_END as end',
        'applicants.MATRICULE as title',
        'offers.REFERENCE as reference',
        'applications.STATUS as status'
    )
    ->get();

    $result = $applications->map(function ($item) {
        return [
            'start' => $item->start,
            'end' => $item->end,
            'title' => $item->title,
            'reference' => $item->reference,
            'status' => $item->status,
            'id' => (string) $item->id,
            'allDay' => true,
            'resizable' => [
                'beforeStart' => true,
                'afterEnd' => true
            ]
        ];
    });

    return response()->json($result);
}

public function offers(Request $request)
{
    if ($request->has('needs')) {
        $data = DB::table('needs')
            ->select(
                'ID_NEED', 'REFERENCE', 'NAME', 'DESCRIPTION','EMITER','DETAILS','STATUS',
                'VALIDATOR','MOTIVE','PLACES','DATE_POST','DATE_APPROUVAL'
            )
            ->where('STATUS', 'approuved')
            ->orderByDesc('ID_NEED')
            ->get();

        return response()->json($data);
    }

   
}
public function getWidget4Data()
{
    $currentYear = Carbon::now()->year;
    $offers = DB::table('needs')
        ->select('DATE_APPROUVAL')
        ->whereNotNull('DATE_APPROUVAL')
        ->get();
    $total = 0;
    $last = 0;
    $now = 0;
    $labels = [];
    $values = [];

    foreach ($offers as $offer) {
        $approvalDate = $offer->DATE_APPROUVAL;

        if ($approvalDate) {
            $year = date('Y', strtotime($approvalDate));

            if ($currentYear - $year <= 10) {
                $total++;

                if ($currentYear - $year == 1) {
                    $last++;
                }

                if ($currentYear - $year == 0) {
                    $now++;
                }

                if (!in_array($year, $labels)) {
                    $labels[] = $year;
                }

                $index = array_search($year, $labels);
                if (!isset($values[$index])) {
                    $values[$index] = 1;
                } else {
                    $values[$index]++;
                }
            }
        }
    }
    $needTarget = ($last != 0)
        ? number_format((($now - $last) * 100 / $last), 1, '.', ' ')
        : 100.0;

    return response()->json([
        'needValue' => $total,
        'needTarget' => $needTarget,
        'needs' => $values,
        'needLabels' => $labels,
    ]);
}

public function getWidget5Data()
{
    $interns = DB::table('interns')->get();

    $currentYear = Carbon::now()->year;
    $data = [];

    foreach ($interns as $intern) {
        $postYear = date('Y', $intern->DATE_POST);
        if ($currentYear - $postYear <= 10) {
            $internship = DB::table('internships')
                ->select('NAME', 'TYPE_INTERNSHIP', 'DATE_END')
                ->where('ID_INTERNSHIP', $intern->ID_INTERNSHIP)
                ->first();

            if (!$internship || !$internship->DATE_END) {
                continue;
            }
            $endYear = date('Y', strtotime($internship->DATE_END));
            if (!isset($data[$endYear])) {
                $data[$endYear] = [
                    'name' => $endYear,
                    'series' => [
                        ['name' => 'Stage professionnel', 'value' => 0],
                        ['name' => 'Stage accadémique', 'value' => 0],
                        ['name' => 'Programme emploi jeune', 'value' => 0],
                    ],
                ];
            }
            switch ($internship->TYPE_INTERNSHIP) {
                case 'professional':
                    $i = 0;
                    break;
                case 'classic':
                    $i = 1;
                    break;
                default:
                    $i = 2;
                    break;
            }
            $data[$endYear]['series'][$i]['value']++;
        }
    }
    return response()->json(array_values($data));
}

public function getWidget6Data()
{
    $interns = DB::table('applicants')->get();
    $currentYear = now()->year;
    $data = [];

    foreach ($interns as $intern) {
        $year = date('Y', $intern->DATE_POST);
        if ($currentYear - $year <= 10) {
            if (!array_key_exists($year, $data)) {
                $data[$year]["name"] = $year;
                $data[$year]["series"][0]["name"] = "EMPLOYES DE LA MAIRIE";
                $data[$year]["series"][0]["value"] = 0;
                $data[$year]["series"][1]["name"] = "CHERCHEUR D'EMPLOI";
                $data[$year]["series"][1]["value"] = 0;
            }

            $i = $intern->APPLICANT_TYPE === 'employee' ? 0 : 1;
            $data[$year]["series"][$i]["value"]++;
        }
    }
    $data = array_values($data);

    return response()->json($data);
}

public function getWidget2Data()
{
    $offers = DB::table('applications')->select('DATE_START')->get();

    $total = 0;
    $last = 0;
    $now = 0;
    $labels = [];
    $values = [];

    $currentYear = now()->year;

    foreach ($offers as $offer) {
        if (!empty($offer->DATE_START)) {
            $y = date('Y', strtotime($offer->DATE_START));

            if ($currentYear - $y <= 10) {
                $total++;

                if ($currentYear - $y == 1) {
                    $last++;
                }

                if ($currentYear - $y == 0) {
                    $now++;
                }

            
                if (!in_array($y, $labels)) {
                    $labels[] = $y;
                }

           
                foreach ($labels as $k => $v) {
                    if ($v == $y) {
                        if (!isset($values[$k])) {
                            $values[$k] = 1;
                        } else {
                            $values[$k]++;
                        }
                    }
                }
            }
        }
    }

    $data = [
        'sessionValue' => $total,
        'sessionTarget' => ($last != 0) ? number_format((($now - $last) * 100 / $last), 1, '.', ' ') : 100.0,
        'sessions' => $values,
        'sessionLabels' => $labels
    ];

    return response()->json($data);
}

public function getWidget3Data()
{
    $offers = DB::table('offers')
                ->select('DATE_PUBLISH')
                ->where('STATUS', 'published')
                ->get();

    $total = 0;
    $last = 0;
    $now = 0;
    $labels = [];
    $values = [];

    $currentYear = now()->year;

    foreach ($offers as $offer) {
        $y = date('Y', strtotime($offer->DATE_PUBLISH));

        if ($currentYear - $y <= 10) {
            $total++;

            if ($currentYear - $y == 1) {
                $last++;
            }

            if ($currentYear - $y == 0) {
                $now++;
            }

            if (!in_array($y, $labels)) {
                $labels[] = $y;
            }

            foreach ($labels as $k => $v) {
                if ($v == $y) {
                    if (!isset($values[$k])) {
                        $values[$k] = 1;
                    } else {
                        $values[$k]++;
                    }
                }
            }
        }
    }

    $data = [
        'offerValue' => $total,
        'offerTarget' => ($last != 0) ? number_format((($now - $last) * 100 / $last), 1, '.', ' ') : 100.0,
        'offers' => $values,
        'offerLabels' => $labels
    ];

    return response()->json($data);
}

public function getWidgetsData()
{
    $data = [];

    $offers = DB::table('offers')->get();
    $data[0]["data"]["label"] = "OFFRES D'EMPLOI";
    $data[0]["data"]["count"] = $offers->count();

    $recruited = DB::table('applications')->where('IS_HIRED', 'yes')->get();
    $data[1]["data"]["label"] = "PERSONNELS RECRUTES";
    $data[1]["data"]["count"] = $recruited->count();

    $interns = DB::table('interns')->get();
    $data[2]["data"]["label"] = "STAGIAIRES";
    $data[2]["data"]["count"] = $interns->count();

    $youthPrograms = DB::table('internships')
                        ->where('TYPE_INTERNSHIP', 'youth program')
                        ->pluck('USED');
    
    $data[3]["data"]["label"] = "EMPLOIS JEUNES";
    $data[3]["data"]["count"] = $youthPrograms->sum(fn($value) => (int)$value);


    $applicants = DB::table('applicants')->count();
    $applications = DB::table('applications')->count(); 
    $data[4]["data"]["label"] = "CV";
    $data[4]["data"]["count"] = $applicants;

    return response()->json($data);
}

public function getWidget1Data()
{
    $currentYear = date("Y");
    $data = [];
    $data[$currentYear][0]["data"] = array_fill(0, 12, 0);
    $data[$currentYear][0]["fill"] = "start";
    $data[$currentYear][0]["label"] = "Offres";

    $offers = DB::table('offers')->select('DATE_PUBLISH')->get();

    foreach ($offers as $offer) {
        if (!empty($offer->DATE_PUBLISH)) {
            $year = date("Y", strtotime($offer->DATE_PUBLISH));
            $month = (int)date("m", strtotime($offer->DATE_PUBLISH)) - 1;

            if ($year == $currentYear) {
                $data[$year][0]["data"][$month]++;
            }
        }
    }

    return response()->json($data);
}

}
