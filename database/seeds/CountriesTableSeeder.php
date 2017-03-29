<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('countries')->delete();

        $countries = [
            [
                'id'         => 1,
                'name'       => 'Ecuador',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 2,
                'name'       => 'Colombia',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 3,
                'name'       => 'Germany',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 4,
                'name'       => 'Spain',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 5,
                'name'       => 'United Kingdom',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
        ];

        // Uncomment the below to run the seeder
        DB::table('countries')->insert($countries);
    }
}
