<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   /*  public function dashboard(){
        return Inertia::render('Content', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'articles' => Article::all(),
        ]);
    } */

    public function create()
    {
        return Inertia::render('ArticleCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validamos los datos
        $validated = $request->validate([
            'title' => 'required|string|max:191',
            'description' => 'required|string|max:191',
        ]);
        Article::create($validated);
        return Redirect::route('dashboard');
    }
}
