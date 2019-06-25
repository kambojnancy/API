<?php

namespace App\Http\Controllers;

use App\MyApp;
use Illuminate\Http\Request;
use App\Http\Resources\MyappResource;
use App\Helpers\ApiResponse;


class MyAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myApps = MyApp::all();
        $myApps = MyappResource::collection($myApps);
        return ApiResponse::success('myapp fetched', $myApps);
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
     * @param  \App\MyApp  $myApp
     * @return \Illuminate\Http\Response
     */
    public function show(MyApp $myApp)
    {
        return new MyappResource($myApps);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MyApp  $myApp
     * @return \Illuminate\Http\Response
     */
    public function edit(MyApp $myApp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MyApp  $myApp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyApp $myApp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MyApp  $myApp
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyApp $myApp)
    {
        //
    }
}
