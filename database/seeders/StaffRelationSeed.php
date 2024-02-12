<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffRelationSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //bawahan kepala dinas
        for ($i = 1; $i <= 5; $i++) {
            DB::table('staff_relations')->insert([
                'user_id' => 1,
                'user_staff' => $i
            ]);
        }

        //bawahan kepala bidang 1
        DB::table('staff_relations')->insert([
            'user_id' => 2,
            'user_staff' => 4
        ]);

        //bawahan kepala bidang 2
        DB::table('staff_relations')->insert([
            'user_id' => 3,
            'user_staff' => 5
        ]);
    }
}
