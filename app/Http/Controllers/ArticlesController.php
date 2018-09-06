<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class ArticlesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles= Articles::all();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
        echo "articles".$id;
    }

    public function store(Request $request)
    {


        $data= $request->all();

        Articles::create($data);
        return redirect()->route('articles.index');

    }

    public function destroy($id)
    {
        $article= Artical::find($id);
        $article->delete();
        return redirect()->route('articles.index');

    }

  }
