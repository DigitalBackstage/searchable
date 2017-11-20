<?php

namespace DigitalBackstage\Searchable;

abstract class AbstractCompositeExpression implements CompositeExpression
{
    /**
     * @var QueryExpression[]
     */
    private $children;

    public function __construct(iterable $children)
    {
        $this->children = [];
        foreach ($children as $child) {
            $this->addChild($child);
        }
    }

    private function addChild(QueryExpression $queryExpression): void
    {
        $this->children[] = $queryExpression;
    }

    public function getComponents(): iterable
    {
        return $this->children;
    }
}
