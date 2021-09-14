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
                'name' => 'Chocolate cake with cream.',
                'description' => 'The cake is made in two bowls, no mixer required, simple ingredients that you’ll already have in your kitchen and topped with the most incredible chocolate cream cheese frosting. It’s not too sweet, too rich, or too hard to make, just the most perfect homemade chocolate cake that you’ll make again and again and again!',
                'status' => 1,
                'price' => 40,
                'cate_id' => 2,
                'discount' => null,
                'tag' => null,
                'restaurant_id' => 1,
                'featured' => 1,

            ],
            [
                'name' => 'Vegetable soup',
                'description' => 'Not only is this soup delicious but and it’s so easy to make. It just takes some chopping and a bit of simmering until you’ve got a soup everyone will love!',
                'status' => 1,
                'price' => 55,
                'cate_id' => 12,
                'discount' => 35,
                'tag' => null,
                'restaurant_id' => 1,
                'featured' => 0,

            ],
            [
                'name' => 'Beefsteak',
                'description' => 'This is just an excellent beef steak marinade that adds juiciness and flavour into steaks, transforming economical steaks from just ok to “wow!”. It injects extra flavour without overpowering the natural flavour of beef, and makes the meat tender.',
                'status' => 1,
                'price' => 60,
                'cate_id' => 8,
                'discount' => null,
                'tag' => null,
                'restaurant_id' => 1,
                'featured' => 0,

            ],
            [
                'name' => 'Vegetarian noodles',
                'description' => 'Taking cues from the ever-popular Roman dish cacio e pepe (cheese and pepper), this is a modern reworking of these classic umami flavours into a vibrant Asian-ish noodle dish. Spice and piquancy come from the freshly ground black pepper, which is teamed with just enough tongue-tingling Sichuan pepper to excite your taste buds. ',
                'status' => 1,
                'price' => 45,
                'cate_id' => 7,
                'discount' => 30,
                'tag' => null,
                'restaurant_id' => 1,
                'featured' => 1,

            ],
            [
                'name' => 'Italian noodles',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laborum fugiat corporis ipsum reprehenderit nisi unde, perspiciatis, similique ipsam pariatur dolores sapiente voluptas. Voluptatum minus dolores nam eligendi neque?',
                'status' => 1,
                'price' => 50,
                'cate_id' => 7,
                'discount' => null,
                'tag' => null,
                'restaurant_id' => 1,
                'featured' => 0,

            ],
            [
                'name' => 'Coffee cake',
                'description' => 'Coffee cake is one of those magical cakes that gets away with being acceptable to eat any time of the day.',
                'status' => 1,
                'price' => 40,
                'cate_id' => 2,
                'discount' => 40,
                'tag' => null,
                'restaurant_id' => 1,
                'featured' => 1,

            ],
            [
                'name' => 'Cereals cake',
                'description' => 'The best part about Cereal Cake is you can make it with nearly any cereal you have. Denser, more fiber-rich cereals will give you a slightly denser cake than light rice-based cereals, but either way the cake is delicious.',
                'status' => 1,
                'price' => 75,
                'cate_id' => 2,
                'discount' => null,
                'tag' => null,
                'restaurant_id' => 1,
                'featured' => 0,
            ],
            [
                'name' => 'Roasted Chicken',
                'description' => 'This roast chicken recipe is proof that there’s really nothing simpler, more delicious, or more comforting than a beautifully browned roast bird surrounded by a puddle of buttery, garlicky pan juices.',
                'status' => 1,
                'price' => 75,
                'cate_id' => 8,
                'discount' => null,
                'tag' => null,
                'restaurant_id' => 1,
                'featured' => 0,
            ],
            [
                'name' => 'Chicken Soup',
                'description' => 'Classic chicken soup is exactly what you need, whether to soothe a cold or just to warm your bones. It should be flavorful yet clean, and satisfying without being overly rich or heavy.',
                'status' => 1,
                'price' => 80,
                'cate_id' => 12,
                'discount' => 65,
                'tag' => null,
                'restaurant_id' => 1,
                'featured' => 0,
            ],
            [
                'name' => 'Homemade Creamy Vegetable Soup',
                'description' => 'Homemade Creamy Vegetable Soup is an insanely delicious, creamy vegetable soup without any cream. It’s perfect if you are looking for a vegetarian meal or just something light and easy.',
                'status' => 1,
                'price' => 75,
                'cate_id' => 12,
                'discount' => null,
                'tag' => null,
                'restaurant_id' => 1,
                'featured' => 1,
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
                'path' => 'restaurant-detail-big-img1-3.jpg',
            ],
            [
                'product_id' => '5',
                'path' => 'resto-service4.jpg',
            ],
            [
                'product_id' => '6',
                'path' => 'restaurant-gallery-img2.jpg',
            ],
            [
                'product_id' => '7',
                'path' => 'gallery-inner-img1-3.jpg',
            ],
            [
                'product_id' => '8',
                'path' => 'roasted-chicken.jpg',
            ],
            [
                'product_id' => '9',
                'path' => 'chicken-soup.jpg',
            ],
            [
                'product_id' => '10',
                'path' => 'creamy-vegetable-soup.jpg',
            ],
            [
                'cate_name' => 'Pizza',
            ],
            [
                'cate_name' => 'Cafe',
            ]
        ]);
        DB::table('categories')->insert([
            [
                'id' => 1,
                'cate_name' => 'Fast Food',
            ],
            [
                'id' => 2,
                'cate_name' => 'Cake',
            ],
            [
                'id' => 3,
                'cate_name' => 'Vegetarian',
            ],
            [
                'id' => 4,
                'cate_name' => 'Coffee/Dessert',
            ],
            [
                'id' => 5,
                'cate_name' => 'Street Food',
            ],
            [
                'id' => 6,
                'cate_name' => 'Tea',
            ],
            [
                'id' => 7,
                'cate_name' => 'Noodles',
            ],
            [
                'id' => 8,
                'cate_name' => 'Roasted Food',
            ],
            [
                'id' => 9,
                'cate_name' => 'Bakery',
            ],
            [
                'id' => 10,
                'cate_name' => 'Beer',
            ],
            [
                'id' => 11,
                'cate_name' => 'Chinese Food',
            ],
            [
                'id' => 12,
                'cate_name' => 'Soup',
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
        DB::table('users')->insert([
            [
                'name' => 'Nguyen Hoang Hiep',
                'email' => 'hiepphomacl7@gmail.com',
                'password' => Hash::make('hiep28802'),
                'role' => 2,
                'restaurant_id' => 1,
            ],
        ]);
        DB::table('restaurant_images')->insert([
            [
                'restaurant_id' => '1',
                'path' => 'popular-dish-img1.jpg',
            ],
            [
                'restaurant_id' => '1',
                'path' => 'popular-dish-img2.jpg',
            ],
            [
                'restaurant_id' => '1',
                'path' => 'popular-dish-img3.jpg',
            ],
            [
                'restaurant_id' => '2',
                'path' => 'popular-dish-img1.jpg',
            ],
            [
                'restaurant_id' => '2',
                'path' => 'popular-dish-img2.jpg',
            ],
            [
                'restaurant_id' => '2',
                'path' => 'popular-dish-img3.jpg',
            ],
            [
                'restaurant_id' => '2',
                'path' => 'round-pic4.jpg',
            ]
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
