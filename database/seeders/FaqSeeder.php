<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            'question' => 'What is Crowdfund?',
            'answer'   => 'Crowdfund is the projects plateform whaich are funded by contributers and users.',
        ]);


        DB::table('faqs')->insert([
            'question' => 'When should I buy a subscription',
            'answer'   => 'The Disney Bundle includes Disney+, ESPN+, and the Hulu plan that fits you best for a discounted price. You can save 25%, compared to the monthly cost of subscribing to all 3 services separately! Choose between The Disney Bundle with Hulu (ad-supported) for $13.99/month or with Hulu (No Ads) for $19.99/month. Learn more.\r\n\r\nWith Disney+, you get new releases, classics, series, and Originals from the creators at Disney, Pixar, Marvel, Star Wars, and Nat Geo.\r\n\r\nWith Hulu, you can enjoy over 80,000 episodes of every kind of TV, including hit series, breakthrough Hulu Originals, and kids TV.\r\n\r\nAnd with ESPN+, you can stream thousands of events, top Originals, the complete 30 for 30 library, and more.\r\n\r\nGet all three and start streaming now!',
        ]);

        DB::table('faqs')->insert([
            'question' => 'What is the best thing ever',
            'answer'   => 'With Premier Access, you can watch the latest Disney releases at the same time they are in open theaters and before they become available to all Disney+ subscribers for $29.99. Once you have Premier Access to a movie, you can watch it as many times as you want on any platform where Disney+ is available, as long as you are an active Disney+ subscriber',
        ]);

        DB::table('faqs')->insert([
            'question' => 'What should I buy for herubscription',
            'answer'   => 'To be called the greatest is the best thing ever my friend, to be important to people',
        ]);

        DB::table('faqs')->insert([
            'question' => 'When should I buy a subscription',
            'answer'   => 'To be called the greatest is the best thing ever my friend, to be important to people',
        ]);

    }
}
