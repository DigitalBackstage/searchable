<?php

namespace DigitalBackstage\Searchable\QueryExpression;

use DigitalBackstage\Searchable\QueryExpression;

abstract class AbstractComparisonExpression implements QueryExpression
{
    /**
     * @var string
     */
    private $field;
    private $value;

    public function __construct(string $field, $value)
    {
        $this->field = $field;
        $this->value = $value;
    }

    public function field(): string
    {
        return $this->field;
    }

    public function value()
    {
        return $this->value;
    }
}
