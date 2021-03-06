@extends('layouts.admin-portal')

@section('title', 'Exercises')

@section('header')
    <h2>All Exercises</h2>
@endsection
@section('main')
    <table>
        <tr>
            <th>Question</th>
            <th>Type</th>
            <th><span class="show-for-sr">Actions</span></th>
        </tr>
        @php $maxQuestionLength = 80; @endphp
        @forelse($exercises as $exercise)
            <tr>
                <td>
                    @if(strlen($exercise->question) > $maxQuestionLength)
                        {{substr($exercise->question, 0, $maxQuestionLength)}}...
                    @else
                        {{$exercise->question}}
                    @endif
                </td>
                <td class="text-center">{{$exercise->questionType->name}}</td>
                <td>
                    <div class="stacked-for-small expanded button-group" style="margin: 0">
                        <a class="button" href="{{route('exercise.show', $exercise)}}">View</a>
                        <a class="button success" href="{{route('exercise.edit', $exercise)}}">Edit</a>
                        <a class="button alert" href="{{route('exercise.delete', $exercise)}}">Delete</a>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No exercises found. You can <a href="{{route('exercise.create')}}">add a exercise</a>!</td>
            </tr>
        @endforelse
    </table>
@endsection
