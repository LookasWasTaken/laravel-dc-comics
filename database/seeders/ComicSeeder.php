<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        foreach($comics as $comic){
            $single = new Comic();
            $single->title = $comic['title'];
            $single->description = $comic['description'];
            $single->thumb = $comic['thumb'];
            $single->price = $comic['price'];
            $single->series = $comic['series'];
            $single->sale_date = $comic['sale_date'];
            $single->type = $comic['type'];
            $single->save();
        };
    }
}
