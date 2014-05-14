<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    
    private $_id;
    
	/**
	 * Authenticates a user.
	 * @return boolean whether authentication succeeds.
	 */
	 public function authenticate()
    {
        $username=strtolower($this->username);
        $user=User::model()->find('LOWER(username)=?',array($username));
        Yii::log('user:'.$this->username.'pass'.$this->password,'warning');
        if($user===null)
            {Yii::log('username invalid','warning');
            $this->errorCode=self::ERROR_USERNAME_INVALID;
            }
        else if($user->password!=$this->password)
            { Yii::log('pass invalid','warning');
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
            }
        else
        {
            Yii::log('ok auth','warning');
            $this->_id=$user->id;
            $this->username=$user->username;
            $this->errorCode=self::ERROR_NONE;
        }
        Yii::log('error code'.$this->errorCode,'warning');
        return $this->errorCode==self::ERROR_NONE;
    }
    
      public function getId()
    {
        return $this->_id;
    }
}