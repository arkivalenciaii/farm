<?php

use Illuminate\Database\Seeder;

class SeedAllTables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Archie Valencia',
            'email' => 'archie@farm.thevalencecorp.com',
            'password' => bcrypt('123qwe'),
        ]);

        DB::table('employees')->insert([
            'name' => 'Emp1',
            'user_id' => '1',
        ]);

        DB::table('employees')->insert([
            'name' => 'Emp2',
            'user_id' => '1',
        ]);

        DB::table('employees')->insert([
            'name' => 'Emp2',
            'user_id' => '1',
        ]);
    }
}
