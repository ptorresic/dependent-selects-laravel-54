<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('states')->delete();

        $states = [
            [
                'id'         => 1,
                'country_id' => 1,
                'name'       => 'Azuay',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 2,
                'country_id' => 1,
                'name'       => 'Bolivar',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 3,
                'country_id' => 1,
                'name'       => 'Carchi',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 4,
                'country_id' => 1,
                'name'       => 'El Oro',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 5,
                'country_id' => 2,
                'name'       => 'Arauca',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 6,
                'country_id' => 2,
                'name'       => 'Caquetá',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 7,
                'country_id' => 2,
                'name'       => 'Guainía',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 8,
                'country_id' => 3,
                'name'       => 'Baden-Württemberg',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 9,
                'country_id' => 3,
                'name'       => 'Hamburg',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 10,
                'country_id' => 4,
                'name'       => 'Asturias',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 11,
                'country_id' => 4,
                'name'       => 'Biscay',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 12,
                'country_id' => 4,
                'name'       => 'Cantabria',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 13,
                'country_id' => 5,
                'name'       => 'Avon',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 14,
                'country_id' => 5,
                'name'       => 'Bedfordshire',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 15,
                'country_id' => 5,
                'name'       => 'Conwy',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
        ];

        // Uncomment the below to run the seeder
        DB::table('states')->insert($states);
    }
}
