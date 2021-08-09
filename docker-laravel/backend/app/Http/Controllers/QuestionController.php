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

    public function create()
    {
        return view('questions/create');
    }

    public function store(Request $request)
    {
        $question = new Question();
        $question->title = $request->title;
        $question->content = $request->content;
        $question->status = 1;
        $question->save();

        return redirect()->route('questions.index', [
            'id' => $question->id,
        ]);
    }
}
