<?php

class WebUser extends CWebUser{
 private $_user;
 
 //get the logged user
 function getUser(){
  if( $this->isGuest )
   return;
  if( $this->_user === null ){
   $this->_user = Yii::app()->user;
  }
  return $this->_user;
 }
}
?>