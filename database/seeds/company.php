<?php

use Illuminate\Database\Seeder;

class company extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company')->insert([
       	[
       		'name'=>'IBM',
       		'emp_id'=>'1'
       	],
       	[
       		'name'=>'Mphasis',
       		'emp_id'=>'2'
       	],
       	[
       		'name'=>'Infosys',
       		'emp_id'=>'3'
       	],
       	[
       		'name'=>'TCS',
       		'emp_id'=>'4'
       	],
       ]);
    }
}
