@extends('layout')

@section('content')
    <main class="main_container">
        <h2>質問詳細</h2>
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
                    <!-- <div>ユーリ・ガガーリンです。</div> -->
                    <hr>
                    <a href="{{ route('questions.index') }}">
                        ←質問一覧に戻る
                    </a>
                </div>
            </div>
        </div>
    </main>
@endsection
