<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
{

    public function run(): void
    {
        User::create([
            'name' => 'abdulaziz',
            'email' => 'abdulazizbek@gmail.com',
            'password' => Hash::make('1111'),
        ]);

    }
}
