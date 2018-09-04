<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data = Post::all();
        return response()->json($data);
    }

    public function create(Request $request)
    {
        $data = new Post([
            'title' => $request -> get('title'),
            'content' => $request -> get('content')
        ]);
        $data->save();

        return response()->json('Added succesfully!! :)');
    }

    public function store(Request $request)
    {
        $data = new Post([
            'title' => $request -> get('title'),
            'content' => $request -> get('content')
        ]);
        $data->save();

        return response()->json('Saved succesfully!! :)');
        ])
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Post::find($id);
        return response() -> json($data);
    }

    public function update(Request $request, $id)
    {
        $data = Post::find($id);
        $data -> title = $request -> get('title'),
        $data -> content = $request -> get('content')
        $data->save();

        return response()->json('Updated succesfully!! :)');
    }
    }

    public function destroy($id)
    {
        $data = Post::find($id);
        $data -> delete();

        return response() -> json('Deleted succesfully!! :)');
}
