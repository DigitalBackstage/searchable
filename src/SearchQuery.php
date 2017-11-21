<?php

namespace DigitalBackstage\Searchable;

final class SearchQuery
{
    private $expression;
    private $pageSize;
    private $pageNumber;

    public function __construct(
        QueryExpression $expression,
        int $pageSize = 5,
        int $pageNumber = 1
    ) {
        $this->expression = $expression;
        if ($pageSize < 1) {
            throw new \InvalidArgumentException(sprintf(
                'The page size should greater than 1, but "%d" was given',
                $pageSize
            ));
        }
        $this->pageSize = $pageSize;
        if ($pageNumber < 1) {
            throw new \InvalidArgumentException(sprintf(
                'The page number should be greater than 1, but "%d" was given',
                $pageNumber
            ));
        }
        $this->pageNumber = $pageNumber;
    }

    public function expression(): QueryExpression
    {
        return $this->expression;
    }

    /**
     * @return An integer >= 1.
     */
    public function pageSize(): int
    {
        return $this->pageSize;
    }

    /**
     * @return An integer >= 1.
     */
    public function pageNumber(): int
    {
        return $this->pageNumber;
    }
}
