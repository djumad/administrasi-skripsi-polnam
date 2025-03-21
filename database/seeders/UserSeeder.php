<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "name" => "Djumad Bantan",
                "email" => "bantandjumad@gmail.com",
                "password" => bcrypt('@Djum#123')
            ],
            [
                "name" => "Djum",
                "email" => "djumad@gmail.com",
                "password" => bcrypt('@Djum#123')
            ],
        ];

        foreach($data as $item){
            User::create($item);
        }
    }
}
