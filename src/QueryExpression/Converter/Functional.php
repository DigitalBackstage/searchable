<?php

namespace DigitalBackstage\Searchable\QueryExpression\Converter;

use DigitalBackstage\Searchable\QueryExpression;

final class Functional implements QueryExpression\Converter
{
    /**
     * @var Chain
     */
    private $chainConverter;

    public function __construct(Chain $chainConverter)
    {
        $this->chainConverter = $chainConverter;
    }

    public function convert(QueryExpression $queryExpression)
    {
        return $this->chainConverter->convert($queryExpression->expression());
    }

    public function supports(QueryExpression $queryExpression): bool
    {
        return $queryExpression instanceof FunctionalExpression;
    }
}
