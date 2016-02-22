<?php

namespace Hotelarstwo\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class HotelarstwoUserBundle extends Bundle
{
	 public function getParent()
    {
        return 'FOSUserBundle';
    }
}
