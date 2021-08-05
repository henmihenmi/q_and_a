@extends('layout')

@section('content')
    <main class="main_container">
        <h2>質問一覧</h2>
        <div class="main_contents">
            <div class="q_and_a_box">
                <div class="question_box">
                    @foreach($questions as $question)
                        <h2>
                            質問タイトル ：
                            <a href="{{ route('questions.show', ['question' => $question]) }}">
                                {{ $question->title }}
                            </a>
                        </h2>
                        <hr>
                    @endforeach
                </div>
                <!-- <div class="answer_box">
                    <h3>回答：</h3>
                    <div>ユーリ・ガガーリンです。</div>
                </div> -->
            </div>
        </div>
    </main>
@endsection
