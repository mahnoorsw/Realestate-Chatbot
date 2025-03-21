<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChatbotPromptResponsesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chatbot_prompt_responses')->truncate();

        // Insert new records
        DB::table('chatbot_prompt_responses')->insert([
            ['keyword' => 'hi', 'response' => 'Hello! Welcome to Realty Assist. How can I help you today?', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['keyword' => 'hello', 'response' => 'Hi there! Are you looking to buy, sell, or rent a property?', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['keyword' => 'buy', 'response' => 'Great! What kind of property are you looking to buy? Residential, commercial, or land?', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['keyword' => 'sell', 'response' => 'We can help you sell your property. Can you provide details like location and property type?', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['keyword' => 'rent', 'response' => 'Looking to rent? We have a variety of rental listings. What location and budget are you considering?', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['keyword' => 'mortgage', 'response' => 'We have partnered with top lenders for mortgage options. Do you need assistance in finding the best mortgage plan?', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['keyword' => 'payment plan', 'response' => 'Our properties have flexible payment plans, including mortgage and installment options. Would you like to discuss financing details?', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['keyword' => 'terms and conditions', 'response' => 'Our terms and conditions vary based on property type. Would you like a summary or a link to full terms?', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['keyword' => 'contact', 'response' => 'You can contact us at support@realtyassist.com or call +1-800-REALTY.', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['keyword' => 'appointment', 'response' => 'Would you like to schedule an appointment with one of our real estate agents?', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['keyword' => 'listings', 'response' => 'We have various properties available. What city or state are you interested in?', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['keyword' => 'valuation', 'response' => 'We provide free property valuation. Would you like an estimate for your property?', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['keyword' => 'thank you', 'response' => "You're welcome! Let me know if there's anything else I can help with.", 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['keyword' => 'bye', 'response' => 'Goodbye! Have a great day!', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
