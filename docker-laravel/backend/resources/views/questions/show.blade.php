@extends('layout')

@section('content')
    <main class="container pt-4">
            <div class="">
                <div class="border-bottom h5 pl-3">{{ $question->title }}</div>

                <div class="pl-5">
                    <div class="pl-5">
                        <div>{{ $question->content }}</div>
                    </div>
                    <div class="d-flex justify-content-end pr-3">{{ $question->formatted_created_at }}</div>
                </div>

                <div class="d-flex justify-content-center h4">
                    <a href="{{ route('questions.answers.create', ['question' => $question]) }}" >回答する</a>
                </div>

                <div class="p-3 bg-light">
                    <h4>回答一覧</h4>
                    <div class="container">
                        <div>
                            @foreach($answers as $answer)
                                <div class="border rounded mb-2 p-3">
                                    <div>{{ $answer->content }}</div>
                                    <div class="d-flex justify-content-end">{{ $answer->formatted_created_at }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>


                    <hr>
                    <div class="d-flex justify-content-center h4">
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
