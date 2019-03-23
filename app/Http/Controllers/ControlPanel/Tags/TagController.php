<?php

namespace App\Http\Controllers\ControlPanel\Tags;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Tag[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        $tags = Tag::all();

        if (\request()->expectsJson()) return $tags;

        return view('controlPanel.tags.index')->withTags($tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required']);

        $tag = Tag::create($request->only(['name']));

        return $tag;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Tag $tag
     * @return Tag
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Tag $tag)
    {
        $this->validate($request, ['name' => 'required']);

        $tag->update($request->only('name'));

        return $tag;
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
