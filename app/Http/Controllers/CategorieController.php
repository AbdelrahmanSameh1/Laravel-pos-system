<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{

    public function index()
    {
        $categories = categorie::all();
//        $categories = categorie::get();
        return view('backend.categories.index', compact('categories'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        try {

            // first way to insert in the table  (more secure) // in this way we should create ($fillable and $guarded properties in the model)
            categorie::create([
                'name' => ['en' => $request->name_en, 'ar' => $request->name],    // using of spaite package
                'note' => $request->notes,
            ]);
            session()->flash('Add', 'تم اضافة النتج بنجاح');
            return redirect('categories');



            // second way
//            $categories = new categorie();
//            $categories->name = ['en' => $request->name_en, 'ar' => $request->name];    // using of spaite package
//            $categories->note = $request->notes;
//            $categories->save();
//            session()->flash('Add', trans('backend/categories.added successfully'));
//            return redirect('categories');
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function show(categorie $categorie)
    {
        //
    }


    public function edit(categorie $categorie)
    {
        //
    }


    public function update(Request $request, categorie $categorie)
    {
        //
    }


    public function destroy(categorie $categorie)
    {
        //
    }
}
