<?php

namespace App;

interface SQLQueryBuilder
{
public function select($table, $fields);
public function where($field, $value, $operator);
public function limit($start, $offset);
public function join($table, $field1, $field2);
public function orderBy($field, $order);
}

?>