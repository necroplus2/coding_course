<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Effort;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\StoreEffortRequest;
use App\Http\Requests\UpdateEffortRequest;


class EffortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreEffortRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEffortRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Effort  $effort
     * @return \Illuminate\Http\Response
     */
    public function show(Effort $effort)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Effort  $effort
     * @return \Illuminate\Http\Response
     */
    public function edit(Effort $effort)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEffortRequest  $request
     * @param  \App\Models\Effort  $effort
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEffortRequest $request, Effort $effort)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Effort  $effort
     * @return \Illuminate\Http\Response
     */
    public function destroy(Effort $effort)
    {
        //
    }

    public function userEffort() {
        // 1
        $myKelas = User::find(auth()->user()->id)->efforts;
        // 2
        // $myKelas = Effort::where('user_id', auth()->user()->id)->get();
        // dd($myKelas);
        return view('course.dasbor', [
            'myKelas' => $myKelas,
        ]);
    }

    public function next_content() {
        $request = new Request();
        // dd($request);
        // $response = array(
        //     'status' => 'success',
        //     'msg'    => 'Setting created successfully',
        // );
    
        // return Response::json($response);

        if($request->ajax()) {
            return Response::json($request->all());
        }

    }


}
