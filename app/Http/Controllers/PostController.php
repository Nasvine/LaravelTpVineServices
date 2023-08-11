<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\User;
use App\Services\CRUD\Create;
use App\Services\CRUD\Delete;
use App\Services\CRUD\Update;
use App\Services\CRUD\VueIndex;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vue_url = "CrudPost.index";
        $model = Post::all();
        $service_index = new VueIndex();

        return $service_index->index_vue_model($model, $vue_url);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $data = $request->validated();
        $model= 'App\Models\Post';
        
        $service_create = new Create();
        return $service_create->create_model($model, $data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request,  Post $post)
    {
        $data = $request->validated();
        $model= 'App\Models\Post';

        $service_update = new Update();
        return $service_update->update_model($model, $post->id, $data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $model= 'App\Models\Post';

        $service_delete = new Delete();
        return $service_delete->delete_model($model, $post->id);
    }
}
