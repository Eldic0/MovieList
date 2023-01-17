<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Felix Wiranata',
            'email'=>'felix.wiranata@binus.ac.id',
            'password'=>bcrypt('akusuka123'),
            'position'=>'admin',
        ]);

        DB::table('users')->insert([
            'name'=>'Eldico Tjandra',
            'email'=>'elidco.tjandra@binus.ac.id',
            'password'=>bcrypt('valo123'),
            'position'=>'admin',
        ]);
    }
}
