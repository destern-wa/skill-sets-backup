<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\QuestionType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\View\View;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $exercises = Exercise::all();
        return view('Exercise.index', compact('exercises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        $questionTypes = QuestionType::all();
        return view('Exercise.create', compact('questionTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param  Exercise  $exercise
     * @return RedirectResponse
     */
    public function store(Request $request, Exercise $exercise)
    {
        $this->validate($request, [
            'question' => 'required',
            'questionType' => 'required|numeric|integer|min:1'
        ]);
        $questionType = QuestionType::findOrFail($request->get('questionType'));

        $exercise = new Exercise();
        $exercise->question = $request->get('question');
        $exercise->questionType()->associate($questionType);
        $exercise->save();

        return redirect(route('exercise.show', $exercise));
    }

    /**
     * Display the specified resource.
     *
     * @param Exercise $exercise
     * @return View
     */
    public function show(Exercise $exercise)
    {
        return view('Exercise.show', compact('exercise'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Exercise $exercise
     * @return View
     */
    public function edit(Exercise $exercise)
    {
        $questionTypes = QuestionType::all();
        return view('Exercise.edit', compact('exercise', 'questionTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Exercise $exercise
     * @return RedirectResponse
     */
    public function update(Request $request, Exercise $exercise)
    {
        $this->validate($request, [
            'question' => 'required',
            'questionType' => 'required|numeric|integer|min:1'
        ]);
        $questionType = QuestionType::findOrFail($request->get('questionType'));

        $exercise->question = $request->get('question');
        $exercise->questionType()->associate($questionType);
        $exercise->save();

        return redirect(route('exercise.show', $exercise));
    }

    /**
     * Show the form for deleting the specified resource.
     *
     * @param Exercise $exercise
     * @return View
     */
    public function delete(Exercise $exercise)
    {
        return view('Exercise.delete', compact('exercise'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Exercise $exercise
     * @return RedirectResponse
     */
    public function destroy(Exercise $exercise)
    {
        $exercise->delete();
        return redirect(route('exercise.index'))->with('status', 'Exercise deleted!');
    }
}
