<?php

namespace Database\Seeders;

use App\Models\Lab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $l = new Lab();
        $l->name = "Lab 1 TJKT";
        $l->position = "Lantai 2 Dekat Lapangan";
        $l->info = "Ruang Alat";
        $l->user_id = 3;
        $l->save();

        $l = new Lab();
        $l->name = "Lab 2 TJKT";
        $l->position = "Lantai 2 Dekat Lapangan";
        $l->info = "Ruang Praktikum ICT";
        $l->user_id = 3;
        $l->save();


        $l = new Lab();
        $l->name = "Lab MPLB";
        $l->position = "Lantai 2 Dekat Lapangan";
        $l->info = "Ruang LAB dan Kelas";
        $l->user_id = 3;
        $l->save();


        $l = new Lab();
        $l->name = "Lab AKL";
        $l->position = "Lantai 2 Dekat Lapangan";
        $l->info = "Ruang LAB dan Kelas";
        $l->user_id = 3;
        $l->save();
    }
}
