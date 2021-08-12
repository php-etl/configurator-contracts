<?php
/**
 * Diglin GmbH - Switzerland.
 *
 * @author      Sylvain Rayé <support at diglin.com>
 * @category    FWG ETL
 * @copyright   2021 - Diglin (https://www.diglin.com)
 */

namespace Kiboko\Contract\Configurator;

interface ConfiguratorLoaderInterface
{
    public function getLoaderKeys(): array;
}
