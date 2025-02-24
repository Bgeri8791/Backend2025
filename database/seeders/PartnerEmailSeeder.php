<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PartnerEmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("partner_emails")->insert(
            [
                "partner_name"=>"Teszt cég",
                "partner_email"=>"teszt@gmail.com",
            ]
        );
    }
}
