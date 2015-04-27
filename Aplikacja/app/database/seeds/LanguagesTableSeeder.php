<?php


class LanguagesTableSeeder extends Seeder 
{

    public function run()
    {
        DB::table('languages')->delete();
		DB::unprepared("ALTER TABLE languages AUTO_INCREMENT = 1;");
        Language::create(['language'=>'Chinese, Mandarin']);
Language::create(['language'=>'English']);
Language::create(['language'=>'Spanish']);
Language::create(['language'=>'Arabic']);
Language::create(['language'=>'Bengali']);
Language::create(['language'=>'Hindi']);
Language::create(['language'=>'Russian']);
Language::create(['language'=>'Portuguese']);
Language::create(['language'=>'Japanese']);
Language::create(['language'=>'German']);
Language::create(['language'=>'Chinese, Wu']);
Language::create(['language'=>'Javanese']);
Language::create(['language'=>'Korean']);
Language::create(['language'=>'French']);
Language::create(['language'=>'Turkish']);
Language::create(['language'=>'Vietnamese']);
Language::create(['language'=>'Telugu']);
Language::create(['language'=>'Chinese, Yue(Cantonese)']);
Language::create(['language'=>'Marathi']);
Language::create(['language'=>'Tamil']);
Language::create(['language'=>'Italian']);
Language::create(['language'=>'Urdu']);
Language::create(['language'=>'Chinese, Min Nan']);
Language::create(['language'=>'Chinese, Jinyu']);
Language::create(['language'=>'Gujarati']);
Language::create(['language'=>'Polish']);
Language::create(['language'=>'Ukrainian']);
Language::create(['language'=>'Persian']);
Language::create(['language'=>'Chinese, Xiang']);
Language::create(['language'=>'Malayalam']);
Language::create(['language'=>'Chinese, Hakka']);
Language::create(['language'=>'Kannada']);
Language::create(['language'=>'Oriya']);
Language::create(['language'=>'Panjabi, Western']);
Language::create(['language'=>'Sunda']);
Language::create(['language'=>'Panjabi, Eastern']);
Language::create(['language'=>'Romanian']);
Language::create(['language'=>'Bhojpuri']);
Language::create(['language'=>'Azerbaijani, South']);
Language::create(['language'=>'Maithili']);
Language::create(['language'=>'Hausa']);
Language::create(['language'=>'Burmese']);
Language::create(['language'=>'Serbo-Croatian4']);
Language::create(['language'=>'Chinese, Gan']);
Language::create(['language'=>'Awadhi']);
Language::create(['language'=>'Thai']);
Language::create(['language'=>'Dutch']);
Language::create(['language'=>'Yoruba']);
Language::create(['language'=>'Sindhi']);


    }

}