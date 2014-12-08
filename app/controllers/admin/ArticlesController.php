<?php

class ArticlesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /articles
	 *
	 * @return Response
	 */
	public function index()
	{
        $articles = Article::orderBy('updated_at', 'desc')->get();

		return View::make('admin.articles.index', compact('articles'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /articles/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.articles.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /articles
	 *
	 * @return Response
	 */
	public function store()
	{
        $article = Article::create(Input::all());

        $validator = Validator::make($data = Input::all(), Article::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        if(Input::has('publish')) {
            $article->publish();
        } else {
            $article->unpublish();
        }

        return $this->routeSaveClose('admin.articles.edit', 'admin.articles.index', 'Article created successfully');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /articles/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$article = Article::findOrFail($id);

        return View::make('admin.articles.edit', compact('article'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /articles/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        /** @var Article $article */
		$article = Article::findOrFail($id);
        $data = Input::all();

        $validator = Validator::make($data = Input::all(), Article::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $article->update($data);
        if(Input::has('publish')) {
            $article->publish();
        } else {
            $article->unpublish();
        }

        return $this->routeSaveClose('admin.articles.edit', 'admin.articles.index', 'Article updated successfully');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /articles/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        /** @var Article $article */
		$article = Article::findOrFail($id);

        $article->delete();

        return $this->routeSuccess('admin.articles.index', 'Article deleted successfully');
	}

}