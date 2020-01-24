<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredients;
use Illuminate\Support\Facades\Auth;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredients = Ingredients::with('nutritions')->get();
        $analyses = Auth::user()->nutritions;
        foreach ($analyses as $analysis){
            $analysis->optimal = 0;
            $analysis->bg_type = 'bg-success';
            if($analysis->pivot->amount < $analysis->minimum_amount){
                $analysis->optimal = -1;
                $analysis->bg_type = 'bg-warning';
            }
            if($analysis->pivot->amount > $analysis->maximum_amount){
                $analysis->optimal = 1;
                $analysis->bg_type = 'bg-danger';
            }
        }

        return view('ingredients.index', [
            'ingredients'   => $ingredients,
            'analyses'      => $analyses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingredient.create');
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
        return view('ingredient.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('ingredient.edit');
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
