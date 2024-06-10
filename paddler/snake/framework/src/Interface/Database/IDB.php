<?php

namespace Snake\Interface\Database;

use Snake\Core\Database\Builder;

interface IDB {
  /**
   * Query the database
   * 
   * @param string $sql
   * @param array $params
   * 
   * @return object
   */
  public static function query(string $sql, array $params = []): object;

  /**
   * Get all data from a table
   * 
   * @param string $table
   * 
   * @return object
   */
  public static function all(string $table): object;

  /**
   * Get data from a table
   * 
   * @param string $table
   * @param array $where
   * 
   * @return object
   */
  public static function get(string $table, array $where = []): object;

  /**
   * Insert a record
   * 
   * @param string $table
   * @param array $data
   * 
   * @return object
   */
  public static function insert(string $table, array $data = []): object;

  /**
   * Update a record
   * 
   * @param string $table
   * @param array $data
   * @param array $where
   * 
   * @return object
   */
  public static function update(string $table, array $data = [], array $where = []): object;

  /**
   * Delete a record
   * 
   * @param string $table
   * @param array $where
   * 
   * @return object
   */
  public static function delete(string $table, array $where = []): object;

  /**
   * Get router instance
   *
   * @return Builder
   */
  public static function builder(): Builder;
}