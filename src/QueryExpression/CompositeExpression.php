<?php

namespace DigitalBackstage\Searchable\QueryExpression;

use DigitalBackstage\Searchable\QueryExpression;

interface CompositeExpression extends QueryExpression
{
    /**
     * @return QueryExpression[]
     */
    public function getComponents(): iterable;
}
