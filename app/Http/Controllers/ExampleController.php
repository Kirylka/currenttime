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
		$response['vk'] = json_decode($response['vk'])->response[0]->members_count;
		$response['youtube'] = file_get_contents( 'https://www.googleapis.com/youtube/v3/channels?key=AIzaSyCVdq0LYftjXscOS8JK0q37M9uJ2KZkegQ&part=statistics&id=UCLXo7UDZvByw2ixzpQCufnA');
		$response['youtube'] = json_decode($response['youtube'])->items[0]->statistics->subscriberCount;
		return $response;
	}

    //
}
