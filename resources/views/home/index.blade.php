@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Hello, World!</h1>

        <textarea id="smde">Test</textarea>
    </div>
@endsection

@section('footer')
    <script>
        new SimpleMDE();
    </script>
@endsection