<?php

namespace DigitalBackstage\Searchable\QueryExpression;

use DigitalBackstage\Searchable\QueryExpression;

/**
 * Converts a query expression into a storage-specific equivalent
 */
interface Converter
{
    public function convert(QueryExpression $queryExpression);

    /**
     * @throws \RuntimeException
     */
    public function supports(QueryExpression $queryExpression): bool;
}
