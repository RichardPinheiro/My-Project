<?php

namespace App\Http\Controllers;

use Session;
use Carbon\Carbon;
use App\Http\Requests;
use App\Models\Article;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function getIndex()
    {
        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }

    public function getShow($id)
    {
        $articles = Article::find($id);

        if (is_null($articles)) {
            return view('errors.503');
        }
        return view('articles.show', compact('articles'));
    }

    public function getCreate()
    {
        $mode = 'create';

        return view('articles.create', compact('mode'));
    }

    public function postStore(ArticleRequest $request)
    {
        Article::create($request->all());
        $mode = 'create';

        Session::flash('message', 'Articles Created Successfully!');

        return redirect()->route('arti.index');
    }

    public function getEdit($id)
    {
        $articles = Article::find($id);
        $mode = 'edit';

        if (is_null($articles)) {
            return view('errors.503');
        }

        return view('articles.edit', compact('articles', 'mode'));
    }

    public function patchUpdate(ArticleRequest $request, $id)
    {
        $articles = Article::find($id);
        $articles->update($request->all());
        $mode = 'edit';

        Session::flash('message', 'Articles Updated Successfully!');

        return redirect()->route('arti.index');
    }
}
