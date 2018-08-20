<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		foreach(range(1,5) as $index) {
			DB::table('datas')->insert(
				[
					'name' => str_random(10),
					'email' => str_random(10).'@gmail.com',
				]
			);
		}
    }
}
