<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
use Carbon\Carbon;
use App\Http\Requests\CreateArticleRequest;
use Illuminate\Support\Facades\Auth;
use App\Tag;

class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }

    public function index()
    {
        $articles = Article::latest('published_at')->published()->get();
        $latest = Article::latest()->first();
        return view('articles.index',compact('articles', 'latest'));
    }

    public function show(Article $article)
    {
        return view('articles.show')->with('article', $article);
    }

    public function create()
    {
        $tags = Tag::lists('name', 'id');
        return view('articles.create', compact('tags'));
    }

    public function store(CreateArticleRequest $request)
    {
        $this->createArticle($request);

        // session()->flash('flash_message', 'Your article has been added!');
        // session()->flash('flash_message_important', true);

        return redirect('articles')->with([
            'flash_message' =>  'Your article has been added!',
            'flash_message_important' => true
        ]);
    }

    public function edit(Article $article)
    {
        $tags = Tag::lists('name', 'id');

        return view('articles.edit', compact('article', 'tags'));
    }

    public function update(Article $article, Request $request)
    {
        $article->update($request->all());

        $this->syncTags($article, ($request->input('tag_list')));

        return redirect('articles');
    }

    private function syncTags(Article $article, array $tags)
    {
        $article->tags()->sync($tags);
    }

    private function createArticle(CreateArticleRequest $request)
    {
        dd($request->input('tag_list'));
        $article = Auth::user()->articles()->create($request->all());

        $this->syncTags($article, ($request->input('tag_list')));

        return $article;
    }
}
