<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategorySeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = new Category();
        $city->title = 'Hà Nội';
        $city->description = 'Hà Nội';
        $city->save();

        $city = new Category();
        $city->title = 'Hà Nội';
        $city->description = 'Hồ Chí Minh';
        $city->save();


        $city = new Category();
        $city->title = 'Hà Nội';
        $city->description = 'Hải Phòng';
        $city->save();

        $city = new Category();
        $city->title = 'Hà Nội';
        $city->description = 'Hải Dương';
        $city->save();
    }
}
