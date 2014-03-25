<?php namespace App\Models; 

class User extends \Eloquent {
	protected $table = 'users';

	protected $guarded = array('id');
	protected $fillable = array('user_id', 'vendor');

	/**
	 * whether use id
	 */
	public static function hasId($id)
	{
		if($user = $this->getById($id))
			return true;
		else
			return false;
	}

	/**
	 * add new User to database
	 * 
	 * @param  array  $data
	 * @return User
	 */
	public static function createUser($data)
	{
		$user = User::create($data);
		return $user;
	}

	/**
	 * get all Users
	 * 
	 * @return array
	 */
	public static function getAll()
	{
		return User::all();
	}

	/**
	 * get User by id if has id
	 * 
	 * @param  int  $id
	 * @return User
	 */
	public static function getById($id)
	{
		return User::where('id', $id)->first();
	}

	/**
	 * get User by ids if has id
	 * 
	 * @param  array  $ids
	 * @return array
	 */
	public static function getByIds($ids)
	{
		return User::whereIn('id', $ids)->get();
	}

	/**
	 * get User by user_id
	 * 
	 * @param  int  $uid
	 * @return array
	 */
	public static function getByUid($uid)
	{
		return User::whereIn('user_id', $uid)->get();
	}

	/**
	 * get User by user_id and vendor
	 * 
	 * @param  int     $uid
	 * @param  string  $vendor
	 * @return User
	 */
	public static function getByUidAndVendor($uid, $vendor)
	{
		return User::where('user_id', $uid)->where('vendor', $vendor)->first();
	}
}