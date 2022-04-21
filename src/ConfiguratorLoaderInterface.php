<?php
/**
 * Diglin GmbH - Switzerland.
 *
 * @author      Sylvain Rayé <support at diglin.com>
 * @copyright   2021 - Diglin (https://www.diglin.com)
 */

namespace Kiboko\Contract\Configurator;

interface ConfiguratorLoaderInterface
{
    public function getLoaderKeys(): array;
}
