<?php

declare(strict_types=1);

namespace Guave\ContaoSkeletonBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Guave\ContaoSkeletonBundle\GuaveContaoSkeletonBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(GuaveContaoSkeletonBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
