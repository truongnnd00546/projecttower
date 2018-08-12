<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('products')->truncate();
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'id'=>1,
                'name'=>'Kính râm',
                'image'=>'https://vn-test-11.slatic.net/p/6/basto-bs102-kinh-ram-can-the-thao-den-do-9186-665742-f53087e6742c5529f2566812fd943248-catalog.jpg_340x340q80.jpg',
                'unitprice'=>10000,
                'promotionprice'=>1000,
                'description'=>'Kính mát',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id'=>2,
                'name'=>'Kính râm',
                'image'=>'https://vn-test-11.slatic.net/p/6/basto-bs102-kinh-ram-can-the-thao-den-do-9186-665742-f53087e6742c5529f2566812fd943248-catalog.jpg_340x340q80.jpg',
                'unitprice'=>10000,
                'promotionprice'=>1000,
                'description'=>'Kính mát',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ]
        ]);
    }
}
