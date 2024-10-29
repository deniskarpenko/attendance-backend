<?php
declare(strict_types=1);

namespace App\Auth\Domain\ValueObjects;

use App\Auth\Domain\Exceptions\InvalidValueObjectValueException;
use PharIo\Manifest\InvalidEmailException;

class Email
{
    private string $value;

    public function __construct(string $value)
    {
        if(!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidValueObjectValueException(__CLASS__);
        }

        $this->value = $value;
    }
}
