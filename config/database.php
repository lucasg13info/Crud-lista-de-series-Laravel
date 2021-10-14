<?php


// if (getenv('APP_ENV') == 'Homologacao') {
//   '127.0.0.1' = '10.11.132.78';
// }else{
//   '127.0.0.1' = '10.61.228.86';
// }

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
        ],

        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', 'sqest390'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'jarvisdb'),
            'username' => env('DB_USERNAME', 'jarvis'),
            'password' => env('DB_PASSWORD', 'jarvis'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'mysql2' => [
          'driver' => 'mysql',
          'host' => env('DB_HOST_SECOND', 'sqest390'),
          'port' => env('DB_PORT_SECOND', '3306'),
          'database' => env('DB_DATABASE_SECOND', 'licitacoes'),
          'username' => env('DB_USERNAME_SECOND', 'jarvis'),
          'password' => env('DB_PASSWORD_SECOND', 'jarvis'),
          'unix_socket' => env('DB_SOCKET_SECOND', ''),
          'charset' => 'utf8mb4',
          'collation' => 'utf8mb4_unicode_ci',
          'prefix' => '',
          'strict' => true,
          'engine' => null,
        ],

        'mysql3' => [
          'driver' => 'mysql',
          'host' => env('DB_HOST_THIRD', 'sqest390'),
          'port' => env('DB_PORT_THIRD', '3306'),
          'database' => env('DB_DATABASE_THIRD', 'forecastdb'),
          'username' => env('DB_USERNAME_THIRD', 'jarvis'),
          'password' => env('DB_PASSWORD_THIRD', 'jarvis'),
          'unix_socket' => env('DB_SOCKET_THIRD', ''),
          'charset' => 'utf8mb4',
          'collation' => 'utf8mb4_unicode_ci',
          'prefix' => '',
          'strict' => true,
          'engine' => null,
        ],

        'mysql5' => [
          'driver' => 'mysql',
          'host' => env('DB_HOST_FIFTH', 'sqest390'),
          'port' => env('DB_PORT_FIFTH', '3306'),
          'database' => env('DB_DATABASE_FIFTH', 'projtecnicodb'),
          'username' => env('DB_USERNAME_FIFTH', 'jarvis'),
          'password' => env('DB_PASSWORD_FIFTH', 'jarvis'),
          'unix_socket' => env('DB_SOCKET_FIFTH', ''),
          'charset' => 'utf8mb4',
          'collation' => 'utf8mb4_unicode_ci',
          'prefix' => '',
          'strict' => true,
          'engine' => null,
        ],


        'mysql6' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST_SIXTH', 'sqest390'),
            'port' => env('DB_PORT_SIXTH', '3306'),
            'database' => env('DB_DATABASE_SIXTH', 'iara_leitor'),
            'username' => env('DB_USERNAME_SIXTH', 'jarvis'),
            'password' => env('DB_PASSWORD_SIXTH', 'jarvis'),
            'unix_socket' => env('DB_SOCKET_SIXTH', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
          ],


        'pgsql' => [
            'driver' => 'pgsql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST_FOURTH', '10.58.44.181'),
            'port' => env('DB_PORT_FOURTH', '1440'),
            'database' => env('DB_DATABASE_FOURTH', 'PREVENDAS_B2B'),
            'username' => env('DB_USERNAME_FOURTH', 'SBBM6002'),
            'password' => env('DB_PASSWORD_FOURTH', '02@BMB6%S'),
            'charset' => 'utf8',
            'prefix' => '',
        ],
       

        // 'mssql' => [
        //     'driver' => 'sqlsrv',
        //     'host' => env('DB_HOST', '10.58.44.181'),
        //     'port' => env('DB_PORT', '1440'),
        //     'database' => env('DB_DATABASE', 'forge'),
        //     'username' => env('DB_USERNAME', 'forge'),
        //     'password' => env('DB_PASSWORD', ''),
        //     'charset' => 'utf8',
        //     'prefix' => '',
        // ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => 'predis',

        'default' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => 0,
        ],

    ],

];