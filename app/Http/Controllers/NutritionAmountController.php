<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Analysis;
use App\Nutritions;
use Illuminate\Support\Facades\Auth;

class NutritionAmountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myAnalyses = Auth::user()->nutritions;
        foreach ($myAnalyses as $myAnalysis){
            $myAnalysis->optimal = 0;
            $myAnalysis->bg_type = 'bg-success';
            if($myAnalysis->pivot->amount < $myAnalysis->minimum_amount){
                $myAnalysis->optimal = -1;
                $myAnalysis->bg_type = 'bg-warning';
            }
            if($myAnalysis->pivot->amount > $myAnalysis->maximum_amount){
                $myAnalysis->optimal = 1;
                $myAnalysis->bg_type = 'bg-danger';
            }
        }

        return view('nutrition_amount.index', [
            'analyses'    => $myAnalyses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nutrition_amount.create');
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
        return view('nutrition_amount.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('nutrition_amount.edit');
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
