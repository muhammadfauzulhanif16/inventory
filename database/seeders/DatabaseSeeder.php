<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder {
    public function run(): void {
      User::create([
        "national_identity_number" => "1234567890123456",
        "full_name" => "Admin Inventory",
        "full_address" => "abc",
        "phone_number" => "1234567890123",
        "username" => "admininv",
        "password" => Hash::make("admininv"),
        "role" => "admin",
      ]);

      Category::create([
        "name" => "Pakaian",
      ]);

      Unit::create([
        "name" => "Buah",
      ]);

      Supplier::create([
        "name" => "Muhammad Fauzul Hanif",
        "full_address" => "abc",
        "phone_number" => "085158851642"
      ]);



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
