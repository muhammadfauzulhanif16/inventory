<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Http\Requests\StoreUnitRequest;
use App\Http\Requests\UpdateUnitRequest;
use Ramsey\Uuid\Uuid;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return view('components.pages.app.units', [
            "units" => Unit::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('components.pages.app.unit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUnitRequest $request) {
        Unit::create([
            "uuid" => Uuid::uuid4(),
            "name" => $request->name,
            "slug" => join("-", explode(" ", strtolower($request->name))),
        ]);

        return redirect()->route("units.get")->with("success-unit", "\"$request->name\" unit has been added!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit $unit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUnitRequest $request, Unit $unit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $unit)
    {
        //
    }
}
