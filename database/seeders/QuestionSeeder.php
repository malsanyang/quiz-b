<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::firstOrCreate([
            'question' => 'This is question 1 of this challenge?',
            'card_id' => 1,
            'challenge_id' => 1,
        ],[
            'hint' => '<p>This is my hint.</p>',
            'option_a' => 'This is option A',
            'option_b' => 'This is option B',
            'option_c' => 'This is option C',
            'option_d' => 'This is option D',
        ]);
        Question::firstOrCreate([
            'question' => 'This is question 2 of this challenge?',
            'card_id' => 1,
            'challenge_id' => 1,
        ],[
            'hint' => '<p>This is my hint.</p>',
            'option_a' => 'This is option A',
            'option_b' => 'This is option B',
            'option_c' => 'This is option C',
            'option_d' => 'This is option D',
        ]);

        Question::firstOrCreate([
            'question' => 'This is question 1 of this challenge?',
            'card_id' => 2,
            'challenge_id' => 1,
        ],[
            'hint' => '<p>This is my hint.</p>',
            'option_a' => 'This is option A',
            'option_b' => 'This is option B',
            'option_c' => 'This is option C',
            'option_d' => 'This is option D',
        ]);
        Question::firstOrCreate([
            'question' => 'This is question 2 of this challenge?',
            'card_id' => 2,
            'challenge_id' => 1,
        ],[
            'hint' => '<p>This is my hint.</p>',
            'option_a' => 'This is option A',
            'option_b' => 'This is option B',
            'option_c' => 'This is option C',
            'option_d' => 'This is option D',
        ]);

        Question::firstOrCreate([
            'question' => 'This is question 1 of this challenge?',
            'card_id' => 3,
            'challenge_id' => 1,
        ],[
            'hint' => '<p>This is my hint.</p>',
            'option_a' => 'This is option A',
            'option_b' => 'This is option B',
            'option_c' => 'This is option C',
            'option_d' => 'This is option D',
        ]);
        Question::firstOrCreate([
            'question' => 'This is question 2 of this challenge?',
            'card_id' => 3,
            'challenge_id' => 1,
        ],[
            'hint' => '<p>This is my hint.</p>',
            'option_a' => 'This is option A',
            'option_b' => 'This is option B',
            'option_c' => 'This is option C',
            'option_d' => 'This is option D',
        ]);


        // second row
        Question::firstOrCreate([
            'question' => 'This is question 1 of this challenge?',
            'card_id' => 1,
            'challenge_id' => 2,
        ],[
            'hint' => '<p>This is my hint.</p>',
            'option_a' => 'This is option A',
            'option_b' => 'This is option B',
            'option_c' => 'This is option C',
            'option_d' => 'This is option D',
        ]);
        Question::firstOrCreate([
            'question' => 'This is question 2 of this challenge?',
            'card_id' => 1,
            'challenge_id' => 2,
        ],[
            'hint' => '<p>This is my hint.</p>',
            'option_a' => 'This is option A',
            'option_b' => 'This is option B',
            'option_c' => 'This is option C',
            'option_d' => 'This is option D',
        ]);

        Question::firstOrCreate([
            'question' => 'This is question 1 of this challenge?',
            'card_id' => 2,
            'challenge_id' => 2,
        ],[
            'hint' => '<p>This is my hint.</p>',
            'option_a' => 'This is option A',
            'option_b' => 'This is option B',
            'option_c' => 'This is option C',
            'option_d' => 'This is option D',
        ]);
        Question::firstOrCreate([
            'question' => 'This is question 2 of this challenge?',
            'card_id' => 2,
            'challenge_id' => 2,
        ],[
            'hint' => '<p>This is my hint.</p>',
            'option_a' => 'This is option A',
            'option_b' => 'This is option B',
            'option_c' => 'This is option C',
            'option_d' => 'This is option D',
        ]);

        Question::firstOrCreate([
            'question' => 'This is question 1 of this challenge?',
            'card_id' => 3,
            'challenge_id' => 2,
        ],[
            'hint' => '<p>This is my hint.</p>',
            'option_a' => 'This is option A',
            'option_b' => 'This is option B',
            'option_c' => 'This is option C',
            'option_d' => 'This is option D',
        ]);
        Question::firstOrCreate([
            'question' => 'This is question 2 of this challenge?',
            'card_id' => 3,
            'challenge_id' => 2,
        ],[
            'hint' => '<p>This is my hint.</p>',
            'option_a' => 'This is option A',
            'option_b' => 'This is option B',
            'option_c' => 'This is option C',
            'option_d' => 'This is option D',
        ]);



        Question::firstOrCreate([
            'question' => 'This is question 1 of this challenge?',
            'card_id' => 1,
            'challenge_id' => 3,
        ],[
            'hint' => '<p>This is my hint.</p>',
            'option_a' => 'This is option A',
            'option_b' => 'This is option B',
            'option_c' => 'This is option C',
            'option_d' => 'This is option D',
        ]);
        Question::firstOrCreate([
            'question' => 'This is question 2 of this challenge?',
            'card_id' => 1,
            'challenge_id' => 3,
        ],[
            'hint' => '<p>This is my hint.</p>',
            'option_a' => 'This is option A',
            'option_b' => 'This is option B',
            'option_c' => 'This is option C',
            'option_d' => 'This is option D',
        ]);

        Question::firstOrCreate([
            'question' => 'This is question 1 of this challenge?',
            'card_id' => 2,
            'challenge_id' => 3,
        ],[
            'hint' => '<p>This is my hint.</p>',
            'option_a' => 'This is option A',
            'option_b' => 'This is option B',
            'option_c' => 'This is option C',
            'option_d' => 'This is option D',
        ]);
        Question::firstOrCreate([
            'question' => 'This is question 2 of this challenge?',
            'card_id' => 2,
            'challenge_id' => 3,
        ],[
            'hint' => '<p>This is my hint.</p>',
            'option_a' => 'This is option A',
            'option_b' => 'This is option B',
            'option_c' => 'This is option C',
            'option_d' => 'This is option D',
        ]);

        Question::firstOrCreate([
            'question' => 'This is question 1 of this challenge?',
            'card_id' => 3,
            'challenge_id' => 3,
        ],[
            'hint' => '<p>This is my hint.</p>',
            'option_a' => 'This is option A',
            'option_b' => 'This is option B',
            'option_c' => 'This is option C',
            'option_d' => 'This is option D',
        ]);
        Question::firstOrCreate([
            'question' => 'This is question 2 of this challenge?',
            'card_id' => 3,
            'challenge_id' => 3,
        ],[
            'hint' => '<p>This is my hint.</p>',
            'option_a' => 'This is option A',
            'option_b' => 'This is option B',
            'option_c' => 'This is option C',
            'option_d' => 'This is option D',
        ]);
    }
}
