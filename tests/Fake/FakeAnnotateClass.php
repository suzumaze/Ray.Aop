<?php

namespace Ray\Aop;

use Ray\Aop\FakeMarker;
use Ray\Aop\FakeMarker2;

/**
 * @Ray\Aop\FakeResource
 */
class FakeAnnotateClass
{
    public $a = 0;

    /**
     * @Ray\Aop\FakeMarker3
     * @FakeMarker2
     * @FakeMarker
     */
    public function getDouble($a)
    {
        return $a * 2;
    }
}
