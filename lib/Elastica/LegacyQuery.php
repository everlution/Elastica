<?php
namespace Elastica;

use Elastica\Aggregation\AbstractAggregation;
use Elastica\Exception\InvalidException;
use Elastica\Query\AbstractQuery;
use Elastica\Query\MatchAll;
use Elastica\Query\QueryString;
use Elastica\Script\AbstractScript;
use Elastica\Script\ScriptFields;
use Elastica\Suggest\AbstractSuggest;

/**
 * Elastica query object.
 *
 * Creates different types of queries
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-request-body.html
 */
class LegacyQuery extends Query
{
    /**
     * Sets the filter.
     *
     * @param \Elastica\Query\AbstractQuery $query Query object
     *
     * @return $this
     */
    public function setFilter(AbstractQuery $query)
    {
        return $this->setParam('filter', $query);
    }

    /**
     * Gets the filter object.
     *
     * @return \Elastica\Query\AbstractQuery
     **/
    public function getFilter()
    {
        return $this->getParam('filter');
    }
}
