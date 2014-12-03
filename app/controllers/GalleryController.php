<?php

class GalleryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /gallery
	 *
	 * @return Response
	 */
	public function index()
	{
        $images = Image::orderBy('updated_at', 'desc')->get();

        return View::make('gallery.index', compact('images'));
	}

	/**
	 * Display the specified resource.
	 * GET /gallery/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        /** @var Image $image */
		$image = Image::findOrFail($id);

        $file = new \Symfony\Component\HttpFoundation\File\File($image->filename);
        $mime = $file->getMimeType();
        $content = File::get($image->filename);

        return Response::make($content, 200,['Content-type' => $mime]);
	}

}