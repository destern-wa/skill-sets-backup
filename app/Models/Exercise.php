<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    /**
     * Mass-assignable properties
     *
     * @var string[]
     */
    protected $fillable = [
        'question',
        'question_type_id'
    ];

    /**
     * Question type for the exercise (one-to-many relationship)
     */
    public function questionType() {
        return $this->belongsTo(QuestionType::class);
    }
}
