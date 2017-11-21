<?php

namespace DigitalBackstage\Searchable\QueryExpression;

use DigitalBackstage\Searchable\QueryExpression;

/**
 * This interface allows to build specific and complex expression from other
 * simple expressions, like YearIn('someDateField', 1985);
 */
interface FunctionalExpression extends QueryExpression
{
    public function expression(): QueryExpression;
}
