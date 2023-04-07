<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Http\Requests\StoreUnitRequest;
use App\Http\Requests\UpdateUnitRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class UnitController extends Controller {
  public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application {
    return view("components.pages.app.units.index", [
      "units" => Unit::latest()->get(),
    ]);
  }

  public function create(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application {
    return view('components.pages.app.units.create');
  }

  public function store(StoreUnitRequest $request): RedirectResponse {
    date_default_timezone_set("Asia/Jakarta");

    Unit::create([
      "name" => $request->name,
    ]);

    return redirect()->route("units.index")->with("success-unit", "\"$request->name\" units has been added!");
  }

  public function show(Unit $unit): View|Application|Factory|\Illuminate\Contracts\Foundation\Application {
    return view('components.pages.app.units.show', [
      "unit" => $unit,
    ]);
  }

  public function edit(Unit $unit) {
    return view("components.pages.app.units.edit", [
      "unit" => $unit,
    ])->with("success-unit", "\"$unit->name\" unit has been updated!");
  }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUnitRequest $request, Unit $unit): RedirectResponse {
      date_default_timezone_set("Asia/Jakarta");

      $unit->update([
        "name" => $request->name,
      ]);

      return redirect()->route("units.index")->with("success-unit", "\"$unit->name\" unit has been updated!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $unit) {
      $unit->delete();

      return redirect()->route("units.index")->with("success-unit", "\"$unit->name\" unit has been deleted!");
    }
}
