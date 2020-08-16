<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskListRequest;
use App\TaskList;
use Illuminate\Http\Request;

class TaskListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return TaskList[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        return TaskList::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response|object
     */
    public function store(TaskListRequest $request)
    {
        if ($tasklist = TaskList::create([
            'desk_id' => $request->desk_id,
            'list_name' => $request->list_name,
        ]))
    {
        return response()->json($tasklist)->setStatusCode(201, 'Successful Created');
    }
        else return response()->json()->setStatusCode(400, 'Bad end');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TaskList $tasklist
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response|object
     */
    public function update(TaskList $tasklist, Request $request)
    {
        $tasklist->update($request->all());

        return response()->json($tasklist)->setStatusCode(202, 'Successful Edited');
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
