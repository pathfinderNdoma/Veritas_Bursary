<?php

namespace App\Http\Controllers;

//use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\staffBursaryData;
use App\Models\User;
use APP\Models\paymentLog;
use Illuminate\Support\Facades\DB;
use crypt;
use Session;
use PDF;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    //public $veritas = 'Veritas University Bursary';


    public function payroll()
    {
        $data1 = User::where('staffNo', session()->get('staffNo'))->first();
        return view('payroll', compact('data1'));
    }

    public function login()
    {
        return view('login');
    }

    function loginMain(Request $req)
    {
        $req->validate([
            'staffNo' => 'required',
            'password' => 'required'
        ]);
        $user = User::where('staffNo', $req->input('staffNo'))->first();
        if ($user) {
            if ($user->password == $req->password) {
                $req->session()->put('staffNo', $user->staffNo);
                return redirect('/dashboard');
            } else {
                return back()->with('fail', 'Login unsuccessful, kindly enter a valid password');
            }
        } else {
            return back()->with('fail', 'Login unsuccessful, kindly enter a valid staff number');
        }
    }
    function salarySchedule()
    {
        return view('salarySchedule');
    }


    public function reg(Request $req)
    {

        $staffNo = session()->get('staffNo');

        if ($staff = staffBursaryData::where('staffNo', $staffNo)->first()) {
            $req->validate([
                'accountNo' => 'required|digits:10|:staff_bursary_data',
                'bankName' => 'required',
                'branchAddress' => 'required',
                'sortCode' => 'required',
                'pfa' => 'required',
                'rsapin' => 'required|:staff_bursary_data'
            ]);
        } else {
            $req->validate([
                'accountNo' => 'required|digits:10|unique:staff_bursary_data',
                'bankName' => 'required',
                'branchAddress' => 'required',
                'sortCode' => 'required',
                'pfa' => 'required',
                'rsapin' => 'required|unique:staff_bursary_data'
            ]);
            $staff = new staffBursaryData();
        }

        $staff->staffNo = $staffNo;
        $staff->accountNo = $req->accountNo;
        $staff->bankName = $req->bankName;
        $staff->branchAdd = $req->branchAddress;
        $staff->sortCode = $req->sortCode;
        $staff->PFA = $req->pfa;
        $staff->rsaPIN = $req->rsapin;
        $staff->created_at = date('Y-m-d H:i:s');
        $staff->updated_at = date('Y-m-d H:i:s');

        $save = $staff->save();
        if ($save) {
            return back()->with('success', 'Your information has been updated successfully');
        } else {
            return back()->with('fail', 'Unsuccessful, something went wrong, kindly try again.');
        }
    }

    public function staffReg()
    {
        $data = array();
        if (session()->get('staffNo')) {
            $data1 = User::where('staffNo', session()->get('staffNo'))->first();
            $data2 = staffBursaryData::where('staffNo', session()->get('staffNo'))->first();
            if ($data1) return view('/staffReg', compact('data1', 'data2'));
        }
    }
    public function dashboard()
    {

        $data1 = User::where('staffNo', session()->get('staffNo'))->first();
        return view('/dashboard', compact('data1'));
    }
    public function payslip()
    {
        $data1 = User::where('staffNo', session()->get('staffNo'))->first();
        return view('/payslip', compact('data1'));
    }
    public function downloadpdf(Request $request)
    {
        $staffNo = session()->get('staffNo');
        $year                =           $request->year;
        $month               =           $request->month;
        $id                  =            $staffNo;
        //$date = $year .''. $month;
        //$staff = staffBursaryData::where('staffNo', $id)->first();
        $users = DB::table('payslips')
            ->join('users', 'users.staffNo', '=', 'payslips.staffNo')
            ->join('staff_bursary_data', 'staff_bursary_data.staffNo', '=', 'payslips.staffNo')
            ->where('payslips.staffNo', '=', $id)
            //->where('users.status', '=', 'active')
            ->first();
        $total_earnings = $users->house_allowance + $users->basic_salary;
        $total_deductions = $users->tax + $users->pension;
        $net_pay   =  $total_earnings - $total_deductions;



        // $pdf = PDF::loadView('download_payslip', ['data' => $data]);
        $pdf = PDF::loadView('download_payslip', [
            'users' => $users,
            'month' => $month,
            'year' => $year,
            'total_earnings' => $total_earnings,
            'total_deductions' => $total_deductions,
            'net_pay' => $net_pay
        ]);

        return $pdf->download('payslip_' . substr($month, 0, 3) . '_' . $year . '.pdf');
    }
    public function paymentLog()
    {
        $data1 = User::where('staffNo', session()->get('staffNo'))->first();
        $faculties = DB::table('faculties')->distinct()->get();
        return view('/studentAcc.paymentLog')->with('data1', $data1)->with('data2', $faculties);
    }
    public function paymentReport()
    {
        $data1 = User::where('staffNo', session()->get('staffNo'))->first();
        return view('/studentAcc.paymentReport', compact('data1'));
    }
}
