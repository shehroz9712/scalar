<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('faqs')->delete();

        DB::table('faqs')->insert(array(
            0 =>
            array(
                'id' => 1,
                'question' => 'How does Scalar Finances help individuals and families',
                'answer' => 'Scalar provides financial services and resources tailored to your unique needs, including retirement planning, investment management, budgeting, and more',
                'status' => 1,
            ),
            1 =>
            array(
                'id' => 2,
                'question' => 'Who can benefit from Scalar\'s services',
                'answer' => 'Scalar\'s services are designed for individuals and families from all walks of life who want to build financial security, plan for the future, and achieve their financial goals',
                'status' => 1,
            ),
            2 =>
            array(
                'id' => 3,
                'question' => 'How can I connect with a certified financial professional at Scalar',
                'answer' => 'You can easily connect with our certified professionals through our website. Simply fill out the contact form, and we\'ll match you with the right advisor for your needs',
                'status' => 1,
            ),
            3 =>
            array(
                'id' => 4,
                'question' => 'What sets Scalar Finances apart from other financial services companies',
                'answer' => 'Scalar\'s commitment to inclusivity, accessibility, and personalized service sets us apart. We prioritize understanding your unique circumstances and goals to provide tailored financial solutions',
                'status' => 1,
            ),
            4 =>
            array(
                'id' => 5,
                'question' => 'Is Scalar Finances hiring',
                'answer' => 'Yes, Scalar Finances is always looking for talented individuals to join our team. Visit our Careers page to explore current job openings and opportunities',
                'status' => 1,
            ),
        ));
    }
}
