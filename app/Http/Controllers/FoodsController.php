<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File; 

class FoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::all();
        return view('foods.index', compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('foods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'thumb' => 'required',
                'price' => 'required',
            ],
        )->validate();
    
        if($request->hasFile('thumb')){
            $file = $request->file('thumb');
            $filename = $file->getClientOriginalName();
            $file->storeAs('public/assets/img/',$filename);

            try {
            Food::create([
                'title' => $request->title,
                'thumb' => $filename,
                'price' => $request->price,
            ]);
            return redirect()->route('foods.index');

            } catch (\Throwable $th) {

            return redirect()->back();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        return view('foods.edit', compact('food'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {
        Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'thumb' => 'required',
                'price' => 'required',
            ],
        )->validate();

        if($request->hasFile('thumb')){
            $file = $request->file('thumb');
            $filename = $file->getClientOriginalName();
            $file->storeAs('public/assets/img/',$filename);

            try {
            Food::create([
                'title' => $request->title,
                'thumb' => $filename,
                'price' => $request->price,
            ]);
            return redirect()->route('foods.index');

            } catch (\Throwable $th) {

            return redirect()->back();
            }
        } else {
            try {
                $food->update([
                    'title' => $request->title,
                    'thumb' => $request->thumb,
                    'price' => $request->price,
                ]);
                return redirect()->route('foods.index');
            } catch (\Throwable $th) {
                return redirect()->back();
            } 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        try {
            $food->delete();
        } catch (\Throwable $th) {
            return redirect()->back();
        } 

        return redirect()->back();
    }
}
