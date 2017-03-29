<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('users')->delete();

        $users = [
            [
                'id' => 1,
                'name' => 'Tester User',
                'email' => 'tester@domain.com',
                'password' => bcrypt(env('TESTER_PASSWORD')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
        ];

        // Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }
}
