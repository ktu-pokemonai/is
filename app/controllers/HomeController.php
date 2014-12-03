<?php

class HomeController extends BaseController {

	public function index()
	{
        $articles = Article::whereNotNull('published_on')->orderBy('updated_at', 'DESC')->get();

		return View::make('index', compact('articles'));
	}

    public function article($id)
    {
        $article = Article::findOrFail($id);

        return View::make('article', compact('article'));
    }

    public function contacts()
    {
        $contacts = Contact::all();

        return View::make('contacts', compact('contacts'));
    }

    public function register()
    {
        return View::make('register');
    }

    public function storeRegistration()
    {
        $data = Input::all();

        if(!$data['apartment_id']) {
            $data['apartment_id'] = null;
        }

        Registration::create($data);

        return Redirect::route('home');
    }

}
