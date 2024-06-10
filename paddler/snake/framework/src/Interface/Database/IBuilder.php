<?php

namespace Snake\Interface\Database;

interface IBuilder {
  /**
   * Get a PDO instance
   *
   * @return object
   */
  public function pdo(): object;

  /**
   * Handle database query
   *
   * @param string $sql
   * @param array $params
   *
   * @return object
   */
  public function query(string $sql, array $params = []): object;

  /**
   * Get all records
   *
   * @param string $table
   *
   * @return object
   */
  public function all(string $table): object;

  /**
   * Get a record
   *
   * @param string $table
   * @param array $where
   *
   * @return object
   */
  public function get(string $table, array $where = []): object;

  /**
   * Insert a record
   *
   * @param string $table
   * @param array $data
   *
   * @return object
   */
  public function insert(string $table, array $data = []): object;

  /**
   * Update a record
   *
   * @param string $table
   * @param array $data
   * @param array $where
   *
   * @return object
   */
  public function update(string $table, array $data = [], array $where = []): object;

  /**
   * Delete a record
   *
   * @param string $table
   * @param array $where
   *
   * @return object
   */
  public function delete(string $table, array $where = []): object;

  /**
   * Get the last inserted ID
   *
   * @return string
   */
  public function lastInsertId(): string;
}