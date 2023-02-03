<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FootersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footers = Footer::all();
        return view('footers.index', compact('footers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('footers.create');
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
                'about' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'email' => 'required',
            ],
        )->validate();
        try {
            Footer::create([
                'about' => $request->about,
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email,
            ]);
            return redirect()->route('footers.index');
        } catch (\Throwable $th) {
            return redirect()->back();
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        return view('footers.edit', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footer $footer)
    {
        Validator::make(
            $request->all(),
            [
                'about' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'email' => 'required',
            ],
        )->validate();

        try {
            $footer->update([
                'about' => $request->about,
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email,
            ]);
            return redirect()->route('footers.index');
        } catch (\Throwable $th) {
            return redirect()->back();
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
        try {
            $footer->delete();
        } catch (\Throwable $th) {
            return redirect()->back();
        } 

        return redirect()->back();
    }
}
