<?php

namespace Codinglabs\FeatureFlags\Facades;

use Illuminate\Support\Facades\Facade;
use Codinglabs\FeatureFlags\Enums\FeatureState;

/**
 * @see \Codinglabs\Skeleton\Skeleton
 */
class Skeleton extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Codinglabs\Skeleton\Skeleton::class;
    }
}
