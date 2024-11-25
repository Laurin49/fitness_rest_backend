<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExerciseRequest;
use App\Http\Requests\UpdateExerciseRequest;
use App\Http\Resources\ExerciseCollection;
use App\Http\Resources\ExerciseResource;
use App\Models\Exercise;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exercises = QueryBuilder::for(Exercise::class)
          ->paginate();
        return new ExerciseCollection($exercises);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExerciseRequest $request)
    {
        $exercise = Exercise::create($request->validated());
        return ExerciseResource::make($exercise);
    }

    /**
     * Display the specified resource.
     */
    public function show(Exercise $exercise)
    {
        return ExerciseResource::make($exercise);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExerciseRequest $request, Exercise $exercise)
    {
        $exercise->update($request->validated());
        return ExerciseResource::make($exercise);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exercise $exercise)
    {
        $exercise->delete();
        return response()->noContent();
    }
}
