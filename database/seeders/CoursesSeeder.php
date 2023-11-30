<?php

namespace Database\Seeders;

use illuminate\Database\Console\Seeds\WithoutMode1Events;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course')->insert([
            ['id_course'=>30,'course_name'=>'Microteaching','description'=>'PTI'],
            ['id_course'=>31,'course_name'=>'Media Pembelajaran TIK','description'=>'PTI'],
            ['id_course'=>32,'course_name'=>'Sistem Informasi Manajemen','description'=>'PTI']
        ]);
    }
}
