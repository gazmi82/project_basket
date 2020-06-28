<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Product::create([
    		'imagePath' => 'https://www.cstatic-images.com/car-pictures/main/USD00AUS052A021001.png',
    		'title' => '2021 Audi Q3',
    		'price' => 115000,
    		'color' => 'White']);
    	

    	Product::create([
    		'imagePath' => 'https://www.cstatic-images.com/car-pictures/main/USD10AUC311A021001.png',
    		'title' => '20201 Audi RS 7',
    		'price' => 150000,
    		'color' => 'red']);
    	

    	Product::create([
    		'imagePath' => 'https://www.cstatic-images.com/car-pictures/main/usd00mbc682a021001.png',
    		'title' => '2021 Mercedez-Benz E-Class',
    		'price' => 111000,
    		'color' => 'White']);
    	

        Product::create([
            'imagePath' => 'https://www.cstatic-images.com/car-pictures/main/USD00AUC016A021001.png',
            'title' => '2021 Audi A4',
            'price' => 90000,
            'color' => 'Beige-Grey']);
        
        Product::create([
            'imagePath' => 'https://www.cstatic-images.com/car-pictures/main/USC80ALS011A021001.png',
            'title' => '2020 Alfa Romeo Stelvio',
            'price' => 35000,
            'color' => 'Black']);
        

        Product::create([
            'imagePath' => 'https://www.cstatic-images.com/car-pictures/main/usc90mnc092b021001.png',
            'title' => 'M2020 Mini Hardtop',
            'price' => 80000,
            'color' => 'Red']);
        
    }
}
