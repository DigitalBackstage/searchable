<?php

namespace DigitalBackstage\Searchable;

final class UnsupportedField extends \OutOfBoundsException implements SearchableException
{
    public static function forSearch(string $field, ?\Throwable $previous = null): self
    {
        return new self(sprintf(
            'Unsupported search field "%s"',
            $field
        ));
    }

    public static function forSort(string $field, ?\Throwable $previous = null): self
    {
        return new self(sprintf(
            'Unsupported sort field "%s"',
            $field
        ));
    }
}
