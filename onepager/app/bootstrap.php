<?php

//require autoloading files
require( __DIR__ . "/../vendor/autoload.php" );
require( __DIR__ . "/../src/functions.php" );

//if we are on debug mode run
//whoops to give nice error messages
if(WP_DEBUG){
	//add whoops
	$whoops = new \Whoops\Run;
	$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
	$whoops->register();
}


//create onepager instance
use Pimple\Container;
use ThemeXpert\Onepager\Adapters\WordPress;
use ThemeXpert\Onepager\Onepager;

$onepager = new Onepager(
	new WordPress( new Container, ONEPAGER_PATH, ONEPAGER_URL ),
	new Container
);


//require assets and more
// require( __DIR__ . "/metabox.php" );
require( __DIR__ . "/assets.php" );
require( __DIR__ . "/routes.php" );
require( __DIR__ . "/blocks.php" );
require( __DIR__ . "/settings.php" );
require( __DIR__ . "/init.php" );
