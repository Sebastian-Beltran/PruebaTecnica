<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use App\User;

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
        
        $cantidadUsuarios = 5;
        
        factory(User::class, $cantidadUsuarios)->create();

        


    }
}
