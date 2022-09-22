<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('pages.backoffice.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backoffice.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Article();
        $store->titre = $request->titre;
        $store->texte = $request->texte;
        $store->user_id = $request->user_id;
        $store->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        return view('pages.backoffice.article.index', compact('article'));
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
        //
    }

    public function destroy($id)
    {
        $todelete = Article::find($id);
        $todelete->delete();
        return redirect()->back();
    }
}
