<?php

namespace Innova\NonDigitalResourceBundle;

use Claroline\CoreBundle\Library\PluginBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Claroline\KernelBundle\Bundle\AutoConfigurableInterface;
use Claroline\KernelBundle\Bundle\ConfigurationProviderInterface;
use Claroline\KernelBundle\Bundle\ConfigurationBuilder;

/**
 * Bundle class.
 */
class InnovaNonDigitalResourceBundle extends PluginBundle implements AutoConfigurableInterface, ConfigurationProviderInterface
{
    public function supports($environment)
    {
        return true;
    }

    public function getConfiguration($environment)
    {
        $config = new ConfigurationBuilder();

        return $config->addRoutingResource(__DIR__ . '/Resources/config/routing.yml', null, 'innova_non_digital');
    }

    public function suggestConfigurationFor(Bundle $bundle, $environment)
    {
        
    }
}