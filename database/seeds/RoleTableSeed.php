<?php

use Illuminate\Database\Seeder;

class RoleTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            [
                'name' => 'admin',
                'name_rus' => 'Администратор'
            ]
        );
        DB::table('roles')->insert(
            [
                'name' => 'editor',
                'name_rus' => 'Редактор'
            ]
        );
        DB::table('roles')->insert(
            [
                'name' => 'user',
                'name_rus' => 'Пользователь'
            ]
        );
    }
}
