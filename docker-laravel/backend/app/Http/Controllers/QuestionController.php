<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        // return "Hello world";
        $questions = Question::all();

        return view('questions/index', [
            'questions' => $questions,
        ]);
    }

    public function show($question_id)
    {
        $question = Question::findOrFail($question_id);

        return view('questions.show', [
            'question' => $question,
        ]);
    }
}
