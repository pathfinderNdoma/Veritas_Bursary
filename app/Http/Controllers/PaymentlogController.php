<?php

namespace App\Http\Controllers;

use App\Models\PaymentLog;
use Illuminate\Http\Request;
use App\Models\staffBursaryData;
use App\Models\feesPayment;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use crypt;
use Session;
use PDF;

class PaymentlogController extends Controller
{
    //public function paymentLog(Request $request)
    public function feespayment(Request $request)
    {
        $faculty = $request->faculty; 
        $year = $request->year; 
        $log = DB::table('feesPayment')
        ->where('faculty', '=', $faculty)
        ->where('academic_year', '=', $year)
        ->get();
        $data1 = User::where('staffNo', session()->get('staffNo'))->first();
        $faculties = DB::table('faculties')->distinct()->get();
        //return($log);
        //return($faculty);
        return view('/studentAcc.paymentLog')->with('log', $log)->with('data1', $data1)->with('data2', $faculties);
    }

   
}
