<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Audio',
            'slug' => 'audio',
        ]);

        Category::create([
            'name' => 'Camera',
            'slug' => 'camera',
        ]);

        Category::create([
            'name' => 'Education',
            'slug' => 'education',
        ]);

        Category::create([
            'name' => 'Energy & Green Tech',
            'slug' => 'energy-and-green-tech',
        ]);

        Category::create([
            'name' => 'Fashion',
            'slug' => 'fashion',
        ]);
        
        Category::create([
            'name' => 'Food & Beverages',
            'slug' => 'food-and-beverages',
        ]);

        Category::create([
            'name' => 'Health & Fitness',
            'slug' => 'health-and-fitness',
        ]);

        Category::create([
            'name' => 'Home & House',
            'slug' => 'home-and-house',
        ]);

        Category::create([
            'name' => 'Phones & Accessories',
            'slug' => 'phones-and-accessories',
        ]);

        Category::create([
            'name' => 'Transportation',
            'slug' => 'transportation',
        ]);

        Category::create([
            'name' => 'Travel',
            'slug' => 'travel',
        ]);

        Category::create([
            'name' => 'Art',
            'slug' => 'art',
        ]);

        Category::create([
            'name' => 'Comics',
            'slug' => 'comics',
        ]);

        Category::create([
            'name' => 'Dance',
            'slug' => 'dance',
        ]);

        Category::create([
            'name' => 'Film',
            'slug' => 'film',
        ]);

        Category::create([
            'name' => 'Music',
            'slug' => 'music',
        ]);

        Category::create([
            'name' => 'Photography',
            'slug' => 'photography',
        ]);

        Category::create([
            'name' => 'Video Games',
            'slug' => 'video-games',
        ]);

        Category::create([
            'name' => 'Writing & Publishing',
            'slug' => 'writing-and-publishing',
        ]);

        Category::create([
            'name' => 'Culture',
            'slug' => 'culture',
        ]);

        Category::create([
            'name' => 'Environment',
            'slug' => 'environment',
        ]);

        Category::create([
            'name' => 'Local Businesses',
            'slug' => 'local-businesses',
        ]);
    }    
}
