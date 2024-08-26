<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\PembayaranModel;
use App\Models\SiswaModel;
use Database\Factories\PembayaranFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {



        DB::table('role')->insert([
            'roles' => "admin",
        ]);

        DB::table('role')->insert([
            'roles' => "guru",
        ]);

        DB::table('users')->insert([
            'name' => "admin",
            'email' => 'root@gmail.com',
            'role_id' => 1,
            'password' => bcrypt('root')
        ]);

        DB::table('users')->insert([
            'name' => "irman",
            'email' => 'irman@gmail.com',
            'role_id' => 2,
            'password' => bcrypt('irman')
        ]);

        $this->call([
            JurusanSeeder::class,
        ]);
        $this->call([
            TypeSeeder::class,
        ]);
        $this->call([
            SiswaSeeder::class,
        ]);

       PembayaranModel::factory()->count(1000)->create();
    }
}
