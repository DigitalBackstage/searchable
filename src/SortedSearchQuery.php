<?php

namespace DigitalBackstage\Searchable;

interface SortedSearchQuery extends SearchQuery
{
    /**
     * Returns an array that associates a field with a direction:
     * [someField => <a valid SortDirection constant>]
     */
    public function sortFields(): array;
}
