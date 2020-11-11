<?php

namespace App\Http\Controllers;

use App\Type;
use App\User;
use App\Occupation;
use App\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PublicationController extends Controller
{
    private $occupation;

    private $type;

    public function __construct()
    {
        $this->middleware('auth', ['exept' => ['show']]);
        $this->occupation = Occupation::all();
        $this->type = Type::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications = Publication::where('user_id', auth()->user()->id)->paginate(5);
        return view('publications.index', compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $occupations = $this->occupation;
        $types = $this->type;
        return view('publications.create', compact('occupations', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'text' => 'required|string',
            'telephone' => 'required|integer',
            'occupation' => 'required|integer',
            'type' => 'required|integer',
            'image' => 'image|required',
        ]);

        $image = $request['image']->store('publications_img', 'public');
        $img = Image::make(public_path("storage/{$image}"))->resize(800, 400);
        $img->save();

        Publication::create([
            'title' => $data['title'],
            'text' => $data['text'],
            'telephone' => $data['telephone'],
            'image' => $image,
            'occupation_id' => $data['occupation'],
            'type_id' => $data['type'],
            'user_id' => Auth::user()->id
        ]);

        return redirect(route('publicationsIndex'));
    }

    /**
     * Display the specified resource.
     *  
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show(Publication $publication)
    {
        return view('publications.show', compact('publication'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit(Publication $publication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publication $publication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publication $publication)
    {
        //
    }
}
