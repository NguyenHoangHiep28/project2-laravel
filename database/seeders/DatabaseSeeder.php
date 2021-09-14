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
                'role' => 2,
                'restaurant_id' => 1,
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
                'avatar' => 'restaurant-logo1-2.png',
                'tel_owner' => '0123456789',
                'status' => '1',
                'user_id' => 1,
                'package' => 1,
                'start_date' => '2012-08-20',
                'end_date' => '2013-08-20'
            ],
            [
                'restaurant_name' => 'Restaurant 2',
                'address' => '108 Cau Giay, Cau Giay, Hanoi',
                'business_license' => 'business-license.png',
                'telephone' => '03128123712',
                'email' => 'demorestaurant@gmail.com',
                'owner_name' => 'Marry Cue',
                'avatar' => 'restaurant-logo1-1.png',
                'tel_owner' => '0123456789',
                'status' => '1',
                'user_id' => 3,
                'package' => 1,
                'start_date' => '2012-08-20',
                'end_date' => '2013-08-20'
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
        DB::table('faqs')->insert([
            [
                'title' => 'What is FoodMate ?',
                'content' => 'FoodMate is one of the most favorite e-commerce service in Vietnam, connecting millions of buyers and sellers to cater to the growing demand for online shopping a reliable e-commerce bridge, FoodMate also provides fast and convenient delivery service, giving customers the effective and optimal online shopping experience'
            ],
            [
                'title' =>'Superior delivery',
                'content' => 'The private delivery team guarantees all your food is delivered on time.'
            ],
            [
                'title' =>'Diversity foods',
                'content' => 'Thousands of products and services ranging from food, drinks, cuisines'
            ],
            [
                'title' =>'Local company',
                'content' => 'As a Vietnamese company that caters to Vietnamese people, we are knowledgeable about the Vietnamese market and know the buying psychology of our users'
            ],
        ]);
    }
}
