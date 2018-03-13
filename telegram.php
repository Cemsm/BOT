<?php
class telegram {

  public $token;

  public function __construct($token)
  {
    $this->token = $token ;
  }


  public function getMe()
  {
    $url = 'https://api.telegram.org/bot'.$this->token.'/getMe';
    return file_get_contents($url);
  }
}

 ?>
