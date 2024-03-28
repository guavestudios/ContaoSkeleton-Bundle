<?php

declare(strict_types=1);

namespace Guave\ContaoSkeletonBundle\Tests;

use Guave\ContaoSkeletonBundle\GuaveContaoSkeletonBundle;
use PHPUnit\Framework\TestCase;

class GuaveContaoSkeletonBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new GuaveContaoSkeletonBundle();

        $this->assertInstanceOf('Guave\ContaoSkeletonBundle\GuaveContaoSkeletonBundle', $bundle);
    }
}
