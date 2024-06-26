<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Beer;
use App\Models\Category;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beers = Beer::orderBy('name')->paginate(20);

        return view('admin.beers.index', compact('beers'));
    }

    public function categoryFilter(Category $category)
    {
        $beers = $category->beers;

        return view('admin.beers.index', compact('beers'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    public function modifyPieces(Request $request, Beer $beer)
    {
        $form_data = $request->all();

        if ($form_data['increment'] == 1) {
            $beer->pieces++;
        } else {
            if ($beer->pieces > 0) {
                $beer->pieces--;
            }
        }

        $beer->update();
        return redirect()->route('admin.beers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
