<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
Use App\User;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $this->call(UserSeeder::class);

        DB::statement('SET session_replication_role = replica');
        
        User::truncate();

        $cantidadEmpleados = 5;

        factory(User::class, $cantidadEmpleados)->create();


    }
}
