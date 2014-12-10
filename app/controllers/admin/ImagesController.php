<?php

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImagesController extends \BaseController {

	/**
	 * Display a listing of images
	 *
	 * @return Response
	 */
	public function index()
	{
		$images = Image::all();

		return View::make('admin.images.index', compact('images'));
	}

	/**
	 * Show the form for creating a new image
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.images.create');
	}

	/**
	 * Store a newly created image in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Image::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

        /** @var UploadedFile $image */
        $image = $data['image'];
        $dir = storage_path('upload/images');
        $filename = Str::random();

        if(!file_exists($dir)) {
            mkdir($dir, 0755, true);
        }

        try {
            $image->move($dir,$filename);
        } catch (FileException $e) {
            return Redirect::action('admin.images.create');
        }

        $data['filename'] = $dir . DIRECTORY_SEPARATOR . $filename;

		Image::create($data);

        if(Input::has('save_close')) {
            return Redirect::route('admin.images.index');
        }

        return Redirect::action('admin.images.create');
	}

	/**
	 * Show the form for editing the specified image.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$image = Image::find($id);

		return View::make('admin.images.edit', compact('image'));
	}

	/**
	 * Update the specified image in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$image = Image::findOrFail($id);
        $data = Input::all();

		$image->update($data);

        if(Input::has('save_close')){
            return Redirect::route('admin.images.index');
        }

        return Redirect::route('admin.images.edit', [$image->id]);
    }

	/**
	 * Remove the specified image from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Image::destroy($id);

		return Redirect::route('admin.images.index');
	}

}
