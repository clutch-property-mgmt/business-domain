<?php

namespace ClutchPropertyMgmt\BusinessDomain;

final class Property
{
    public string $id;
    public string $title;
    public string $description;
    public int $rent;
    public string $location;
    public float $beds;
    public float $bath;
    public bool $occupied;
    /**
     * @var PropertyImage[]
     */
    public array $propertyImages;
}
