<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'name' => 'kepala dinas',
        ]);

        DB::table('roles')->insert([
            'name' => 'kepala bidang',
        ]);

        DB::table('roles')->insert([
            'name' => 'staff',
        ]);
    }
}
