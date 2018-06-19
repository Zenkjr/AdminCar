<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $article = Article::all();
        return view('admin.article.list')->with('article', $article);
    }

    public function create()
    {
        return view('admin.article.form')->with([
            'article' => new Article(),
            'title'=>'Viết 1 bài báo mới',
            'action' => '/article/store',
            'method' => 'post'
        ]);
    }

    public function store(request $request)
    {
        $articleNew = new Article();
        $articleNew->article_title = $request->get('article_title');
        $articleNew->description = $request->get('description');
        $articleNew->content = $request->get('content');
        $articleNew->save();
        return redirect('/article/list');
    }

    public function edit($id)
    {
        $articleEdit = Article::find($id);

        if ($articleEdit == null) {
            return 'null';
        } else {
            return view('admin.article.form')->with([
                'article' => $articleEdit,
                'title'=> 'Sửa lại báo',
                'action' => '/article/' . $id . '/update',
                'method' => 'put'
            ]);
        }
    }

    public function update(request $request, $id)
    {
        $article = Article::find($id);
        $article->article_title =  $request->get('article_title');
        $article->description = $request->get('description');
        $article->content = $request->get('content');
        $article->save();

        return redirect('/article/list');
    }

    public function destroy($id)
    {
        Article::destroy($id);
        return redirect('/article/list');
    }
}
