<?php

namespace Guave\ContaoSkeletonBundle;

use Guave\ContaoSkeletonBundle\DependencyInjection\GuaveContaoSkeletonExtension;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class GuaveContaoSkeletonBundle extends Bundle
{
    /**
     * Register extension
     *
     * @return Extension
     */
    public function getContainerExtension(): Extension
    {
        return new GuaveContaoSkeletonExtension();
    }
}
