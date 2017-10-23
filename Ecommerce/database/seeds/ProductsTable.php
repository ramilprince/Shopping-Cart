<?php

use Illuminate\Database\Seeder;

class ProductsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
    		'productname' => 'Asus ROG',
    		'productphoto' => 'AsusRog.jpg',
    		'productprice' => '50000',
    	]);
         DB::table('products')->insert([
    		'productname' => 'Iphone6s',
    		'productphoto' => 'iphone6s.jpg',
    		'productprice' => '45000',
    	]);
          DB::table('products')->insert([
    		'productname' => 'samsungS7',
    		'productphoto' => 'samsungS7.jpg',
    		'productprice' => '20000',
    	]);

           DB::table('products')->insert([
    		'productname' => 'gamingmouse',
    		'productphoto' => 'mouse.jpg',
    		'productprice' => '1500',
    	]);
            DB::table('products')->insert([
    		'productname' => 'gamingkeyboard',
    		'productphoto' => 'keyboard.jpg',
    		'productprice' => '2000',
    	]);
             DB::table('products')->insert([
    		'productname' => 'predator',
    		'productphoto' => 'predator.jpg',
    		'productprice' => '45000',
    	]);
    }
}
