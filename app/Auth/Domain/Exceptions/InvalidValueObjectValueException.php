<?php
declare(strict_types=1);

namespace App\Auth\Domain\Exceptions;

class InvalidValueObjectValueException extends \Exception
{
    public function __construct(string $valueObject)
    {
        $message = sprintf('Invalid value provided for "%s"', $valueObject);
        parent::__construct($message, 422);
    }
}
