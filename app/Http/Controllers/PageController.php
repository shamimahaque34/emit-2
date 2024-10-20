<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::all();

        return view('backend.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Page::create([
            'title' => $request->input('title'),
            'is_remote' => $request->input('is_remote'),
            'posting_title' => $request->input('posting_title'),
            'date_opened' => $request->input('date_opened'),
            'job_description' => $request->input('job_description'),
            'work_experience' => $request->input('work_experience'),
            'job_type' => $request->input('job_type'),
            'apply_link' => $request->input('apply_link'),
            'slug' => $request->input('slug'),
            'content' => $request->input('content'),

        ]);

        return redirect()->route('pages.index')->with('success', 'Page created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {

    }

    public function showPage(string $slug){
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('backend.pages.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $page = Page::findOrFail($id);
        return view('backend.pages.create', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $page = Page::findOrFail($id);


        // Update the page
        $page->update([
            'title' => $request->input('title'),
            'is_remote' => $request->input('is_remote'),
            'posting_title' => $request->input('posting_title'),
            'date_opened' => $request->input('date_opened'),
            'job_description' => $request->input('job_description'),
            'work_experience' => $request->input('work_experience'),
            'job_type' => $request->input('job_type'),
            'apply_link' => $request->input('apply_link'),
            'slug' => $request->input('slug'),
            'content' => $request->input('content'),

        ]);

        return redirect()->route('pages.index', $page->id)->with('success', 'Page updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $page = Page::findOrFail($id);
        if ($page)
        {
            $page->delete();
        }
        return redirect()->route('pages.index')->with('success','Page Delete Successfully');
    }



}
