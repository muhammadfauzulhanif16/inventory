<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return view('components.pages.app.employees.index', [
            "employees" => User::latest()->get()->where("role", "employee"),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('components.pages.app.employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request) {
        date_default_timezone_set("Asia/Jakarta");

        User::create([
            "national_identity_number" => $request->national_identity_number,
            "full_name" => $request->full_name,
            "full_address" => $request->full_address,
            "phone_number" => $request->phone_number,
            "username" => strtolower($request->username),
            "password" => Hash::make($request->password),
        ]);

        return redirect()->route("employees.index")->with("success-employee", "\"$request->full_name\" employee has been added!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee) {
        return view("components.pages.app.employee.edit", [
            "employee" => $employee,
        ])->with("success-employee", "\"$employee->full_name\" employee has been updated!");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee) {
      date_default_timezone_set("Asia/Jakarta");

        $employee->update([
            "national_identity_number" => $request->national_identity_number,
            "name" => $request->name,
            "full_address" => $request->full_address,
            "phone_number" => $request->phone_number,
//            "username" => strtolower($request->username),
//            "password" => Hash::make($request->password),
        ]);

        return redirect()->route("employees.index")->with("success-employee", "\"$employee->full_name\" employee has been updated!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $employee) {
      $employee->delete();

        return redirect()->route("employees.index")
          ->with("success-employee", "\"$employee->full_name\" employee has been deleted!");
    }
}
