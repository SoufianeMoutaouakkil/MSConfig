<?php

declare(strict_types=1);

namespace SMConfig\Exception;

use InvalidArgumentException;

final class SMInvalidConfigNameException extends InvalidArgumentException implements SMExceptionInterface
{
    # to simplify implimentation
}
