<?php


/**
 * Base class that represents a query for the 'reparticion' table.
 *
 * 
 *
 * @method     ReparticionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ReparticionQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 *
 * @method     ReparticionQuery groupById() Group by the id column
 * @method     ReparticionQuery groupByDescripcion() Group by the descripcion column
 *
 * @method     ReparticionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ReparticionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ReparticionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ReparticionQuery leftJoinAfiliado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Afiliado relation
 * @method     ReparticionQuery rightJoinAfiliado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Afiliado relation
 * @method     ReparticionQuery innerJoinAfiliado($relationAlias = null) Adds a INNER JOIN clause to the query using the Afiliado relation
 *
 * @method     Reparticion findOne(PropelPDO $con = null) Return the first Reparticion matching the query
 * @method     Reparticion findOneOrCreate(PropelPDO $con = null) Return the first Reparticion matching the query, or a new Reparticion object populated from the query conditions when no match is found
 *
 * @method     Reparticion findOneById(int $id) Return the first Reparticion filtered by the id column
 * @method     Reparticion findOneByDescripcion(string $descripcion) Return the first Reparticion filtered by the descripcion column
 *
 * @method     array findById(int $id) Return Reparticion objects filtered by the id column
 * @method     array findByDescripcion(string $descripcion) Return Reparticion objects filtered by the descripcion column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseReparticionQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseReparticionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Reparticion', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ReparticionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     ReparticionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ReparticionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ReparticionQuery) {
            return $criteria;
        }
        $query = new ReparticionQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Reparticion|Reparticion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ReparticionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ReparticionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   Reparticion A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `DESCRIPCION` FROM `reparticion` WHERE `ID` = :p0';
        try {
            $stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Reparticion();
            $obj->hydrate($row);
            ReparticionPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Reparticion|Reparticion[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Reparticion[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return ReparticionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ReparticionPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ReparticionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ReparticionPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReparticionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(ReparticionPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByDescripcion('fooValue');   // WHERE descripcion = 'fooValue'
     * $query->filterByDescripcion('%fooValue%'); // WHERE descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReparticionQuery The current query, for fluid interface
     */
    public function filterByDescripcion($descripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descripcion)) {
                $descripcion = str_replace('*', '%', $descripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReparticionPeer::DESCRIPCION, $descripcion, $comparison);
    }

    /**
     * Filter the query by a related Afiliado object
     *
     * @param   Afiliado|PropelObjectCollection $afiliado  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   ReparticionQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByAfiliado($afiliado, $comparison = null)
    {
        if ($afiliado instanceof Afiliado) {
            return $this
                ->addUsingAlias(ReparticionPeer::ID, $afiliado->getReparticionId(), $comparison);
        } elseif ($afiliado instanceof PropelObjectCollection) {
            return $this
                ->useAfiliadoQuery()
                ->filterByPrimaryKeys($afiliado->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAfiliado() only accepts arguments of type Afiliado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Afiliado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ReparticionQuery The current query, for fluid interface
     */
    public function joinAfiliado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Afiliado');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Afiliado');
        }

        return $this;
    }

    /**
     * Use the Afiliado relation Afiliado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AfiliadoQuery A secondary query class using the current class as primary query
     */
    public function useAfiliadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAfiliado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Afiliado', 'AfiliadoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Reparticion $reparticion Object to remove from the list of results
     *
     * @return ReparticionQuery The current query, for fluid interface
     */
    public function prune($reparticion = null)
    {
        if ($reparticion) {
            $this->addUsingAlias(ReparticionPeer::ID, $reparticion->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseReparticionQuery