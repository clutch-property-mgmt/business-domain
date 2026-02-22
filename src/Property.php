<?php

namespace ClutchPropertyMgmt\BusinessDomain;

final class Property
{
    public int $id;
    public string $title;
    public string $description;
    public int $rent;
    public string $location;
    public float $beds;
    public float $baths;
    public bool $occupied;
    /**
     * @var PropertyImage[]
     */
    public array $propertyImages;
}
