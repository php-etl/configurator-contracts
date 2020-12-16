<?php declare(strict_types=1);

namespace Kiboko\Contract\ETL\Configurator;

final class InvalidConfigurationException extends \InvalidArgumentException implements ConfigurationExceptionInterface
{
}
