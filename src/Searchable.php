<?php

namespace DigitalBackstage\Searchable;

use DigitalBackstage\Searchable\Paginable;

interface Searchable
{
    /**
     * @throws SortNotSupported if a SortedSearchQuery is passed but
     *                          SortableSearchable is not implemented
     * @throws UnsupportedField if an unsupported search field is used in
     *                          the expression or if an unsupported sort field
     *                          is used.
     */
    public function search(SearchQuery $query): Paginable;

    /**
     * @return string[] an array of search fields
     */
    public function supportedSearchFields(): array;
}
