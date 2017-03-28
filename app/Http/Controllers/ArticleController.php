<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Validation\UnauthorizedException;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $articles = Article::paginate();

        return view('article.index')->with(compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:1|max:50',
            'content' => 'required|min:1|max:255',
        ]);

        $data = $request->only(['title', 'content']);
        $data['user_id'] = Auth::user()->id;

        Article::create($data);

        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $article = Article::find($id);

        return view('article.show')->with(compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $article = Article::find($id);

        return view('article.edit')->with(compact('article'));
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
        $article = Article::find($id);

        $article->fill($request->all());

        $article->save();

        return redirect()->route('article.show', $article->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return array
     */
    public function destroy($id)
    {
        $article = Article::find($id);

        if (Auth::user()->can('update', $article)) {
            Article::where('id', '=', $id)->delete();
        } else {
            throw new UnauthorizedException();
        }

        return [
            'success',
        ];
    }
}
