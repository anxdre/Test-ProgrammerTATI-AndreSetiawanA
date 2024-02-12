<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleUpdateSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->where('id',1)->update([
            'role_id' => 1,
        ]);

        DB::table('users')->where('id',2)->update([
            'role_id' => 2,
        ]);
        DB::table('users')->where('id',3)->update([
            'role_id' => 2,
        ]);

        DB::table('users')->where('id',4)->update([
            'role_id' => 3,
        ]);
        DB::table('users')->where('id',5)->update([
            'role_id' => 3,
        ]);
    }
}
