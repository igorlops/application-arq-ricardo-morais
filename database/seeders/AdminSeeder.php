<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::where("name","admin")->first();
        if(!$admin){
            $admin = User::create([
                "name" => "admin",
                "email" => env("LOGIN_ADMIN"),
                "password" => bcrypt(env("SENHA_ADMIN")),
            ]);
        }
    }
}
