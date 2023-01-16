<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics.comics');
        //dd($comics);

        foreach($comics as $comic){
            $new_comic = new Comic();
            $new_comic->title = $comic['title'];
            $new_comic->description = $comic['description'];
            $new_comic->price = $comic['price'];
            $new_comic->series = $comic['series'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->type = $comic['type'];
            $new_comic->artists = $comic['artists'];
            $new_comic->writers = $comic['writers'];
            $new_comic->save();
        }
    }
}

