<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Region as DataRegion;
use Carbon\Carbon;

class RegionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = dataRegion::all();
        return view('admin.region.index', ['regions' => $regions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
        ])->validate();
        try {
            $test = dataRegion::updateOrCreate([
                'name' => $request['name'],
            ]);
            return redirect('/regions')->with('success', 'Your data has been deleted. '); 
        } catch (\Throwable $th) {
            return redirect('/regions')->with('error', ); 
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $region = dataRegion::find($id);
        $regions = dataRegion::all();
        return view('admin.region.index', ['regions' => $regions, 'region' => $region]);
    }

}
