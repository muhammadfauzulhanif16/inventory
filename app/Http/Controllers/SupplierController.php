<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class SupplierController extends Controller {
  public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application {
    return view('components.pages.app.suppliers.index', [
      "suppliers" => Supplier::latest()->get(),
    ]);
  }

  public function create(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application {
    return view('components.pages.app.suppliers.create');
  }

  public function store(StoreSupplierRequest $request): RedirectResponse {
    date_default_timezone_set("Asia/Jakarta");

    Supplier::create([
      "name" => $request->name,
      "full_address" => $request->full_address,
      "phone_number" => $request->phone_number,
    ]);

    return redirect()->route("suppliers.index")->with("success-supplier", "\"$request->name\" supplier has been added!");
  }

  public function show(Supplier $supplier): View|Application|Factory|\Illuminate\Contracts\Foundation\Application {
    return view('components.pages.app.suppliers.show', [
      "supplier" => $supplier,
    ]);
  }

  public function edit(Supplier $supplier) {
    return view('components.pages.app.suppliers.edit', [
      "supplier" => $supplier,
    ])->with("success-supplier", "\"$supplier->name\" supplier has been updated!");
  }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSupplierRequest $request, Supplier $supplier) {
      date_default_timezone_set("Asia/Jakarta");

      $supplier->update([
        "name" => $request->name,
        "full_address" => $request->full_address,
        "phone_number" => $request->phone_number,
      ]);

      return redirect()->route("suppliers.index")->with("success-supplier", "\"$supplier->name\" supplier has been updated!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
      $supplier->delete();

      return redirect()->route("suppliers.index")->with("success-supplier", "\"$supplier->name\" supplier has been deleted!");
    }
}
