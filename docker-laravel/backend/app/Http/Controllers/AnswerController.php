<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnswerRequest;
use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AnswerController extends Controller
{
    public function create()
    {
        return view('answers/create');
    }

    public function store(AnswerRequest $request)
    {
        $answer = new Answer();
        $answer->question_id = $request->question_id;
        $answer->content = $request->content;
        $answer->save();

        return redirect()->route('questions.show', $answer->question_id);
    }
}
