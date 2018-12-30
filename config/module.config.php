<?php

namespace ImagisGrid;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
	'router'       => array(
		'routes' => array(

		),
	),
	'imagis-grid' => [
		'adapter' => [
			'jqgrid' => require('adapter/jqgrid.php')
		]
	],
	'view_manager' => array(
		'strategies' => array(
			'ViewJsonStrategy',
		),
	),
	'view_helpers' => [
		'aliases' => [
			'grid' => View\Helper\Grid::class,
			'jqgrid' => View\Helper\Adapter\JqGrid::class,//still needed ???
		],
	],
	'abstract_factories' => array(
		//'ImagisGrid\Model\AbstractModelFactory',
		'ImagisGrid\Grid\Factory\GridFactory',
		//'ImagisGrid\Helper\AbstractGridConfigFactory'
	),
];
