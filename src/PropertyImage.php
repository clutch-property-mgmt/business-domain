<?php

namespace ClutchPropertyMgmt\BusinessDomain;

use Phpolar\Model\AbstractModel;
use Phpolar\Model\PrimaryKey;
use Phpolar\Validators\Max;
use Phpolar\Validators\MaxLength;
use Phpolar\Validators\Min;
use Phpolar\Validators\Required;

final class PropertyImage extends AbstractModel
{
    #[PrimaryKey]
    public int $id;

    #[Required]
    #[Max(PHP_INT_MAX)]
    #[Min(0)]
    public int $property_id;

    #[Required]
    #[MaxLength(255)]
    public string $url;

    #[Required]
    #[MaxLength(100)]
    public string $mime_type;

    #[Required]
    public bool $featured;
}
