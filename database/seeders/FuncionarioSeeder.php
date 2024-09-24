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
            'name' => 'Bolos',
        ]);

        DB::table('funcionarios')->insert([
            'name' => 'Massas',
        ]);

        DB::table('funcionarios')->insert([
            'name' => 'Pizzas',
        ]);
    }
}

