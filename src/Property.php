<?php

namespace ClutchPropertyMgmt\BusinessDomain;

use Phpolar\Model\AbstractModel;
use Phpolar\Model\PrimaryKey;
use Phpolar\Validators\Max;
use Phpolar\Validators\MaxLength;
use Phpolar\Validators\Min;
use Phpolar\Validators\Required;

final class Property extends AbstractModel
{
    #[PrimaryKey]
    public int $id;

    #[Required]
    #[MaxLength(200)]
    public string $title;

    #[Required]
    #[MaxLength(2000)]
    public string $description;

    #[Required]
    #[Max(2_000_000_000.)]
    #[Min(1.)]
    public float $rent;

    #[Required]
    #[MaxLength(255)]
    public string $location;

    #[Required]
    #[Max(99.)]
    #[Min(0.)]
    public float $beds;

    #[Required]
    #[Max(99.)]
    #[Min(0.)]
    public float $baths;

    public bool $occupied;

    /**
     * @var PropertyImage[]
     */
    public array $propertyImages;
}
