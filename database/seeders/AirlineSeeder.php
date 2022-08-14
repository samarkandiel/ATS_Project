<?php

namespace Database\Seeders;
use Illuminate\Database\QueryException;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AirlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path =public_path().'/airlines.sql';
        // dd($path);
        $sql = file_get_contents($path);
        DB::unprepared($sql);
    }
}
