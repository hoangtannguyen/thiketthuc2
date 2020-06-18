<?php

use Illuminate\Database\Seeder;
use App\Book;
use App\Category;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = new Book();
        $city->name = 'Hà Nội';
        $city->title = 'Hà Nội';
        $city->description = 'Hà Nội';
        $city->description_id  = rand(1,Category::count());
        $city->save();

        $city = new Book();
        $city->name = 'Hà Nội';
        $city->title = 'Hà Nội';
        $city->description = 'Hà Nội';
        $city->description_id  = rand(1,Category::count());
        $city->save();


        $city = new Book();
        $city->name = 'Hà Nội';
        $city->title = 'Hà Nội';
        $city->description = 'Hà Nội';
        $city->description_id  = rand(1,Category::count());
        $city->save();

       $city = new Book();
        $city->name = 'Hà Nội';
        $city->title = 'Hà Nội';
        $city->description = 'Hà Nội';
        $city->description_id  = rand(1,Category::count());
        $city->save();
    }
}
