<?php

namespace App\Http\Controllers;

use App\Models\salaryDefinition;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class salaryDefinitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Return the view of the salary definition page
    public function index()
    {
        $data1 = User::where('staffNo', session()->get('staffNo'))->first();
        $salary_def = DB::table('salary_definitions')
        ->get();
        return view('/salaryDefinition')->with('data1', $data1)->with('data', $salary_def);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        
       $add_salary_definition                    = new salaryDefinition();
       $add_salary_definition ->gradeLevel      =  $request->input('grade_level');
       $add_salary_definition ->basicSalary      =  $request->input('basicSalary');
       $add_salary_definition ->allowance        =  $request->input('allowance');
       $add_salary_definition ->tax              =  $request->input('tax');
       $add_salary_definition ->pension          =  $request->input('pension');

       if($add_salary_definition ->save()){
        $salary_def = DB::table('salary_definitions')
        ->get();
        $data1 = User::where('staffNo', session()->get('staffNo'))->first();
        return redirect('/salaryDefinition')->with('data', $salary_def)->with('data1', $data1)->with('success', 'Salary Definition Added');
       }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $data = $request->grade_level;
        return($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //$data = $request->grade_level;
        return('welcome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
