<?php
/**
 * Main file for application behavior.
 */

namespace App;

require_once __DIR__ . '/vendor/autoload.php';

/**
 * Load dotenv if .env file is present
 */
if ( file_exists( __DIR__ . '/.env.php' ) ) {
	\Arrilot\DotEnv\DotEnv::load( __DIR__ . '/.env.php' );
	\Arrilot\DotEnv\DotEnv::copyVarsToEnv();
}

/**
 * Autoload /src
 */
\A7\autoload( __DIR__ . '/src' );

/**
 * Example usage of an environment variable.
 */
if ( \Arrilot\DotEnv\DotEnv::get( 'EXAMPLE' ) ) {
	// Do something.
}