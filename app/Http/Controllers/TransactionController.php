<?php

namespace App\Http\Controllers;

use App\Models\AvailableProduct;
use App\Models\OutgoingProduct;
use App\Models\Transaction;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use Illuminate\Http\Request;

class TransactionController extends Controller {
  public function index() {
    return view('components.pages.app.transactions.index', [
      "transactions" => Transaction::latest()->get(),
    ]);
  }

  public function create(Request $request) {
    return view('components.pages.app.transactions.create', [
      "product" => AvailableProduct::where("id", $request->productId)->first(),
    ]);
  }

  public function store(StoreTransactionRequest $request) {
    date_default_timezone_set("Asia/Jakarta");

    $product = AvailableProduct::where("id", $request->product_id)->first();

    Transaction::create([
      "code" => "INV-".time(),
      "quantity" => $request->quantity,
      "total_price" => $request->quantity * $product->selling_price,
    ]);

    OutgoingProduct::create([
      "name" => $request->product_name,
      "quantity" => $request->quantity,
      "total_price" => $request->quantity * $product->selling_price,
      "transaction_id" => Transaction::latest()->first()->id,
    ]);

    AvailableProduct::where("id", $request->product_id)->update([
      "quantity" => $product->quantity - $request->quantity,
    ]);

    return redirect()->route("transactions.index")->with("success-transaction", "\"$request->name\" transaction has been added!");
  }

  public function show(Transaction $transaction) {

  }

  public function edit(Transaction $transaction) {

  }

  public function update(UpdateTransactionRequest $request, Transaction $transaction) {

  }

  public function destroy(Transaction $transaction) {

  }
}
