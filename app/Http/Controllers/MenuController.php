<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Page;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();

        return view('backend.menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menus = Menu::whereNull('parent_id')->get();  // Fetch only parent menus for the dropdown

        $pages = Page::all();
        return view('backend.menus.create', compact('menus','pages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Menu::create([
            'title' => $request->input('title'),
            'url' => $request->input('url'),
            'parent_id' => $request->input('parent_id'),


        ]);


        return redirect()->route('menus.index')->with('success', 'Menu created successfully!');
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
        $menu = Menu::findOrFail($id);
        $menus = Menu::whereNull('parent_id')->get();  // Fetch only parent menus
        $pages = Page::all();
        return view('backend.menus.create', compact('menu', 'menus','pages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $menu = Menu::findOrFail($id);
        $menu->update([
            'title' => $request->input('title'),
            'url' => $request->input('url'),
            'parent_id' => $request->input('parent_id'),

        ]);

        return redirect()->route('menus.index', $menu->id)->with('success', 'Menu updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = Menu::where('id',$id)->first();
        if ($menu)
        {
            $menu->delete();
        }
        return redirect()->route('menus.index')->with('success','Menu Delete Successfully');
    }
}
