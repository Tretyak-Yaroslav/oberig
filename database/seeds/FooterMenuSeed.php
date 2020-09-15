<?php

use Illuminate\Database\Seeder;

class FooterMenuSeed extends Seeder
{
    /**
     * Run the database seeds.
     *  php artisan db:seed --class=FooterMenuSeed
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

         \App\Models\MenuFooter::insert([
             "parent_id" => null,
             "lft" => 1,
             "rgt" => 98,
             "depth" => 0,
             "title" => "Меню",
             'url' => '',
             'url_external' => ''
         ]);
    }
}
