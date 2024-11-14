<?php

declare(strict_types=1);

namespace Asrtal\Serialize\Annotations;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class OutIgnore
{
    public array $groups;

    public function __construct(array|string $groups = [])
    {
        $this->groups = $groups;
    }
}