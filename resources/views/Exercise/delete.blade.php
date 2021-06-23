@extends('layouts.admin-portal')

@section('title', 'Exercise details')

@section('header')
    <h2>Delete exercise</h2>
@endsection
@section('main')
    <div class="grid-x grid-margin-x bg-white max-w-3xl mx-auto sm:px-6 lg:px-8">
        <form class="grid-x grid-padding-x" method="post" action="{{route('exercise.destroy', $exercise)}}">
            @csrf
            @method('DELETE')
            <h3 class="cell small-12 text-center">Deleting exercise<br/>
                <a class="font-bold" href="{{route('exercise.show', $exercise)}}">
                    @php $maxQuestionLength = 50; @endphp
                    @if(strlen($exercise->question) > $maxQuestionLength)
                        {{substr($exercise->question, 0, $maxQuestionLength)}}...
                    @else
                        {{$exercise->question}}
                    @endif
                </a>
            </h3>
            <p class="cell small-12 text-center my-2">Are you sure you want to delete this exercise?</p>
            <div class="cell small-5 medium-4">
                <button class="button alert expanded" type="submit">Delete</button>
            </div>
            <div class="cell small-5 small-offset-1 medium-4 medium-offset-4">
                <a class="button secondary expanded" href="{{url()->previous()}}">Cancel</a>
            </div>
        </form>
    </div>
@endsection
