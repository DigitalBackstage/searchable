<?php

namespace DigitalBackstage\Searchable\Doctrine;

use DigitalBackstage\Searchable\Paginable;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * Adapts doctrine paginator to Searchable
 */
final class PaginatorAdapter implements \IteratorAggregate, Paginable
{
    /**
     * @var Paginator
     */
    private $paginator;

    /**
     * @var integer
     */
    private $firstResult;

    /**
     * @var integer
     */
    private $maxResults;

    /**
     * @var integer
     */
    private $totalItems;

    /**
     * @var \Iterator
     */
    private $iterator;

    public function __construct(Paginator $paginator)
    {
        $this->paginator = $paginator;
        $query = $paginator->getQuery();
        $this->firstResult = $query->getFirstResult();
        $this->maxResults = $query->getMaxResults();
        $this->totalItems = count($paginator);
    }

    /**
     * {@inheritDoc}
     */
    public function currentPage(): int
    {
        return floor($this->firstResult / $this->maxResults) + 1;
    }

    /**
     * {@inheritDoc}
     */
    public function lastPage(): int
    {
        return ceil($this->totalItems / $this->maxResults) ?: 1;
    }

    /**
     * {@inheritDoc}
     */
    public function itemsPerPage(): int
    {
        return $this->maxResults;
    }

    /**
     * {@inheritDoc}
     */
    public function totalItems(): int
    {
        return $this->totalItems;
    }

    public function getIterator(): \Iterator
    {
        if (!$this->iterator) {
            $this->iterator = $this->paginator->getIterator();
        }

        return $this->iterator;
    }
}
