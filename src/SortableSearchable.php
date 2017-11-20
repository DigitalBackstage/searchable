<?php

namespace DigitalBackstage\Searchable;

interface SortableSearchable extends Searchable
{
    /**
     * @return string[] an array of sort fields
     */
    public function supportedSortFields(): array;
}
