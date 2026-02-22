<?php

namespace ClutchPropertyMgmt\BusinessDomain;

final class PropertyImage
{
    public int $id;
    public int $property_id;
    public string $url;
    public string $mime_type;
    public bool $featured;
}
