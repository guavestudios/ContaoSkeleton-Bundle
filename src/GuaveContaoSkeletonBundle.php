<?php

declare(strict_types=1);

namespace Guave\ContaoSkeletonBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GuaveContaoSkeletonBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
