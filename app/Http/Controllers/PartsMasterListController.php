<?php

namespace App\Http\Controllers;

use App\Models\PartsMasterList;
use App\Http\Requests\StorePartsMasterListRequest;
use App\Http\Requests\UpdatePartsMasterListRequest;

class PartsMasterListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partsMasterList = PartsMasterList::all();
        return view('partsmasterlist.index', ['partsmasterlist' => $partsMasterList]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePartsMasterListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PartsMasterList $partsMasterList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PartsMasterList $partsMasterList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePartsMasterListRequest $request, PartsMasterList $partsMasterList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PartsMasterList $partsMasterList)
    {
        //
    }
}
