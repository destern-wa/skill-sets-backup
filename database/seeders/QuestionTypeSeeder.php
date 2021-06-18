<?php

namespace Database\Seeders;

use App\Models\QuestionType;
use Illuminate\Database\Seeder;

class QuestionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questionTypes = [
          ['name' => 'Short answer'],
          ['name' => 'Long answer'],
          ['name' => 'Multiple choice'],
          ['name' => 'True / False'],
        ];
        foreach ($questionTypes as $questionType)
        {
            QuestionType::create($questionType);
        }
    }
}
