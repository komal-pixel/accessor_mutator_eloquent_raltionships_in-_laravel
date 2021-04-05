<?php

use Illuminate\Database\Seeder;

class employee extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('employee')->insert([
       	[
       		'name'=>'John'
       	],
       		[
       		'name'=>'Dikota'
       	],
       	[
       		'name'=>'sam'
       	],
       	[
       		'name'=>'marvi'
       	]
       ]);
    }
}
