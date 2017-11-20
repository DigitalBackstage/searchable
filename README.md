# Searchable

Provides interfaces that allow to search repositories implemented in our
libraries in a standardized way.

It defines the following interfaces:

## `DigitalBackstage\Searchable\Paginable`

This one defines the interface for what a `Searchable` repository should return
when queried. It should be immutable, provide a subset of all available items,
and pagination information, namely:

- the number of the current page;
- the number of the last page;
- the number of items per page;
- the number of available items.

Page numbers start from 1. It extends `\Traversable`, but not `\Countable`,
because that would be very confusing: should it return the number of page? Of
available items? Of items in the current page?

## `DigitalBackstage\Searchable\SearchQuery`

`Searchable` repositories are queried with this object. It consists in an
expression, which should be translated to DQL, SQL or JSON by the repository,
and should provide information about the desired page number and page size.

## `DigitalBackstage\Searchable\QueryExpression`

This represents an expression, and has several implementations. Repositories
should list which implementations they support.

## `DigitalBackstage\Searchable\SortedSearchQuery`

If the client wants to specify a sort order other than the default one, it must
implement `SortedSearchQuery`.

## `DigitalBackstage\Searchable\Searchable`

A repository of objects. Must be queried with a `SearchQuery`, and must return a
`Paginable`. Must advertise what fields it supports for querying. Should throw
`PageOutOfRange`, and `UnsupportedSearchField` when appropriate.
