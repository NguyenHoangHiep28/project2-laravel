<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('products')->insert([
            [
                'name' => 'First Product',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laborum fugiat corporis ipsum reprehenderit nisi unde, perspiciatis, similique ipsam pariatur dolores sapiente voluptas. Voluptatum minus dolores nam eligendi neque?',
                'status' => 1,
                'price' => 90,
                'cate_id' => 1,
                'discount' => null,
                'tag' => null,
                'restaurant_id' => 1,
                'featured' => false,
                'qty' => 5,
            ],
            [
                'name' => 'Second Product',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laborum fugiat corporis ipsum reprehenderit nisi unde, perspiciatis, similique ipsam pariatur dolores sapiente voluptas. Voluptatum minus dolores nam eligendi neque?',
                'status' => 1,
                'price' => 80,
                'cate_id' => 1,
                'discount' => null,
                'tag' => null,
                'restaurant_id' => 1,
                'featured' => false,
                'qty' => 5,
            ],
            [
                'name' => 'Third Product',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laborum fugiat corporis ipsum reprehenderit nisi unde, perspiciatis, similique ipsam pariatur dolores sapiente voluptas. Voluptatum minus dolores nam eligendi neque?',
                'status' => 1,
                'price' => 75,
                'cate_id' => 1,
                'discount' => null,
                'tag' => null,
                'restaurant_id' => 2,
                'featured' => false,
                'qty' => 5,
            ],
            [
                'name' => 'Product 4',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laborum fugiat corporis ipsum reprehenderit nisi unde, perspiciatis, similique ipsam pariatur dolores sapiente voluptas. Voluptatum minus dolores nam eligendi neque?',
                'status' => 1,
                'price' => 75,
                'cate_id' => 1,
                'discount' => 60,
                'tag' => null,
                'restaurant_id' => 1,
                'featured' => true,
                'qty' => 5,
            ],
            [
                'name' => 'Product 5',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laborum fugiat corporis ipsum reprehenderit nisi unde, perspiciatis, similique ipsam pariatur dolores sapiente voluptas. Voluptatum minus dolores nam eligendi neque?',
                'status' => 1,
                'price' => 75,
                'cate_id' => 1,
                'discount' => null,
                'tag' => null,
                'restaurant_id' => 1,
                'featured' => true,
                'qty' => 5,
            ],
            [
                'name' => 'Product 6',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laborum fugiat corporis ipsum reprehenderit nisi unde, perspiciatis, similique ipsam pariatur dolores sapiente voluptas. Voluptatum minus dolores nam eligendi neque?',
                'status' => 1,
                'price' => 90,
                'cate_id' => 1,
                'discount' => 40,
                'tag' => null,
                'restaurant_id' => 1,
                'featured' => true,
                'qty' => 5,
            ],
            [
                'name' => 'Product 7',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laborum fugiat corporis ipsum reprehenderit nisi unde, perspiciatis, similique ipsam pariatur dolores sapiente voluptas. Voluptatum minus dolores nam eligendi neque?',
                'status' => 1,
                'price' => 75,
                'cate_id' => 1,
                'discount' => null,
                'tag' => null,
                'restaurant_id' => 2,
                'featured' => true,
                'qty' => 5,
            ],
        ]);
        DB::table('categories')->insert([
            [
                'cate_name' => 'fast food',
            ],
        ]);
        DB::table('users')->insert([
            [
                'name' => 'Nguyen Hoang Hiep',
                'email' => 'hiepphomacl7@gmail.com',
                'password' => Hash::make('hiep28802'),
                'role' => 1,
            ],
        ]);
        DB::table('restaurants')->insert([
            [
                'restaurant_name' => 'Restaurant 1',
                'address' => '108 Cau Giay, Cau Giay, Hanoi',
                'business_license' => 'business-license.png',
                'telephone' => '0123456789',
                'email' => 'demorestaurant@gmail.com',
                'owner_name' => 'Harry Kain',
                'avatar' => 'restaurant-logo1.png'
            ],
            [
                'restaurant_name' => 'Restaurant 2',
                'address' => '108 Cau Giay, Cau Giay, Hanoi',
                'business_license' => 'business-license.png',
                'telephone' => '03128123712',
                'email' => 'demorestaurant@gmail.com',
                'owner_name' => 'Marry Cue',
                'avatar' => 'restaurant-logo1-1.png'
            ],
        ]);
        DB::table('product_images')->insert([
            [
                'product_id' => '1',
                'path' => 'popular-dish-img1.jpg',
            ],
            [
                'product_id' => '2',
                'path' => 'popular-dish-img2.jpg',
            ],
            [
                'product_id' => '3',
                'path' => 'popular-dish-img3.jpg',
            ],
            [
                'product_id' => '4',
                'path' => 'popular-dish-img1.jpg',
            ],
            [
                'product_id' => '5',
                'path' => 'popular-dish-img2.jpg',
            ],
            [
                'product_id' => '6',
                'path' => 'popular-dish-img3.jpg',
            ],
            [
                'product_id' => '7',
                'path' => 'round-pic4.jpg',
            ],
        ]);
    }
}
