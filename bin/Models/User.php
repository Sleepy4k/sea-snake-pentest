<?php

namespace Bin\Models;

class User extends Model {
  /**
   * The table name
   *
   * @var string
   */
  protected static $table = 'users';

  /**
   * The primary key
   *
   * @var string
   */
  protected static $primaryKey = 'id';
}
