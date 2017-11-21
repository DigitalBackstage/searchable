<?php

namespace DigitalBackstage\Searchable\QueryExpression;

class Match
{
    /**
     * @var string
     */
    private $field;
    private $operator;
    private $value;

    public function __construct(string $field, string $operator, $value)
    {
        $this->field = $field;
        Operator::assertValidValue($operator);
        $this->operator = $operator;
        $this->value = $value;
    }

    public function field(): string
    {
        return $this->field;
    }

    public function operator(): string
    {
        return $this->operator;
    }

    public function value()
    {
        return $this->value;
    }
}
