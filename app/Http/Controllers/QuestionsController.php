<?php

namespace App\Http\Controllers;

use App\Http\Requests\AskQuestionRequest;
use App\Models\Question;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index():object
    {
        $questions = Question::with('user')->latest()->paginate(5);
        return view('questions.index',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create():object
    {
        return view('questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AskQuestionRequest $request
     * @return RedirectResponse
     */
    public function store(AskQuestionRequest $request )
    {
        $request->user()->questions()->create($request->only('title','body'));
        $message='Your question has been submitted';
        return redirect()->route('questions.index')->with('success',$message);
    }

    /**
     * Display the specified resource.
     *
     * @param Question $question
     * @return Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Question $question
     * @return Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AskQuestionRequest  $request
     * @param Question $question
     * @return Response
     */
    public function update(AskQuestionRequest $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Question $question
     * @return Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
