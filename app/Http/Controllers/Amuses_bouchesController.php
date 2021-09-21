<?php

namespace App\Http\Controllers;
use App\Models\Amuses_bouches;

use Illuminate\Http\Request;

class Amuses_bouchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $amuses_bouches = Amuses_bouches::all();
    
            return view('recipe/Plaisir_salées/amuses_bouches', compact('amuses_bouches'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form/Plaisir_salées/form_amuses_bouches');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required|max:255',
            'origine' => 'required',
            'ingredient' => 'required|max:255',
            'histoire' => 'required',

                        
        ]);

        
        
        Amuses_bouches::create($request->all());
    
        return redirect('/amuses_bouches')->with('success', 'Recette créer avec succèss');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function uploadVideo(Request $request)
   {
      $this->validate($request, [
         
         'video' => 'required|file|mimetypes:video/mp4',
   ]);
   $video = new Amuses_bouches;

   if ($request->hasFile('video'))
   {
     $path = $request->file('video')->store('videos', ['disk' =>      'my_files']);
    $video->video = $path;
   }
   $video->save();
   
  }

}
