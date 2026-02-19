<?php

declare(strict_types=1);

namespace ClutchPropertyMgmt\BusinessDomain;

final class Address
{
    public function __construct(
        public readonly string $addressLine,
        public readonly string $city,
        public readonly string $state,
        public readonly string $zipCode,
    )
    {
    }
}
