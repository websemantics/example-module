<?php

return [

	// +--------------------------------------------------------------------------
	// | Entity Builder Extension configuration file
	// | https://github.com/websemantics/entity_builder-extension
	// +--------------------------------------------------------------------------

	/*
	|--------------------------------------------------------------------------
	| Namespaces
	|--------------------------------------------------------------------------
	|	A list of all the Stream Namespaces used in this Module.
	|
	*/

	'namespaces' => [/* 'namespace' */],

	/*
	|--------------------------------------------------------------------------
	| Namespaces folder
	|--------------------------------------------------------------------------
	|	Group all Streams in one folder
	|
	*/

	'namespace_folder' => true,

	/*
	|--------------------------------------------------------------------------
	| Avoid Overwrite
	|--------------------------------------------------------------------------
	|
	| For developement and to avoid overwriting on code added, list all the files 
	| that should not be overwritten by the builder. Use the last part of the 
	| file name, ..
	| 
	| for example: 
	|   -PostModel.php 			  -> 'Model.php'
	|   -FileTableColumns.php -> 'TableColumns.php'
	|
	| If you require the builder to generate a fresh copy of the file, either remove it from
	| here or delete it form the module.
	|
	*/

	'avoid_overwrite' => [
		'Model.php',
		'Repository.php',
		/* 'TableColumns.php' */
	],

	/*
	|--------------------------------------------------------------------------
	| Docblock
	|--------------------------------------------------------------------------
	|	Docblock text to include with generated files
	|
	*/

	'docblock' =>
' * @link      http://websemantics.ca/ibuild
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan Sagar <msagar@websemantics.ca>'
];