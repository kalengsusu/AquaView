<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('positions')->insert([
            [
                'code' => 'Rp 2000',
                'name' => 'Karimun Jawa',
                'description' => 'karimun jawa'
            ],
            [
                'code' => 'Rp 1000',
                'name' => 'Bawean',
                'description' => 'bawean'
            ],
            [
                'code' => 'Rp 1500',
                'name' => 'Gili Labak',
                'description' => 'gili labak'
            ],
        ]);
    }
}
