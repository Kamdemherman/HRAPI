<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\SpecialFilterService;
use App\Services\DynamicQueryService;
use Carbon\Carbon;

class CustomAttendanceController extends Controller
{
    public function quickList(Request $request)
    {
        $q = $request->query('q', '');
        $data = [];

        if ($request->has('matricules')) {
            if ($q === '') {
                $data = DB::table('employees')
                    ->select('ID_EMPLOYEE', 'NAME', 'SURNAME', 'MATRICULE')
                    ->get();
            } else {
                $data = DB::table('employees')
                    ->select('ID_EMPLOYEE', 'NAME', 'SURNAME', 'MATRICULE')
                    ->where('MATRICULE', 'like', '%' . $q . '%')
                    ->get();
            }
        } elseif ($request->has('mats')) {
            if ($q === '') {
                $employees = DB::table('employees')
                    ->select('ID_EMPLOYEE', 'NAME', 'SURNAME', 'MATRICULE', 'CREDIT', 'SENIORITY', 'KIDS')
                    ->get();
            } else {
                $employees = DB::table('employees')
                    ->select('ID_EMPLOYEE', 'NAME', 'SURNAME', 'MATRICULE', 'CREDIT', 'SENIORITY', 'KIDS')
                    ->where('MATRICULE', 'like', '%' . $q . '%')
                    ->get();
            }

            foreach ($employees as $emp) {
                $carrier = DB::table('employee_contracts')
                    ->select('HIRING_DATE', 'CATEGORY', 'DEPT', 'SERVICE', 'DIRECTION')
                    ->where('ID_EMPLOYEE', $emp->ID_EMPLOYEE)
                    ->orderByDesc('DATE_POST')
                    ->limit(1)
                    ->first();

                $data[] = array_merge((array) $emp, (array) $carrier);
            }
        }

        return response()->json($data);
    }
}
