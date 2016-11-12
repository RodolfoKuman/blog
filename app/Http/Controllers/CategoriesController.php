<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CategoryRequest;
use App\Category;
use Laracasts\Flash\Flash;

class CategoriesController extends Controller
{


  public function index()
  {
  $categories = Category::orderBy('id', 'ASC')->paginate(5);
   return view('admin.categories.index')->with('categories',$categories);
   //return view('admin.users.index2', ['users' => $users]);
  }

    public function create()
    {
      return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {
      $category = new Category($request->all());
      $category->save();
      flash('La categoria ' . $category->name . ' ha sido creada con éxito', 'success');
      return redirect()->route('categories.index');
    }

    public function edit($id)
    {
      $category = Category::find($id);
      return view('admin.categories.edit')->with('category',$category);
    }

    public function update(Request $request, $id)
    {
      $category = Category::find($id);
      $category->fill($request->all());
      $category->save();

      flash('La categoria ' . $category->name  . ' ha sido actualizada ');
      return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
      $category = Category::find($id);
      $category->delete();
      flash('La categoria ' . $category->name . ' ha sido borrada con éxito');
      return redirect()->route('categories.index');
    }


}
