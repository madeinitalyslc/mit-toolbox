<?php

namespace MadeInItalySLC\Toolbox;

use MadeInItalySLC\Toolbox\Contract\ApplicationInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class Application
 *
 * @package MadeInItalySLC\Toolbox
 */
class Application implements ApplicationInterface
{
    use ContainerAwareTrait;

    /**
     * Application constructor.
     *
     * @param ContainerInterface|null $container
     */
    public function __construct(ContainerInterface $container = null)
    {
        if (null === $container) {
            $container = new ContainerBuilder();
        }

        $this->setContainer($container);
    }
}