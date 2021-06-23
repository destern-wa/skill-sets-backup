@extends('layouts.admin-portal')

@section('title', 'Create Exercise')

@section('header')
    <h2>Create Exercise</h2>
@endsection

@section('main')
    <form class="grid-x grid-padding-x grid-padding-y bg-white px-2" method="POST" action="{{route('exercise.store')}}">
        @csrf
        @if (count($errors) > 0)
            <div class="cell small-12 callout alert mx-4 my-4">
                <strong>Please fix these errors before continuing</strong>
                <ul>
                    @foreach($errors->all() as $errorMessage)
                        <li>{{$errorMessage}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <label for="question" class="cell small-12 medium-2 font-bold" style="padding-bottom: 0">Question</label>
        <div class="cell small-12 medium-10">
            <input id="question" name="question" type="text" class="my-0" required>
        </div>
        <label for="questionType" class="cell small-12 medium-2 font-bold" style="padding-bottom: 0">Question type</label>
        <div  class="cell small-12 medium-10">
            <select id="questionType" name="questionType" class="px-1">
                <option value=""></option>
                @foreach($questionTypes as $questionType)
                    <option value="{{$questionType->id}}">
                        {{$questionType->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="cell small-6 medium-3">
            <button class="button expanded primary my-0" type="submit">Save</button>
        </div>
        <div class="cell small-6 medium-3 medium-offset-6">
            <a class="button expanded secondary my-0" href="{{url()->previous()}}">Cancel</a>
        </div>
    </form>
@endsection
