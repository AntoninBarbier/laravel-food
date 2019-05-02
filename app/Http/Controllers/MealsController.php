<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;
use Auth;

class MealsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // VIDE: les repas sont affichées sur la vue principale, 'home'
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('meals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $meal = new Meal;
        $meal->meal_date = $request->date;
        $meal->type = $request->type;

        // for($i = 0; $i < count($request->products); $i++) {
        //     $product = new Product;
        //     $product->name = $request->names[$i];
        //     $product->picture = $request->pictures[$i];
        //     $product->energetic_value = $request->energies[$i];
        //     $product->save();
        // }

        $meal->user_id = Auth::user()->id;
        $meal->save();

        // foreach(array_values($request->products) as $p) {
        //     if($p == null) {
        //         $meal->products()->sync($request->products, false);
        //     }
        // }

        // if(coun {
        //     $meal->products()->sync($request->products, false);
        // }
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // VIDE: le détail des repas est aussi affiché sur la vue principale, 'home'
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $meal = Meal::find($id);
        return view('meals.edit', compact('meal'));
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
        $meal = Meal::find($id);
        $meal->delete();
        return redirect()->route('home')->with('success', 'Repas supprimé');
    }
}
