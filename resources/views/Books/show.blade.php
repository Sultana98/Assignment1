@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">

            <h1 class="text-4x1">
                {{ $Book -> name }}

            </h1>
        </div>
    </main>
@endsection
