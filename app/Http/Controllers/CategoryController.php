<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class CategoryController extends Controller {
  public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application {
    return view("components.pages.app.categories.index", [
      "categories" => Category::latest()->get(),
    ]);
  }

  public function create(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application {
    return view('components.pages.app.categories.create');
  }

  public function store(StoreCategoryRequest $request) {
    date_default_timezone_set("Asia/Jakarta");

    Category::create([
      "name" => $request->name,
    ]);

    return redirect()->route("categories.index")
      ->with("success-category", "\"$request->name\" category has been added!");
  }

  public function show(Category $category) {

  }

  public function edit(Category $category) {
    return view("components.pages.app.categories.edit", [
      "category" => $category,
    ])->with("success-category", "\"$category->name\" category has been updated!");
  }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category) {
      date_default_timezone_set("Asia/Jakarta");

      $category->update([
        "name" => $request->name,
      ]);

      return redirect()->route("categories.index")
        ->with("success-category", "\"$category->name\" category has been updated!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category) {
      $category->delete();

      return redirect()->route("categories.index")
        ->with("success-category", "\"$category->name\" category has been deleted!");
    }
}
