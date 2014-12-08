<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

    protected function routeSuccess($route, $message, $parameters = [], $status = 302, $headers = [])
    {
        return Redirect::route($route, $parameters, $status, $headers)->with('success', $message);
    }

    protected function routeWarning($route, $message, $parameters = [], $status = 302, $headers = [])
    {
        return Redirect::route($route, $parameters, $status, $headers)->with('warning', $message);
    }

    protected function routeDanger($route, $message, $parameters = [], $status = 302, $headers = [])
    {
        return Redirect::route($route, $parameters, $status, $headers)->with('danger', $message);
    }

    protected function routeInfo($route, $message, $parameters = [], $status = 302, $headers = [])
    {
        return Redirect::route($route, $parameters, $status, $headers)->with('info', $message);
    }

    protected function routeSaveClose($saveRoute, $closeRoute, $message)
    {
        if(Input::has('save_close')) {
            return $this->routeSuccess($closeRoute, $message);
        }

        return $this->routeSuccess($saveRoute, $message);
    }
}
