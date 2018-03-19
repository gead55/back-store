<?php
use Larashop\Models\Product;
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
        Product::insert(['product_code' => 'Mini skirt black edition', 'product_name' => 'Mini skirt black edition','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna','price' => 35,'category_id' => 1,'brand_id' => 1,'created_at_ip' => '127.0.0.1','updated_at_ip' => '127.0.0.1']);
        Product::insert(['product_code' => 'T-shirt blue edition', 'product_name' => 'T-shirt blue edition','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna','price' => 64,'category_id' => 2,'brand_id' => 3,'created_at_ip' => '127.0.0.1','updated_at_ip' => '127.0.0.1']);
        Product::insert(['product_code' => 'Sleeveless Colorblock Scuba', 'product_name' => 'Sleeveless Colorblock Scuba','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna','price' => 13,'category_id' => 3,'brand_id' => 2,'created_at_ip' => '127.0.0.1','updated_at_ip' => '127.0.0.1']);
    }
}
