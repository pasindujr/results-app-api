<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSecondSemResultRequest;
use App\Http\Requests\UpdateSecondSemResultRequest;
use App\Http\Resources\V1\SecondSemResult\SecondSemResultCollection;
use App\Http\Resources\V1\SecondSemResult\SecondSemResultResource;
use App\Models\SecondSemResult;

class SecondSemResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new SecondSemResultCollection(SecondSemResult::all());
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
     * @param  \App\Http\Requests\StoreSecondSemResultRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSecondSemResultRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SecondSemResult  $secondSemResult
     * @return \Illuminate\Http\Response
     */
    public function show(SecondSemResult $secondsemresult)
    {
        return new SecondSemResultResource($secondsemresult);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SecondSemResult  $secondSemResult
     * @return \Illuminate\Http\Response
     */
    public function edit(SecondSemResult $secondSemResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSecondSemResultRequest  $request
     * @param  \App\Models\SecondSemResult  $secondSemResult
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSecondSemResultRequest $request, SecondSemResult $secondSemResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SecondSemResult  $secondSemResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(SecondSemResult $secondSemResult)
    {
        //
    }
}
