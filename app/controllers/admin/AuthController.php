<?php namespace App\Controllers\Admin;

use OAuth2\OAuth2;
use OAuth2\Token_Access;
use OAuth2\Exception as OAuth2_Exception;
use Redirect, DB, View, Session;
use App\Models;
use Notification;

class AuthController extends \BaseController {

	public function actionSession($provider)
	{
		$vendor = $provider;

		// support for google
		$provider = OAuth2::provider($provider, array(
        	'id' => '50228612843.apps.googleusercontent.com',
        	'secret' => 'XLhmTpo8qJCb0aR73QSAPd0F',
    	));

	    if ( ! isset($_GET['code']))
	    {
	        return $provider->authorize();
	    }
	    else
	    {
	        try
	        {
	            $params = $provider->access($_GET['code']);

                $token = new Token_Access(array(
                    'access_token' => $params->access_token
                ));

                $user = $provider->get_user_info($token);
                

                $auth_user = DB::table('users')->where('vendor', $vendor)->where('user_id', $user['uid'])->first();

                if ($auth_user)
                {
                	Session::put('auth_user', $auth_user);
                	return Redirect::route('admin.articles.index');
                }
                else
                {
                	Notification::error("You are not an authorized user!");
                	return Redirect::route('admin.login');
                }
	        }

	        catch (OAuth2_Exception $e)
	        {
	            #show_error('That didnt work: '.$e);
	            Notification::error("There's something wrong with Access, please try again!");
	            return Redirect::route('admin.login');
	        }
	    }
	}

	public function getLogin()
    {
        return View::make('admin.auth.login');
    }

	public function getLogout()
	{
		Notification::success('Log out successful');
		Session::forget('admin_user');	
		return Redirect::route('admin.login');
	}
}
