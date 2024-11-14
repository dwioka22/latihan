<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $datas = [
        [
        'id' => Str::uuid(),
        'nama' => 'SMA DWIJENDRA',
        'school_id' =>null,
        'title' => '.',
        'start_date'=> '2014-06-12',
        'end_date'=>'2017-05-04',
        'description'=> 'WOW'
       ],
        [
        'id' => Str::uuid(),
        'nama' => 'Warmadewa',
        'school_id' =>null,
        'title' => '.',
        'start_date'=> '2018-06-12',
        'end_date'=>'2022-05-04',
        'description'=> 'WOW',
       ],
        [
        'id' => Str::uuid(),
        'nama' => 'KKS',
        'school_id' =>null,
        'title' => ' ',
        'start_date'=> '2022-06-12',
        'end_date'=>'2024-05-04',
        'description'=> 'WOW',
       ],
    ];
    Education::insert($datas);
        
    }
}
