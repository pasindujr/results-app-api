<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFourthSemResultRequest;
use App\Http\Requests\UpdateFourthSemResultRequest;
use App\Http\Resources\V1\FourthSemResult\FourthSemResultCollection;
use App\Http\Resources\V1\FourthSemResult\FourthSemResultResource;
use App\Models\FourthSemResult;

class FourthSemResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new FourthSemResultCollection(FourthSemResult::all());
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
     * @param  \App\Http\Requests\StoreFourthSemResultRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFourthSemResultRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FourthSemResult  $fourthSemResult
     * @return \Illuminate\Http\Response
     */
    public function show(FourthSemResult $fourthsemresult)
    {
        return new FourthSemResultResource($fourthsemresult);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FourthSemResult  $fourthSemResult
     * @return \Illuminate\Http\Response
     */
    public function edit(FourthSemResult $fourthSemResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFourthSemResultRequest  $request
     * @param  \App\Models\FourthSemResult  $fourthSemResult
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFourthSemResultRequest $request, FourthSemResult $fourthSemResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FourthSemResult  $fourthSemResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(FourthSemResult $fourthSemResult)
    {
        //
    }
}
