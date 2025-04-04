<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublicationRequest;
use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publications = Publication::latest()->paginate();
        return view('publication.index',compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('publication.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PublicationRequest $request)
    {
        $formFields=$request->validated();
        if($request->hasFile('image')){
            $formFields['image'] = $this->uploadImage($request);
        }
        Publication::create($formFields);
        return to_route('publications.index')->with('success','La publication est bien ajouter');;

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
    public function edit(Publication $publication)

    {

        return view('publication.edit',compact('publication'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PublicationRequest $request, Publication $publication)
    {
        $formFields=$request->validated();
        if($request->hasFile('image')){
            $formFields['image'] = $this->uploadImage($request);
        };
         $publication->fill($formFields)->save();
        return to_route('publications.index')->with('success','La publication est bien modifier');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publication $publication)
    {
        $publication->delete();
        return to_route('publications.index')->with('success','La publication ete supprimer');

    }
    private function uploadImage(PublicationRequest $request){
        return $request->file('image')->store('publication', 'public');

    }
}
