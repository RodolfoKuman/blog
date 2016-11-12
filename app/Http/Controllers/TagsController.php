<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Http\Requests;
use App\Tag;
use Laracasts\Flash\Flash;

class TagsController extends Controller
{

    public function index()
    {
      $tags = Tag::orderBy('id', 'DESC')->paginate(5);
      return view('admin.tags.index')->with('tags',$tags);
    }

    public function create()
    {
      return view('admin.tags.create');
    }

    public function store(TagRequest $request)
    {
      $tag = new Tag($request->all());
      $tag->save();

      flash('El tag '. $tag->name . ' a sido creado con éxito', 'success');
      return redirect()->route('tags.index');

    }


    public function show($id)
    {

    }

    public function edit($id)
    {
      $tag = Tag::find($id);
      return view('admin.tags.edit')->with('tag',$tag);
    }

    public function destroy($id)
    {
      $tag = Tag::find($id);
      $tag->delete();
      flash('La etiqueta '. $tag->name . ' ha sido borrada','success');
      return redirect()->route('tags.index');
    }

    public function update(Request $request, $id)
    {
      $tag = Tag::find($id);
      $tag->fill($request->all());
      $tag->save();

      flash("La etiqueta ". $tag->name. " a sido actualizado", "success");
      return redirect()->route('tags.index');
    }
}
