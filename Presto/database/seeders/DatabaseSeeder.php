<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories=['Auto', 'Informatica' ,'Elettrodomestici', 'Lavoro' , 'Immobili', 'Abbigliamento' , 'Strumenti musicali' , 'Libri', 'Fai da te', 'Cucina' ];
        foreach ($categories as $category) {
            DB::table('categories')->insert([
                
                'name' => $category,
                'created_at'=> Carbon::now(), 
                'updated_at'=> Carbon::now(), 
            ]);
        }
    }
}
