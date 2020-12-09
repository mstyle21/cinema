<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class UsersRoleSeeder
 * @package Database\Seeders
 */
class UsersRoleSeeder extends Seeder
{
    const TABLE_NAME = 'users_roles';

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
                    'user_id' => 1,
                    'role_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'user_id' => 2,
                    'role_id' => 2,
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
