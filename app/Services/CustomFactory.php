<?php

namespace App\Services;

use App\Base\DBHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

class CustomFactory
{
    public function handle(string $table, Request $request, DBHelper $bd)
    {
        if (Schema::hasTable($table)) {
            return $bd->getList($table);
        }

        if ($table === 'widget1') return $this->handleWidget1($bd);
        if ($table === 'widget2') return $this->handleWidget2($bd);
        if ($table === 'widget3') return $this->handleWidget3($bd);
        if ($table === 'widget4') return $this->handleWidget4($bd);
        if ($table === 'widget5') return $this->handleWidget5($bd);
        if ($table === 'widget6') return $this->handleWidget6($bd);
        if ($table === 'widget7') return $this->handleWidget7($bd);
        if ($table === 'widgetDR') return $this->handleWidgetDR($bd);
        if ($table === 'widgetInterns') return $this->handleWidgetInterns($bd);
        if ($table === 'widgetSessions') return $this->handleWidgetSessions($bd);
        if ($table === 'widgets') return $this->handleWidgets($bd);
        

        if ($table === 'needs' && $request->has('emiters')) {
            return DB::table('needs')
                ->select('EMITER')
                ->distinct()
                ->whereNotNull('EMITER')
                ->orderBy('ID_NEED')
                ->get();
        }
        if ($table === 'needs' && $request->has('roles')) {
            return DB::table('needs')
                ->select('NAME')
                ->distinct()
                ->whereNotNull('NAME')
                ->orderBy('ID_NEED')
                ->get();
        }
        if ($table === 'applicants') {
            $applicants = DB::table('applicants')->get();
        
            return $applicants->map(function ($item) {
                $item->AGE = $item->DATE_BIRTH
                    ? \Carbon\Carbon::parse($item->DATE_BIRTH)->age
                    : null;
                return $item;
            });
        }
        if ($table === 'applicants' && $request->has('roles')) {
            return DB::table('applicants')
                ->select('ROLE')
                ->distinct()
                ->whereNotNull('ROLE')
                ->orderBy('ID_APPLICANT') 
                ->pluck('ROLE') 
                ->toArray();
        }
        if ($table === 'applicants' && $request->has('levels')) {
            return DB::table('applicants')
                ->select('SCHOOL_LEVEL')
                ->distinct()
                ->whereNotNull('SCHOOL_LEVEL')
                ->orderBy('ID_APPLICANT')
                ->get();
        }
        if ($table === 'applicants' && $request->has('specialities')) {
            return DB::table('applicants')
                ->select('SPECIALITY')
                ->distinct()
                ->whereNotNull('SPECIALITY')
                ->orderBy('ID_APPLICANT')
                ->get();
        }
        if ($table === 'applicants' && $request->has('actual_roles')) {
            return DB::table('applicants')
                ->select('ACTUAL_ROLE')
                ->distinct()
                ->whereNotNull('ACTUAL_ROLE')
                ->orderBy('ID_APPLICANT')
                ->get();
        }
        if ($table === 'applicants' && $request->has('depts')) {
            return DB::table('applicants')
                ->select('DEPARTMENT')
                ->distinct()
                ->whereNotNull('DEPARTMENT')
                ->orderBy('ID_APPLICANT')
                ->get();
        }
        if ($table === 'applicants' && $request->has('diplomas')) {
            return DB::table('applicants')
                ->select('DIPLOMA')
                ->distinct()
                ->whereNotNull('DIPLOMA')
                ->orderBy('ID_APPLICANT')
                ->get();
        }
        if ($table === 'interns') {
            if ($request->has('distinct_internships')) {
                return DB::table('internships')
                    ->selectRaw('DISTINCT NAME')
                    ->get();
            }
        
            if ($request->has('internships')) {
                return DB::table('internships')
                    ->select('NAME', 'ID_INTERNSHIP', 'TYPE_INTERNSHIP')
                    ->where('STATUS', 'active')
                    ->get();
            }
        
            if ($request->has('diplomas')) {
                return DB::table('interns')
                    ->selectRaw('DISTINCT SCHOOLING_LEVEL')
                    ->get();
            }
        
            if ($request->has('depts')) {
                return DB::table('interns')
                    ->selectRaw('DISTINCT DEPARTMENT')
                    ->get();
            }
        
            if ($request->has('specs')) {
                return DB::table('interns')
                    ->selectRaw('DISTINCT FACULTY')
                    ->get();
            }
        
            if ($request->has('internship_types')) {
                return DB::table('internships')
                    ->selectRaw('DISTINCT TYPE_INTERNSHIP')
                    ->get();
            }
        
            if ($request->has('intern')) {
                $id = intval($request->query('intern'));
        
                $intern = DB::table('interns')->where('ID_INTERN', $id)->first();
        
                if (!$intern) {
                    return response()->json(['message' => 'Intern not found'], 404);
                }
        
                $internship = DB::table('internships')
                    ->select('NAME', 'TYPE_INTERNSHIP')
                    ->where('ID_INTERNSHIP', $intern->ID_INTERNSHIP)
                    ->first();
        
                $intern = (array) $intern;
                $intern['INTERNSHIP'] = $internship->NAME ?? null;
                $intern['TYPE_INTERNSHIP'] = $internship->TYPE_INTERNSHIP ?? null;
        
                return $intern;
            }
        }
        if ($table === 'quickList') {
            if ($request->has('matricules')) {
                $query = DB::table('applicants')->select('ID_APPLICANT', 'MATRICULE');
        
                if ($request->filled('q')) {
                    $q = $request->query('q');
                    $query->where('MATRICULE', 'like', "%$q%");
                }
        
                return $query->get();
            }
        
            if ($request->has('needs')) {
                $query = DB::table('needs')
                    ->select('*')
                    ->where('STATUS', 'approuved')
                    ->whereNotIn('ID_NEED', function ($subquery) {
                        $subquery->select('ID_NEED')->from('offers');
                    })
                    ->orderByDesc('DATE_POST');
        
                if ($request->filled('q')) {
                    $q = $request->query('q');
                    $query->where('REFERENCE', 'like', "%$q%");
                }
        
                return $query->get();
            }
        
            if ($request->has('references')) {
                $query = DB::table('offers')
                    ->select('ID_OFFER', 'REFERENCE', 'SESSION_START', 'SESSION_END');
        
                if ($request->filled('q')) {
                    $q = $request->query('q');
                    $query->where('REFERENCE', 'like', "%$q%");
                }
        
                return $query->get();
            }
        
            if ($request->has('evaluators')) {
                $applicationId = intval($request->query('evaluators'));
        
                $offer = DB::table('applications')
                    ->where('ID_APPLICATION', $applicationId)
                    ->value('ID_OFFER');
        
                return DB::table('evaluators')
                    ->select('ID_EVALUATOR', 'NAME')
                    ->where('ID_OFFER', $offer)
                    ->get();
            }
        
            if ($request->has('questions')) {
                $applicationId = intval($request->query('questions'));
        
                if ($applicationId !== 0) {
                    $offer = DB::table('applications')
                        ->where('ID_APPLICATION', $applicationId)
                        ->value('ID_OFFER');
        
                    return DB::table('questions')
                        ->select('ID_QUESTION', 'NAME', 'POINTS')
                        ->where('ID_OFFER', $offer)
                        ->get();
                } else {
                    return DB::table('questions')
                        ->select('ID_QUESTION', 'NAME', 'POINTS')
                        ->get();
                }
            }
        
            return response()->json("Inconsistent query", 400);
        }

        if ($table === 'applications') {
            if ($request->has('references')) {
                $offerIds = DB::table('applications')
                    ->distinct()
                    ->pluck('ID_OFFER');
        
                $data = [];
        
                foreach ($offerIds as $id) {
                    $reference = DB::table('offers')
                        ->where('ID_OFFER', $id)
                        ->value('REFERENCE');
        
                    if ($reference) {
                        $data[] = ['REFERENCE' => $reference];
                    }
                }
        
                return $data;
            }
            if ($request->has('application')) {
                $applicationId = intval($request->query('application'));
                $application = DB::table('applications')
                    ->where('ID_APPLICATION', $applicationId)
                    ->first();
        
                if (!$application) {
                    return response()->json(['error' => 'Application not found'], 404);
                }
                $data = (array) $application;
                $data['TIME_START'] = empty($data['DATE_START']) ? '00:00' : date('H:i', strtotime($data['DATE_START']));
                $data['TIME_END'] = empty($data['DATE_END']) ? '00:00' : date('H:i', strtotime($data['DATE_END']));
                $matricule = DB::table('applicants')
                    ->where('ID_APPLICANT', $data['ID_APPLICANT'])
                    ->value('MATRICULE');

                $offer = DB::table('offers')
                    ->select('REFERENCE', 'SESSION_START', 'SESSION_END')
                    ->where('ID_OFFER', $data['ID_OFFER'])
                    ->first();
                $data['MATRICULE'] = $matricule ?? '';
                $data['REFERENCE'] = $offer->REFERENCE ?? '';
                $data['SESSION_START'] = $offer->SESSION_START ?? '';
                $data['SESSION_END'] = $offer->SESSION_END ?? '';
                return $data;
            }
            if ($request->has('files')) {
                $appId = intval($request->query('files'));
        
                return DB::table('applications_docs')
                    ->where('ID_APPLICATION', $appId)
                    ->get();
            }
        }

        if ($table === 'internships') {
            if ($request->has('directions')) {
                return DB::table('internships')
                    ->selectRaw('DISTINCT DIRECTION')
                    ->get();
            }
            if ($request->has('sessions')) {
                return DB::table('internships')
                    ->selectRaw('DISTINCT NAME')
                    ->get();
            }
            if ($request->has('menthors')) {
                return DB::table('internships')
                    ->selectRaw('DISTINCT MENTHOR')
                    ->get();
            }
            $datas = DB::table('internships')->get();
            $data = [];
        
            foreach ($datas as $dat) {
                $row = (array) $dat;
                $row['YEAR_START'] = $dat->DATE_START ? date("Y", strtotime($dat->DATE_START)) : null;
                $row['YEAR_END'] = $dat->DATE_END ? date("Y", strtotime($dat->DATE_END)) : null;
                $data[] = $row;
            }
        
            return $data;
        }
        if ($table === 'hirings') {
            $datas = DB::table('applications')->get();
            $data = [];
        
            foreach ($datas as $dat) {
                if (!empty($dat->DATE_START)) {
                    $applicant = DB::table('applicants')
                        ->where('ID_APPLICANT', $dat->ID_APPLICANT)
                        ->value('MATRICULE');
        
                    $offer = DB::table('offers')
                        ->where('ID_OFFER', $dat->ID_OFFER)
                        ->value('REFERENCE');
        
                    $data[] = [
                        'start' => $dat->DATE_START,
                        'end' => $dat->DATE_END,
                        'title' => $applicant,
                        'reference' => $offer,
                        'status' => $dat->STATUS,
                        'id' => $dat->ID_APPLICATION,
                        'allDay' => true,
                        'resizable' => [
                            'beforeStart' => true,
                            'afterEnd' => true,
                        ],
                    ];
                }
            }
        
            return $data;
        }

        if ($table === 'offers') {
            if (request()->has('needs')) {
                $data = DB::table('needs')
                    ->where('STATUS', 'approuved')
                    ->whereNotIn('ID_NEED', function ($query) {
                        $query->select('ID_NEED')->from('offers');
                    })
                    ->orderByDesc('DATE_POST')
                    ->get();
            } elseif (request()->has('emiters')) {
                $data = DB::table('offers')->select('EMITER')->distinct()->get();
            } elseif (request()->has('roles')) {
                $data = DB::table('offers')->select('NAME')->distinct()->get();
            } elseif (request()->has('offer')) {
                $data = DB::table('offers')
                    ->where('ID_OFFER', intval(request('offer')))
                    ->first();
            } 
            } else {
                $data = ["error" => "Invalid offers query"];
            }
            return $data;
        }
protected function handleWidget1(DBHelper $bd): array
    {
        $y = date("Y");
        $offers = $bd->getList("offers");
        $data[$y][0]["data"] = array_fill(0, 12, 0);
        $data[$y][0]["fill"] = "start";
        $data[$y][0]["label"] = "Offres";
        foreach ($offers as $offer) {
            $yr = date("Y", strtotime($offer["DATE_PUBLISH"]));
            if ($yr == $y) {
                $m = intval(date("m", strtotime($offer["DATE_PUBLISH"]))) - 1;
                $data[$yr][0]["data"][$m]++;
            }
        }
        return $data;
    }
    protected function handleWidget2(DBHelper $bd): array
    {
        $offers = $bd->getList("applications", "DATE_START");
        $total = $last = $now = 0;
        $labels = $values = [];

        foreach ($offers as $offer) {
            if (!empty($offer["DATE_START"])) {
                $y = date('Y', strtotime($offer["DATE_START"]));
                if (date('Y') - $y <= 10) {
                    $total++;
                    if (date('Y') - $y == 1) $last++;
                    if (date('Y') - $y == 0) $now++;
                    if (!in_array($y, $labels)) $labels[] = $y;
                    foreach ($labels as $k => $v) {
                        if ($v == $y) {
                            $values[$k] = ($values[$k] ?? 0) + 1;
                        }
                    }
                }
            }
        }

        return [
            'sessionValue' => $total,
            'sessionTarget' => $last ? number_format((($now - $last) * 100 / $last), 1, '.', ' ') : 100.0,
            'sessions' => $values,
            'sessionLabels' => $labels,
        ];
    }

    protected function handleWidget3(DBHelper $bd): array
    {
        $offers = $bd->getList("offers", "DATE_PUBLISH", ["STATUS" => "published"]);
        $total = $last = $now = 0;
        $labels = $values = [];

        foreach ($offers as $offer) {
            $y = date('Y', strtotime($offer["DATE_PUBLISH"]));
            if (date('Y') - $y <= 10) {
                $total++;
                if (date('Y') - $y == 1) $last++;
                if (date('Y') - $y == 0) $now++;
                if (!in_array($y, $labels)) $labels[] = $y;
                foreach ($labels as $k => $v) {
                    if ($v == $y) {
                        $values[$k] = ($values[$k] ?? 0) + 1;
                    }
                }
            }
        }

        return [
            'offerValue' => $total,
            'offerTarget' => $last ? number_format((($now - $last) * 100 / $last), 1, '.', ' ') : 100.0,
            'offers' => $values,
            'offerLabels' => $labels,
        ];
    }
    protected function handleWidget4(DBHelper $bd): array
{
    $offers = $bd->getList("needs", "DATE_APPROUVAL");
    $total = $last = $now = 0;
    $labels = [];
    $values = [];

    foreach ($offers as $offer) {
        if (!empty($offer["DATE_APPROUVAL"])) {
            $y = date('Y', strtotime($offer["DATE_APPROUVAL"]));
            if (date('Y') - $y <= 10) {
                $total++;
                if (date('Y') - $y == 1) $last++;
                if (date('Y') - $y == 0) $now++;
                if (!in_array($y, $labels)) $labels[] = $y;
                foreach ($labels as $k => $v) {
                    if ($v == $y) {
                        $values[$k] = ($values[$k] ?? 0) + 1;
                    }
                }
            }
        }
    }

    return [
        'needValue' => $total,
        'needTarget' => ($last != 0) ? number_format((($now - $last) * 100 / $last), 1, '.', ' ') : 100.0,
        'needs' => $values,
        'needLabels' => $labels,
    ];
}
protected function handleWidget5(DBHelper $bd): array
{
    $interns = $bd->getList("interns");
    $data = [];

    foreach ($interns as $intern) {
        $year = date('Y', strtotime($intern["DATE_POST"]));
        if (date('Y') - $year <= 10) {
            // 🔴 Correction ici : pas de sélection personnalisée, on récupère tout
            $internshipList = $bd->getList("internships", null, ["ID_INTERNSHIP" => $intern["ID_INTERNSHIP"]]);
            if (empty($internshipList)) continue;

            $internship = $internshipList[0];

            if (empty($internship["DATE_END"])) continue;

            $y = date('Y', strtotime($internship["DATE_END"]));
            if (!isset($data[$y])) {
                $data[$y]["name"] = $y;
                $data[$y]["series"] = [
                    ["name" => "Stage professionnel", "value" => 0],
                    ["name" => "Stage accadémique", "value" => 0],
                    ["name" => "Programme emploi jeune", "value" => 0],
                ];
            }

            $type = $internship["TYPE_INTERNSHIP"];
            $i = ($type === "professional") ? 0 : (($type === "classic") ? 1 : 2);
            $data[$y]["series"][$i]["value"]++;
        }
    }

    return array_values($data);
}

protected function handleWidget6(DBHelper $bd): array
{
    $interns = $bd->getList("applicants");
    $data = [];
    foreach ($interns as $intern) {
        $rawDate = $intern["DATE_POST"];
        if (is_numeric($rawDate) && (int)$rawDate > 1000000000) {
            $y = date('Y', (int)$rawDate);
        }
        elseif (strtotime($rawDate)) {
            $y = date('Y', strtotime($rawDate));
        }
        else {
            continue;
        }

        if ((int)date('Y') - (int)$y <= 10) {
            if (!isset($data[$y])) {
                $data[$y]["name"] = $y;
                $data[$y]["series"][0] = ["name" => "EMPLOYES DE LA MAIRIE", "value" => 0];
                $data[$y]["series"][1] = ["name" => "CHERCHEUR D'EMPLOI", "value" => 0];
            }

            $i = $intern["APPLICANT_TYPE"] === "employee" ? 0 : 1;
            $data[$y]["series"][$i]["value"]++;
        }
    }
    return array_values($data);
}

    protected function handleWidget7(DBHelper $bd): array
{
    $interns = $bd->getList("applicants");
    $data = [[], []];

    foreach ($interns as $intern) {
        $y = date('Y', $intern["DATE_POST"]);
        if (date('Y') - $y == 0) {
            $c = ($intern["APPLICANT_TYPE"] === "employee") ? 0 : 1;
            if ($intern["APPLICANT_TYPE"] !== "employee") {
                $roles = array_map('trim', explode(",", $intern["ROLE"]));
                foreach ($roles as $rol) {
                    $rol = $rol ?: "AUCUN";
                    if (!isset($data[$c][$rol])) {
                        $data[$c][$rol] = ["ROLE" => $rol, "VALUE" => 1];
                    } else {
                        $data[$c][$rol]["VALUE"]++;
                    }
                }
            } else {
                $rol = $intern["ACTUAL_ROLE"];
                if (!isset($data[$c][$rol])) {
                    $data[$c][$rol] = ["ROLE" => $rol, "VALUE" => 1];
                } else {
                    $data[$c][$rol]["VALUE"]++;
                }
            }
        }
    }

    $data[0] = array_values($data[0]);
    $data[1] = array_values($data[1]);

    sort($data[0]);
    sort($data[1]);

    return $data;
}
protected function handleWidgetDR(DBHelper $bd): array
{
    $needs = $bd->getList("needs");
    $data = [];

    foreach ($needs as $need) {
        if (date('Y', $need["DATE_POST"]) == date("Y")) {
            $em = $need["EMITER"];
            if (!isset($data[$em])) {
                $data[$em] = [
                    "ENTITE" => $em,
                    "DR" => 0,
                    "OK" => 0,
                    "NO" => 0,
                ];
            }
            $data[$em]["DR"]++;
            if ($need["STATUS"] === "approuved") $data[$em]["OK"]++;
            if ($need["STATUS"] === "rejected") $data[$em]["NO"]++;
        }
    }

    return array_values($data);
}
protected function handleWidgetInterns(DBHelper $bd): array
{
    $needs = $bd->getList("interns");
    $data = [];

    foreach ($needs as $intern) {
        if (date('Y', $intern["DATE_POST"]) == date("Y")) {
            $id = $intern["ID_INTERNSHIP"];
            if (!isset($data[$id])) {
                $internship = $bd->getList("internships", "NAME,TYPE_INTERNSHIP", ["ID_INTERNSHIP" => $id]);
                if (empty($internship)) continue;
                $data[$id] = [
                    "TYPE_INTERNSHIP" => $internship[0]["TYPE_INTERNSHIP"],
                    "INTERNSHIP" => $internship[0]["NAME"],
                    "INTERN" => 0,
                ];
            }
            $data[$id]["INTERN"]++;
        }
    }

    return array_values($data);
}
protected function handleWidgetSessions(DBHelper $bd): array
{
    $applications = $bd->getList("applications", "DATE_START,DATE_END,ID_OFFER,IS_HIRED", null, ["order_by" => "DATE_START ASC"]);
    $data = [];

    foreach ($applications as $application) {
        $startYear = !empty($application["DATE_START"]) ? date('Y', strtotime($application["DATE_START"])) : null;
        if ($startYear == date("Y")) {
            $offer = $bd->getList("offers", "NAME", ["ID_OFFER" => $application["ID_OFFER"]]);
            if (empty($offer)) continue;
            $name = $offer[0]["NAME"];
            if (!isset($data[$name])) {
                $data[$name] = [
                    "POSTE" => $name,
                    "SESSION" => date("d-m", strtotime($application["DATE_START"])) . "/" . date("d-m", strtotime($application["DATE_END"])),
                    "RECRUTES" => 0,
                ];
            }
            if ($application["IS_HIRED"] === "yes") $data[$name]["RECRUTES"]++;
        }
    }

    return array_values($data);
}
    protected function handleWidgets(DBHelper $bd): array
    {
        $data = [];
        $needs = $bd->getList("offers");
        $data[]['data'] = ["label" => "OFFRES D'EMPLOI", "count" => count($needs)];

        $hired = $bd->getList("applications", "ID_APPLICATION", ["IS_HIRED" => "yes"]);
        $data[]['data'] = ["label" => "PERSONNELS RECRUTES", "count" => count($hired)];

        $interns = $bd->getList("interns");
        $data[]['data'] = ["label" => "STAGIAIRES", "count" => count($interns)];

        $youth = $bd->getList("internships", "USED", ["TYPE_INTERNSHIP" => "youth program"]);
        $totalYouth = array_sum(array_map(fn($o) => intval($o["USED"]), $youth));
        $data[]['data'] = ["label" => "EMPLOIS JEUNES", "count" => $totalYouth];

        $cvs = $bd->getList("applicants");
        $data[]['data'] = ["label" => "CV", "count" => count($cvs)];

        return $data;
    }

        }
    
        



    