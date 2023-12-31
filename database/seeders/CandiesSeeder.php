<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CandiesSeeder extends Seeder
{

    public function run(): void
    {


        $candies = [
            [
                'name' => 'Ginger Candy',
                'price' => '9.99',
                'color' => 'yellow',
                'description' => 'Delicious ginger candy bursting with flavor. Made with finest ingredients and a touch of ginger spice, perfect for unique and zesty treat.',
                'image' => '/images/1.jpg',
            ],
            [
                'name' => 'Japanese kitkats',
                'price' => '9.99',
                'color' => 'various',
                'description' => 'Experience authentic taste of Japan with our kitkats. Delightful treats in variety of flavors, offering glimpse into rich and diverse culinary traditions of Japan.',
                'image' => '/images/2.jpg',
            ],
            [
                'name' => 'Haw Flakes',
                'price' => '9.99',
                'color' => 'pink',
                'description' => 'Indulge in nostalgia of childhood with our haw flakes. Sweet and tangy treats reminiscent of carefree days enjoying snacks with friends.',
                'image' => '/images/3.jpg',
            ],
            [
                'name' => 'Ume Candy',
                'price' => '9.99',
                'color' => 'purple',
                'description' => 'Savor unique flavor of ume with our delectable candy. Made from finest ume plums, offering delightful combination of sweet and sour.',
                'image' => '/images/4.jpg',
            ],
            [
                'name' => 'Li Hing Mui Drops',
                'price' => '9.99',
                'color' => 'red',
                'description' => 'Embark on flavor adventure with our Li Hing Mui Drops. Unique candies offer taste of tropics, combining sweet notes of traditional candies with exotic tang of Li Hing Mui.',
                'image' => '/images/5.jpg',
            ],
            [
                'name' => 'Lychee Jelly',
                'price' => '9.99',
                'color' => 'pink',
                'description' => 'Immerse yourself in luscious flavor of lychee with our Lychee Jelly candies. Burst of tropical goodness, transporting your taste buds to sun-kissed orchards.',
                'image' => '/images/6.jpg',
            ],
            [
                'name' => 'Coconut candy',
                'price' => '9.99',
                'color' => 'white',
                'description' => 'Experience tropical paradise of coconut with our Coconut Candy. Crafted from fresh coconuts, offering creamy and nutty flavor profile.',
                'image' => '/images/7.jpg',
            ],
            [
                'name' => 'Mokomoko Mokolet',
                'price' => '9.99',
                'color' => 'blue',
                'description' => 'Unleash your inner child with our Mokomoko Mokolet candy. Whimsical candies, treat for taste buds and feast for eyes. Playful colors and delightful shapes.',
                'image' => '/images/8.jpg',
            ],
        ];
        DB::table('candies')->insert($candies);

    }
}
