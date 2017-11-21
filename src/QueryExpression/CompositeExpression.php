<?php

namespace DigitalBackstage\Searchable;

interface CompositeExpression
{
    /**
     * @return QueryExpression[]
     */
    public function getComponents(): iterable;
}
