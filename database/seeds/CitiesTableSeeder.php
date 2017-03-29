<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('cities')->delete();

        $cities = [
            [
                'id'         => 1,
                'state_id'   => 1,
                'name'       => 'Camilo Ponce',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 2,
                'state_id'   => 1,
                'name'       => 'Cuenca',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 3,
                'state_id'   => 2,
                'name'       => 'Garcia Moreno',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 4,
                'state_id'   => 2,
                'name'       => 'San Rafael',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 5,
                'state_id'   => 3,
                'name'       => 'Espejo',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 6,
                'state_id'   => 3,
                'name'       => 'San Pedro De Huaca',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 7,
                'state_id'   => 4,
                'name'       => 'Arenillas',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 8,
                'state_id'   => 4,
                'name'       => 'Huaquillas',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 9,
                'state_id'   => 5,
                'name'       => 'Arauquita',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 10,
                'state_id'   => 5,
                'name'       => 'Tame',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 11,
                'state_id'   => 6,
                'name'       => 'Florencia',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 12,
                'state_id'   => 6,
                'name'       => 'El Paujil',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 13,
                'state_id'   => 7,
                'name'       => 'Guavire',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 14,
                'state_id'   => 7,
                'name'       => 'Pana Pana',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 15,
                'state_id'   => 8,
                'name'       => 'Esslingen am Neckar',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 16,
                'state_id'   => 8,
                'name'       => 'Ulm',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 17,
                'state_id'   => 9,
                'name'       => 'Lübeck',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 18,
                'state_id'   => 9,
                'name'       => 'Lüneburg',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 19,
                'state_id'   => 10,
                'name'       => 'Avilés',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 20,
                'state_id'   => 10,
                'name'       => 'Boal',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 21,
                'state_id'   => 11,
                'name'       => 'Bilbao',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 22,
                'state_id'   => 11,
                'name'       => 'Bermeo',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 23,
                'state_id'   => 12,
                'name'       => 'Castro Urdiales',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 24,
                'state_id'   => 12,
                'name'       => 'Santander',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 25,
                'state_id'   => 13,
                'name'       => 'Bristol',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 26,
                'state_id'   => 13,
                'name'       => 'Bath',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 27,
                'state_id'   => 14,
                'name'       => 'Luton',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 28,
                'state_id'   => 14,
                'name'       => 'Shefford',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 29,
                'state_id'   => 15,
                'name'       => 'Abergele',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'         => 30,
                'state_id'   => 15,
                'name'       => 'Eglwysbach',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],

        ];

        // Uncomment the below to run the seeder
        DB::table('cities')->insert($cities);
    }
}
