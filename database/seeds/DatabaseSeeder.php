<?php

use Illuminate\Database\Seeder; 
use Faker\Factory as Faker;
use App\Models\Paciente;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker::create();
        for ($i=0; $i < 50; $i++) {
            DB::table('pacientes')->insert([
                'nome' => $faker->name,
                'idade' => $faker->randomDigit . $faker->randomDigit, 
                'created_at' => Carbon::today()
            ]);
        }
    }
}
