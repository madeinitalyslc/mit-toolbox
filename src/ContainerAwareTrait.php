<?php

namespace MadeInItalySLC\Toolbox;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Trait ContainerAwareTrait
 *
 * @package MadeInItalySLC\Toolbox
 */
trait ContainerAwareTrait
{
    use \Symfony\Component\DependencyInjection\ContainerAwareTrait;

    /**
     * @return ContainerInterface|ContainerBuilder
     */
    public function getContainer() : ContainerInterface
    {
        return $this->container;
    }
}