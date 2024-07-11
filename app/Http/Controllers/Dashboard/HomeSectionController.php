<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.section.home.index', [
            'home' => Home::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        return view('dashboard.section.home.edit',[
            'home' => Home::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'tagline' => 'required',
            'video' => 'required|mimes:mkv,mp4',
        ];

        $validatedData = $request->validate($rules);

        $home = Home::findOrFail($id);

        if ($request->hasFile('video')) {
            
            if ($home->video) {
                Storage::disk('public')->delete($home->video);
            }

           
            $videoPath = $request->file('video')->store('video', 'public');
            $validatedData['video'] = $videoPath;
        } else {
           
            unset($validatedData['video']);
        }

        $home->update($validatedData);

        return redirect('/dashboard/home');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
