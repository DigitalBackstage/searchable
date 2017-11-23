<?php

namespace DigitalBackstage\Searchable\QueryExpression;

use DigitalBackstage\Searchable\QueryExpression;

abstract class AbstractCompositeExpression implements CompositeExpression
{
    /**
     * @var QueryExpression[]
     */
    private $children;

    public function __construct(QueryExpression ...$children)
    {
        $this->children = $children;
    }

    public function getComponents(): iterable
    {
        return $this->children;
    }
}
