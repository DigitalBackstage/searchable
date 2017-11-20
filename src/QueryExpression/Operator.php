<?php

namespace DigitalBackstage\Searchable\QueryExpression;

use Greg0ire\Enum\AbstractEnum;

final class Operator extends AbstractEnum
{
    public const LIKE = 'like';
    public const EQUALS = 'eq';
}
