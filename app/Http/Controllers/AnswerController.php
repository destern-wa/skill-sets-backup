<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AnswerController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return  View
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Answer $answer
     * @return View
     */
    public function show(Answer $answer)
    {
        $exercise = $answer->exercise;
        return view('Answer.show', compact('answer', 'exercise'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Answer $answer
     * @return View
     */
    public function edit(Answer $answer)
    {
        return view('Answer.edit', compact('answer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Answer $answer
     * @return RedirectResponse
     */
    public function update(Request $request, Answer $answer)
    {
        $this->validate($request, [
            'solution' => 'required',
        ]);
        $answer->solution = $request->get('solution');
        $answer->isCorrect = $request->boolean('isCorrect');
        $answer->save();
        return redirect(route('exercise.show', $answer->exercise))->with('status', 'Answer updated!');
    }

    /**
     * Show the form for deleting the specified resource.
     *
     * @param Answer $answer
     * @return View
     */
    public function delete(Answer $exercise)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param Answer $answer
     * @return RedirectResponse
     */
    public function destroy(Answer $answer)
    {
        //
    }
}
