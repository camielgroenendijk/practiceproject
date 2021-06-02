<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = blog::all();                       // maakt een varriabele aan met daarin alle attributen uit de database en geeft die door aan de view.
        return view('blogs.index', [
            'blogs' => $blogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = blog::all();
            return view('blogs.create', [
            'blog' => $blog
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $author = Auth::user()->id;  // maakt variabbele aan met daarin de id van de huidige ingelogde user.
        $blog = blog::create([      // creert een attribuut in de tabel met title, content, en user_id.
            'title' =>$request->title,          // pakt de input die in de form op de create page staat aangegeven met de name: title en zorgt dat het opgeslagen word in de database tabel
            'content' =>$request->content,
            'user_id' => $author,
        ]);
        return redirect()->route('blogs.show', $blog->id); // na het submitten word er terug verwezen naar de blog die aangemaakt is door naar het id te verwijzen.


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = blog::FindorFail($id);      // zoekt naar de id en anders word de fout melding 'net' afgehandeld word
        return view('blogs.show', [
            'blog' => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = blog::FindOrFail($id);
        return view('blogs.edit',[
            'blog' => $blog
        ]);
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
        $blog = blog::FindOrFail($id);
        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('blogs.show', $blog->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        blog::destroy($id);
        return redirect()->route('blogs.index');
    }
}
