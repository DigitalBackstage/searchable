<?php

namespace spec\DigitalBackstage\Searchable;

use DigitalBackstage\Searchable\QueryExpression;
use DigitalBackstage\Searchable\SearchQuery;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SearchQuerySpec extends ObjectBehavior
{
    function let(QueryExpression $queryExpression)
    {
        $this->beConstructedWith($queryExpression);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(SearchQuery::class);
    }

    function it_throws_on_invalid_page_size(QueryExpression $queryExpression)
    {
        $this->shouldThrow(\InvalidArgumentException::class)
            ->during('__construct', [$queryExpression, -1]);
        $this->shouldThrow(\InvalidArgumentException::class)
            ->during('__construct', [$queryExpression, 1, -1]);
    }
}
