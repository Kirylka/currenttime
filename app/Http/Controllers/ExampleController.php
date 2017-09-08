<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

	public function showProfile()
	{
		$pageName = 'currenttimetv';
		$query = 'SELECT fan_count FROM page WHERE username="' . $pageName . '"';
		$response = file_get_contents( 'http://api.facebook.com/restserver.php?method=facebook.fql.query&query=' . rawurlencode( $query ) );
		$xml = simplexml_load_string( $response );
		echo $xml->page->fan_count;
	}

    //
}
