<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
  /**
  * Get the webpage the content belongs to
  *
  * @param  string  $value
  * @return string
  */
 public function getWebpageAttribute($value)
 {
     return $value === 'what'?'Wat is het?':'Waar terecht?';
 }

}
