<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
/*
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	public function authenticate()
	{
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
			'readerA'=>'123',
			'authorB'=>'123',
			'editorC'=>'123',
			'adminD'=>'123',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
*/
	private $_id;
	
	/**
	 * Authenticates a user.
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$record = User::model()->findByAttributes(array('username' => $this->username));
		if($record === null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		// todo: use crypt($password) for (more) security
		else if($record->password !== $this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
			$this->_id = $record->id;
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}
	/** Overwriting the getId() function because the last one
	* returns the username.
	* @return the id of the current user.
	**/	
	public function getId()
	{
		return $this->_id;
	}
}
