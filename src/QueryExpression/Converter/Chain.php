<?php

namespace DigitalBackstage\Searchable\QueryExpression\Converter;

use DigitalBackstage\Searchable\QueryExpression;

final class Chain implements QueryExpression\Converter
{
    private $children = [];

    public function attach(QueryExpression\Converter $converter): void
    {
        $this->children[] = $converter;
    }

    public function supports(QueryExpression $queryExpression): bool
    {
        foreach ($this->children as $child) {
            if ($child->supports($queryExpression)) {
                return true;
            }
        }

        throw new \RuntimeException(sprintf(
            'Expression "%s" is not supported yet',
            get_class($queryExpression)
        ));
    }

    public function convert(QueryExpression $queryExpression)
    {
        foreach ($this->children as $child) {
            if ($child->supports($queryExpression)) {
                return $child->convert($queryExpression);
            }
        }
    }
}
