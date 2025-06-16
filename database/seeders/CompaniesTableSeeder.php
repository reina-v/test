<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->truncate();
        
        Company::create([
            'company_name' => 'コカコーラ社',
            'street_address' => '東京都渋谷区４丁目６番３号',
            'representative_name' => 'ホルヘ・ガルドゥニョ',                
        ]);

        Company::create([
            'company_name' => 'アサヒ飲料',
            'street_address' => '東京都墨田区吾妻橋１丁目２３番１号',
            'representative_name' => '米女 太一',
        ]);
    }
}
