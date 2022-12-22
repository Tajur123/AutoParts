<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Resources\CategoryResource;

use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return new CategoryResource(true, 'Semua Data Category Berhasil Ditampilkan', $category);
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return new CategoryResource(true, 'Detail Category Berhasil Ditampilkan', $category);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
           'category' => 'required',
           'parent' => 'required', 
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }
        
        $category = Category::create([
            'category' => $request->category,
            'parent' => $request->parent,
        ]);

        return new CategoryResource(true, 'Data Category Berhasil Ditambahkan', $category);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required',
            'parent' => 'required', 
         ]);
         if($validator->fails()){
            return response()->json($validator->errors(),422);
        }
        $category = Category::findOrFail($id)->update([
            'category' => $request->category,
            'parent' => $request->parent,
        ]);

        return new CategoryResource(true, 'Data Category Berhasil Diubah', $category);
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return new CategoryResource(true, 'Data Category Berhasil Dihapus', $category);
    }
}
