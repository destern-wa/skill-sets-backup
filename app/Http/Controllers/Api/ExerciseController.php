<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Exercise;
use App\Models\QuestionType;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $exercises = Exercise::all();
        return response()->json($exercises, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'questionType' => 'required|numeric|integer|exists:question_types,id'
        ]);

        $exercise = new Exercise();
        $exercise->question = $request->get('question');
        $exercise->question_type_id = $request->get('questionType');
        $exercise->save();

        return response()->json($exercise, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param Exercise $exercise
     * @return JsonResponse
     */
    public function show(Exercise $exercise)
    {
        return response()->json($exercise, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Exercise  $exercise
     * @return JsonResponse
     */
    public function update(Request $request, Exercise $exercise)
    {
        $this->validate($request, [
            'question' => 'required',
            'questionType' => 'required|numeric|integer|exists:question_types,id'
        ]);

        $exercise->question = $request->get('question');
        $exercise->question_type_id = $request->get('questionType');
        $exercise->save();

        return response()->json($exercise, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
