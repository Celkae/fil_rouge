<?php

namespace FilRougeBundle\Util;

use FilRougeBundle\Entity\Serie;
use FilRougeBundle\Entity\Episode;

class Test
{
    public function negativeTest($value, $entity, $attribute)
    {
      $test = new $entity;
      $set = 'set'.ucfirst($attribute);
      $test->$set($value);
      $get = 'get'.ucfirst($attribute);
      return $test->$get();
    }
}
