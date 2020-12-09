<?php declare(strict_types=1);

namespace Kiboko\Component\ETL\Flow\Akeneo;

use Kiboko\Component\ETL\Contract\Configurator\ConfigurationExceptionInterface;

final class ConfigurationException extends \RuntimeException implements ConfigurationExceptionInterface
{
}
