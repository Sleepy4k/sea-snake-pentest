<?php

return [
  /*
  |--------------------------------------------------------------------------
  | Password Algorithm
  |--------------------------------------------------------------------------
  |
  | The algorithm to use for hashing passwords.
  |
  | Supported: PASSWORD_BCRYPT, PASSWORD_ARGON2I, PASSWORD_ARGON2ID
  |
  */
  'algorithm' => PASSWORD_BCRYPT,

  /*
  |--------------------------------------------------------------------------
  | Password Cost
  |--------------------------------------------------------------------------
  |
  | The algorithmic cost that should be used.
  |
  */
  'cost' => 10,

  /*
  |--------------------------------------------------------------------------
  | Password Salt
  |--------------------------------------------------------------------------
  |
  | The salt to use for hashing passwords.
  |
  */
  'salt' => 50,
];
