<?php

namespace MadeInItalySLC\Toolbox\Contract;

/**
 * Interface ServiceProviderInterface
 *
 * @package MadeInItalySLC\WP\Contract
 */
interface ServiceProviderInterface
{
    /**
     * @param ContainerInterface $container
     * @return mixed
     */
    public function registerServiceProvider(ContainerInterface $container);
}