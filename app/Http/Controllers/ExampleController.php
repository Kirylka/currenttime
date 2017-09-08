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

		$response = [];
		$response['vk'] = file_get_contents( 'http://api.vk.com/method/groups.getById?gid=78242229&fields=members_count');
		return $response;
	}

    //
}
