@extends('layout')

@section('content')
    <main class="container">
        <div class="main_contents">
            <div class="q_and_a_box">
                <div class="question_box">
                    <h2>質問タイトル ： {{ $question->title }}</h2>
                    <h3>質問内容詳細 : </h3>
                    <div>{{ $question->content }}</div>
                    <!-- <div>質問状況 ： {{ $question->status }}</div> -->
                </div>
                <div class="answer_box">
                    <h3>回答：</h3>
                    <ul>
                        @foreach($answers as $answer)
                            <li>{{ $answer->content }}</li>
                        @endforeach
                    </ul>

                    <hr>
                    <div>
                        <a href="{{ route('questions.answers.create', ['question' => $question]) }}">回答する</a>
                    </div>
                    <div>
                        <a href="{{ route('questions.index') }}">←質問一覧に戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
