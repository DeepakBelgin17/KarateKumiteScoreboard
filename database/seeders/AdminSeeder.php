<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert admin credentials
        Admin::create([
            'email' => 'belgin17@gmail.com',
            'password' => Hash::make('tul04bet10'),
        ]);
    }
}
