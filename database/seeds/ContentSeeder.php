<?php

use App\User;
use App\Website;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fname' => 'Admin',
            'lname' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => '0',
            'website_id' => 1,
            'phone' => '00000000',
            'address' => 'Guadeloupe',
            'password' => Hash::make('12345678'),
            'image' => 'local/avatar.jpg'
        ]);
        Website::create([
            'logo' => 'front/images/logo.png',
            'sitename' => 'West Indes Care',
            'phone' => '1.800.321.9876',
            'email' => 'info@westindescare.com',
            'address' => '70 Greenview Ave. Temple Hills MD 20748, USA',
            'facebook' => 'www.facebook.com',
            'instagram' => 'www.instagram.com',
            'time' => 'Mon to Friday',
            'footer_text' => 'Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'footer_logo' => 'front/images/bg/footer.png',
        ]);
    }
}
