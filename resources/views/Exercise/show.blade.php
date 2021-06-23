@extends('layouts.admin-portal')

@section('title', 'Exercise details')

@section('header')
    <h2>Exercise details</h2>
@endsection
@section('main')
    <div class="grid-x grid-margin-x bg-white">
        <dl class="cell grid-x grid-padding-x py-3 gap-y-2">
            <dt class="cell small-12 medium-2 font-bold">Question</dt>
            <dd class="cell small-12 medium-9">{{$exercise->question}}</dd>
            <dt class="cell small-12 medium-2 font-bold">Question type</dt>
            <dd class="cell small-12 medium-9">{{$exercise->questionType->name}}</dd>
        </dl>
        <div class="cell small-12 medium-3">
            <a class="button expanded success" href="{{route('exercise.edit', $exercise)}}">Edit</a>
        </div>
        <div class="cell small-12 medium-3">
            <a class="button expanded alert">Delete</a>
        </div>
        <div class="cell small-12 medium-3 medium-offset-3">
            <a class="button expanded secondary" href="{{route('exercise.index')}}">All exercises</a>
        </div>
    </div>
@endsection
