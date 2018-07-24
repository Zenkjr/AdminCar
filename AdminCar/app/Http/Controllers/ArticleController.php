<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $article = Article::all();
        return view('admin.article.list')->with('article', Article::orderBy('id', 'DESC')->paginate(10));
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
//        $file = $request->file('img');
//        if (File::exists($file)) {
//            $file->store('public/uploaded');
//            $articleNew->img = "storage/uploaded/" . $file->hashName();
//        }
        $articleNew->article_title = $request->get('article_title');
        $articleNew->description = $request->get('description');
        $articleNew->image = $request->get('image');
        $articleNew->content = $request->get('content');
        $articleNew->source = $request->get('source');
        $request->session()->flash('add', 'Thêm Mới thành công!');
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
        $article->image = $request->get('image');
        $article->content = $request->get('content');
        $request->session()->flash('update', 'Sửa thành công!');
        $article->save();

        return redirect('/article/list');
    }

    public function destroy($id)
    {
        Article::destroy($id);
    }
    public function destroyCheck(request $request)
    {
//        return redirect('car/list');
        if ($request->isMethod('post')) {
            $arrayCheck = $request->input('checkName');
            foreach ($arrayCheck as $item) {
                Article::destroy($item);
            }
        }
        $request->session()->flash('Delete', 'Xóa thành công!');
        return redirect('/article/list');
    }
}
