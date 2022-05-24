<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            StaffSeeder::class,
            MemberSeeder::class,
            GroupSeeder::class,
            BookDetailSeeder::class,
            BookSeeder::class,
            RentalSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
