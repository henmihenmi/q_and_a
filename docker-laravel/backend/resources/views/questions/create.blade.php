@extends('layout')

@section('content')
    <div class="main_container">
        <h2>新しく質問する</h2>
        <div class="create_container">
            <div class="question_form">
                @if($errors->any())
                    <div>
                        <ul>
                            @foreach($errors->all() as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('questions.store') }}" method="post">
                    @csrf
                    <div class="question_content">
                        <h2>タイトル : </h2><br>
                        <input type="text" name="title" value="{{ old('title') }}"><br>
                        <h2>質問内容 : </h2><br>
                        <textarea type="text" name="content">{{ old('content') }}</textarea>
                    </div>
                    <div class="question_submit">
                        <button type="submit">追加する</button>
                    </div>
                    <a href="{{ route('questions.index') }}">
                        ←質問一覧に戻る
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection
