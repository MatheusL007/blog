<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuncionarioSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('funcionarios')->insert([
            'name' => 'Matheus',
        ]);

        DB::table('funcionarios')->insert([
            'name' => 'Preta',
        ]);

        DB::table('funcionarios')->insert([
            'name' => 'Milena',
        ]);
    }
}

