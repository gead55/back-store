<?php
use Larashop\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert(['name' => 'MENS','created_at_ip' => '127.0.0.1','updated_at_ip' => '127.0.0.1']);
        Category::insert(['name' => 'WOMENS','created_at_ip' => '127.0.0.1','updated_at_ip' => '127.0.0.1']);
        Category::insert(['name' => 'KIDS','created_at_ip' => '127.0.0.1','updated_at_ip' => '127.0.0.1']);
        Category::insert(['name' => 'FASHION','created_at_ip' => '127.0.0.1','updated_at_ip' => '127.0.0.1']);
        Category::insert(['name' => 'CLOTHING','created_at_ip' => '127.0.0.1','updated_at_ip' => '127.0.0.1']);
    }
}
