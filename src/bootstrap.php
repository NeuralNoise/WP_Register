<?php 
/**
 * Register, minify and unify CSS and JavaScript resources.
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/WP_Register
 * @since      1.0.4
 */

function includeIfExists($file) {

    if (file_exists($file)) {
        
        return include $file;
    }
}

if ((!$loader = includeIfExists(__DIR__ . '/../vendor/autoload.php')) && 
	(!$loader = includeIfExists(__DIR__ . '/../../../autoload.php'))) {
    
    die(PHP_EOL . 'You must set up the project dependencies, ' .
    	'run the following commands:' . PHP_EOL .
        PHP_EOL . 'curl -s http://getcomposer.org/installer | php' . PHP_EOL .
        PHP_EOL . 'php composer.phar install' . PHP_EOL . PHP_EOL);
}

return $loader;