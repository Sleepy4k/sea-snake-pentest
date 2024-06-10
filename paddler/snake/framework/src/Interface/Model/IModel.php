<?php

namespace Snake\Interface\Model;

interface IModel {
  /**
   * Handle method calls
   * 
   * @param string $method
   * @param array $args
   * 
   * @return object
   */
  public static function query(string $sql, array $params = []): object;

  /**
   * Get all data from a table
   * 
   * @return object
   */
  public static function all(): object;

  /**
   * Get data from a table
   * 
   * @param array $where
   * 
   * @return object
   */
  public static function get(array $where = []): object;

  /**
   * Find a record
   * 
   * @param string $id
   * @param array $where
   * 
   * @return object
   */
  public static function find(string $id, array $where = []): object;

  /**
   * Insert a record
   * 
   * @param array $data
   * 
   * @return object
   */
  public static function insert(array $data = []): object;

  /**
   * Update a record
   * 
   * @param string $id
   * @param array $data
   * @param array $where
   * 
   * @return object
   */
  public static function update(string $id, array $data = [], array $where = []): object;

  /**
   * Delete a record
   * 
   * @param string $id
   * @param array $where
   * 
   * @return object
   */
  public static function delete(string $id, array $where = []): object;

  /**
   * Get the table name
   * 
   * @return string
   */
  public static function getTable(): string;
}