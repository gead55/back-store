<?php
use Larashop\Models\Brand;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Brand::insert(['name' => 'ACNE','created_at_ip' => '127.0.0.1','updated_at_ip' => '127.0.0.1']);
        Brand::insert(['name' => 'RONHILL','created_at_ip' => '127.0.0.1','updated_at_ip' => '127.0.0.1']);
        Brand::insert(['name' => 'ALBIRO','created_at_ip' => '127.0.0.1','updated_at_ip' => '127.0.0.1']);
        Brand::insert(['name' => 'ODDMOLLY','created_at_ip' => '127.0.0.1','updated_at_ip' => '127.0.0.1']);
    }
}
