<?php

/**
 * MySQL database dump.
 *
 * @author     Ondrej Krajcik (o.krajcik@seznam.cz)
 * @copyright  Copyright (c) 2016 David Grudl
 * @license    New BSD License
 * @version    1.0
 */
class TableFilter
{

	/** @var  string */
	private $table;

	/** @var  string */
	private $condition;

	/** @var  array */
	private $values;

	public function __construct($table, $condition, array $values)
	{
		$this->table = $table;
		$this->condition = $condition;
		$this->values = $values;
	}

	/**
	 * @return string
	 */
	public function getTable()
	{
		return $this->table;
	}

	/**
	 * @return string
	 */
	public function getCondition()
	{
		return $this->condition;
	}

	/**
	 * @return array
	 */
	public function getValues()
	{
		return $this->values;
	}

}
