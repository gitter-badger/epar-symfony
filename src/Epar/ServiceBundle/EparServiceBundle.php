<?php

namespace Epar\ServiceBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EparServiceBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
