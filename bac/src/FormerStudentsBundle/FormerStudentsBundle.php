<?php

namespace FormerStudentsBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FormerStudentsBundle extends Bundle
{
  public function getParent()
  {
    return 'FOSUserBundle';
  }
}
