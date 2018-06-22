<?php

namespace MadeInItalySLC\Toolbox\ServiceProvider;

use Illuminate\Config\Repository;
use MadeInItalySLC\Toolbox\Contract\ContainerInterface;
use MadeInItalySLC\Toolbox\Contract\ServiceProviderInterface;

/**
 * Class RepositoryServiceProvider
 *
 * @package MadeInItalySLC\Toolbox\ServiceProvider
 */
class RepositoryServiceProvider implements ServiceProviderInterface
{
    /**
     * @param ContainerInterface $container
     * @return RepositoryServiceProvider
     */
    public function register(ContainerInterface $container) : self
    {
        $container->set('repository', $container->factory());

        return $this;
    }
}