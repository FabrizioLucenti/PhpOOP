<?php

class HtmlString
{

  private $string;

  public function setString($newString)
  {
    return $this->string = $newString;
  }

  public function getString()
  {
    return $this->string;
  }

  public function getBoldString()
  {
    return '<strong>' . $this->string . '</strong>';
  }

  public function getItalicString()
  {
    return '<i>' . $this->string . '</i>';
  }

  public function getItalicBoldString()
  {
    return '<strong><i>' . $this->string . '</i></strong>';
  }

  public function __construct($string)
  {
    $this->string = $string;
  }
}
