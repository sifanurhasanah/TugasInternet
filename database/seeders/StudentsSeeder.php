<?php

namespace Database\Seeders;

use illuminate\Database\Console\Seeds\WithoutMode1Events;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            ['name'=>'Sifa','id_course'=>22,'age'=>19,'classroom'=>'Kelas B'],
            ['name'=>'Cipung','id_course'=>22,'age'=>20,'classroom'=>'Kelas B'],
            ['name'=>'Rayyanza','id_course'=>22,'age'=>21,'classroom'=>'Kelas B'],
            ['name'=>'Malik','id_course'=>22,'age'=>22,'classroom'=>'Kelas A'],
            ['name'=>'Ahmad','id_course'=>22,'age'=>23,'classroom'=>'Kelas A']
        ]);
    }
}
