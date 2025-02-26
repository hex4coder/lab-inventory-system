<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // super admin
        $admin = new User();
        $admin->name = "Administrator";
        $admin->email = "admin@lis.smkncampalagian.sch.id";
        $admin->password = bcrypt("12345678");
        $admin->role = 0;
        $admin->save();

        // kepsek
        $kepsek = new User();
        $kepsek->name = "Kepsek";
        $kepsek->email = "kepsek@lis.smkncampalagian.sch.id";
        $kepsek->password = bcrypt("12345678");
        $kepsek->role = 1;
        $kepsek->save();

        // laboran
        $laboran = new User();
        $laboran->name = "Laboran";
        $laboran->email = "laboran@lis.smkncampalagian.sch.id";
        $laboran->password = bcrypt("12345678");
        $laboran->role = 2;
        $laboran->save();
    }
}
