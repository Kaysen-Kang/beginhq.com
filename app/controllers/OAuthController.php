<?php 

use OAuth2\OAuth2;
use OAuth2\Token_Access;
use OAuth2\Exception as OAuth2_Exception;

class OAuthController extends \BaseController {

	public function authorize($vendor)
	{
		// custom config for oauth
		$oauth = Config::get('oauth.providers');

		// load config into oauth client
		$provider = OAuth2::provider($vendor, $oauth[$vendor]);

		// redirect user to retrieve access token (provider login page)
	    if (!isset($_GET['code']))
	    {
	        return $provider->authorize();
	    }
	    else
	    {
	        try
	        {
	        	//use return code to create access token
	            $params = $provider->access($_GET['code']);

                $token = new Token_Access(array(
                    'access_token' => $params->access_token
                ));

                //use the access token to get remote user profile
                $profile = $provider->get_user_info($token);
                
                //match a local profile in db
                $auth_user = DB::table('users')->where('vendor', $vendor)->where('user_id', $profile['uid'])->first();

                if ($auth_user)
                {
                	Session::put('auth_user', $auth_user);
                	return Redirect::route('publish.index');
                }
                else
                {
                	Notification::error("You are not authorized to access this page.");
                	return Redirect::route('login');
                }
	        }

	        catch (OAuth2_Exception $e)
	        {
	        	//remote access issue, most likely network problem
	            Notification::error("Error status in OAuth, please retry.");
	            return Redirect::route('login');
	        }
	    }
	}

	public function login()
    {
        return View::make('publish.login');
    }

	public function logout()
	{
		Session::forget('auth_user');
		Notification::success('Log out done.');
		return Redirect::route('login');
	}
}
