<?php

namespace App\Http\Controllers;

use App\Services\Response\ApiResponse;
use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return response()->json(ApiResponse::create()
            ->addContent(['todo' => Todo::all()])
            ->get()
        );
    }

    public function addEntry(Request $request)
    {
        $response = ApiResponse::create();
        $task = $request->get('task');
        if (!trim($task)) {
            $response
                ->setIsError(true)
                ->setResponseMessage('Todo entry must not be blank');
        } else {
            $todo = new Todo();
            $todo->fill([
                'text' => $task
            ])->save();
            $response->addContent([
                'todo' => $todo
            ]);
        }

        return response()->json($response->get());
    }

    public function updateEntry(Request $request, $id)
    {
        $response = ApiResponse::create();
        $task = $request->get('task');
        if (!$todo = Todo::find($id)) {
            $response
                ->setIsError(true)
                ->setResponseMessage('Todo entry does not exist');
        } elseif (!trim($task)) {
            $response
                ->setIsError(true)
                ->setResponseMessage('Task must not be blank');
        } else {
            $todo->fill([
                'text' => $task
            ])->save();
            $response->addContent([
                'todo' => $todo
            ]);
        }

        return response()->json($response->get());
    }

    public function removeEntry($id)
    {
        $response = ApiResponse::create();
        if (!$todo = Todo::find($id)) {
            $response
                ->setIsError(true)
                ->setResponseMessage('Todo entry does not exist');
        } else {
            $todo->delete();
            $response->setResponseMessage('Todo entry successfully deleted');
        }

        return response()->json($response->get());
    }
}