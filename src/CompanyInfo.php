<?php

declare(strict_types=1);

namespace ClutchPropertyMgmt\BusinessDomain;

final class CompanyInfo
{
    public function __construct(
        public string $name,
        public string $phone,
        public string $email,
        public Address $address,
    )
    {
    }
}
