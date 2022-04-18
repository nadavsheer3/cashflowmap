<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cashflow;
use App\Models\User;

class InsightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id();
        
        $income = Cashflow::where('user_id',$user_id)->where('flow', 'income')->get()->groupBy('category');
        $expence = Cashflow::where('user_id',$user_id)->where('flow', 'expence')->get()->groupBy('category');
        
        $sum['income'] = Cashflow::where('user_id',$user_id)->where('flow','income')->sum('amount');
        $sum['expence'] = Cashflow::where('user_id',$user_id)->where('flow','expence')->sum('amount');
        $sum_income = [];
        $sum_expence = [];


        //$groups['income'] = $income->get()->groupBy('category');
        //$groups['expence'] = $expence->get()->groupBy('category');

        foreach ($income as $key_i => $value_i) {
            $sum_income[$key_i] = Cashflow::where('user_id',$user_id)->where('flow', 'income')->where('category', $key_i)->sum('amount');
        };

        foreach ($expence as $key_e => $value_e) {
            $sum_expence[$key_e] = Cashflow::where('user_id',$user_id)->where('flow', 'expence')->where('category', $key_e)->sum('amount');
        };

        return view('insights.index', compact('income', 'expence', 'sum', 'sum_income','sum_expence'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
