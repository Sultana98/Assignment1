@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">

            <ul>
                @foreach($Books as $b)
                    <li>
                        <a href="{{ $b -> path }}">{{$b -> name}}</a>
                    </li>
                @endforeach
            </ul>

        </div>
    </main>
@endsection
