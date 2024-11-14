<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $datas = [
        [
        'id' => Str::uuid(),
        'nama' => 'SD 1 KJ',
       ],
        [
        'id' => Str::uuid(),
        'nama' => 'Harapan',
       ],
        [
        'id' => Str::uuid(),
        'nama' => 'Smpk2harapan',
       ],
    ];
       School::insert($datas);
    }
}
