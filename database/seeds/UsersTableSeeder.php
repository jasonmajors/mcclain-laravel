<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Brian Crist',
            'email' => 'bcrist@mcclainconcepts.com',
            'password' => bcrypt('LaravelTestPW'),
        ]);

        DB::table('users')->insert([
            'name' => 'Jason Majors',
            'email' => 'jasonrmajors@gmail.com',
            'password' => bcrypt('LaravelTestPW'),
        ]);
    }
}
