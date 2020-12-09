<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class UserSeeder
 * @package Database\Seeders
 */
class UserSeeder extends Seeder
{
    const TABLE_NAME = 'users';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table(self::TABLE_NAME)->get()->count() == 0) {
            $input = [
                [
                    'name' => 'admin',
                    'email' => 'admin@email.com',
                    'email_verified_at' => '2020-12-09 12:00:00',
                    'password' => base64_encode('parola'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'user',
                    'email' => 'user@email.com',
                    'email_verified_at' => '2020-12-09 12:00:00',
                    'password' => base64_encode('parola'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
            ];

            DB::table(self::TABLE_NAME)->insert($input);

            echo "\e[32mSeeding:\e[37m Inserted into '" . self::TABLE_NAME . "' with success. \n";
        } else {
            echo "\e[31mSeeding:\e[37m Table '" . self::TABLE_NAME . "' is not empty, therefore NOT. \n";
        }
    }
}
