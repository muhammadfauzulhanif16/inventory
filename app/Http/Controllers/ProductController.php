<?php

namespace App\Http\Controllers;

use App\Models\AvailableProduct;
use App\Models\Category;
use App\Models\IncomingProduct;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\OutgoingProduct;
use App\Models\Supplier;
use App\Models\Unit;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class ProductController extends Controller {
  public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application {
    return view('components.pages.app.products.index', [
      "incomingProducts" => IncomingProduct::all(),
      "availableProducts" => AvailableProduct::all(),
      "outgoingProducts" => OutgoingProduct::all(),
    ]);
  }

  public function create(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application {
    return view('components.pages.app.products.create', [
      "categories" => Category::all(),
      "units" => Unit::all(),
      "suppliers" => Supplier::all(),
    ]);
  }

  public function store(StoreProductRequest $request) {
    date_default_timezone_set("Asia/Jakarta");

    $product = AvailableProduct::where("name", $request->name)->first();

    IncomingProduct::create([
      "name" => $request->name,
      "category_id" => $request->category,
      "quantity" => $request->quantity,
      "unit_id" => $request->unit,
      "capital" => $request->capital,
      "supplier_id" => $request->supplier,
    ]);

    if (
      AvailableProduct::where("name", $request->name)->exists() &&
      AvailableProduct::where("name", $request->name)->first()->category_id == $request->category &&
      AvailableProduct::where("name", $request->name)->first()->unit_id == $request->unit
    ) {
      AvailableProduct::where("name", $request->name)->update([
        "quantity" => $product->quantity + $request->quantity,
      ]);
    } else {
      AvailableProduct::create([
        "name" => $request->name,
        "slug" => $request->name."-".time(),
        "category_id" => $request->category,
        "quantity" => $request->quantity,
        "unit_id" => $request->unit,
        "selling_price" => $request->selling_price,
      ]);
    }

    return redirect()->route("products.index")->with("success-product", "\"$request->name\" product has been added!");
  }

  public function show(Product $product) {

  }

  public function edit(AvailableProduct $product) {
    return view("components.pages.app.products.edit", [
      "product" => $product,
      "categories" => Category::all(),
      "units" => Unit::all(),
      "suppliers" => Supplier::all(),
    ])->with("success-product", "\"$product->name\" product has been updated!");
  }

  public function update(UpdateProductRequest $request, AvailableProduct $product) {
    date_default_timezone_set("Asia/Jakarta");

    AvailableProduct::where("id", $product->id)->update([
      "name" => $request->name,
      "category_id" => $request->category,
      "quantity" => $request->quantity,
      "unit_id" => $request->unit,
      "selling_price" => $request->selling_price,
    ]);

    return redirect()->route("products.index")->with("success-product", "\"$request->name\" product has been updated!");
  }

  public function destroy(AvailableProduct $product) {
    AvailableProduct::destroy($product->id);

    return redirect()->route("products.index")->with("success-product", "\"$product->name\" product has been deleted!");
  }
}
