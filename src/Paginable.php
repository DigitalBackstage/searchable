<?php

namespace DigitalBackstage\Searchable;

/**
 * Returned by a Searchable. This is only a subset of all results (the current
 * page), but should also contain pagination metadata.
 *
 * Page numbers start at 1.
 */
interface Paginable extends \Traversable
{
    /**
     * Should be greater than 1
     */
    public function currentPage(): int;

    /**
     * Should be greater than 1
     */
    public function lastPage(): int;

    /**
     * Should be positive
     */
    public function itemsPerPage(): int;

    /**
     * Should be positive
     */
    public function totalItems(): int;
}
