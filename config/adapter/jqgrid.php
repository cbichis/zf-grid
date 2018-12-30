<?php

namespace ImagisGrid;

return [
	'helper' => View\Helper\Adapter\JqGrid::class,

	/**
	 * Standard grid options
	 *
	 * @see http://www.guriddo.net/documentation/guriddo/javascript/user-guide/basic-grid/#options
	 */
	'grid_options' => [
		//data
		'datatype' => 'json',
		'mtype' => 'POST',
		'gridview' => true,

		//layout
		'height' => 'auto',
		'autowidth' => true,
		'shrinkToFit' => true,
		'forceFit' => true,

		//locale
		'regional' => 'en',

		//pager
		'viewrecords' => true,
		'rowNum' => 100,
		'rowList' => [100, 500, 1000],

		//functionality
		'sortable' => true,
		'rownumbers' => false,
		'multiselect' => false,

		/**
		 * todo: add custom settings, as for an action column
		 */
	],
	/**
	 * Sub Grid options
	 *
	 * @see http://www.guriddo.net/documentation/guriddo/javascript/user-guide/subgrid/
	 */
	'sub_grid_options' => [

	],
	/**
	 * Tree Grid options
	 *
	 * @see http://www.guriddo.net/documentation/guriddo/javascript/user-guide/treegrid/
	 */
	'tree_grid_options' => [

	],
	/**
	 * Pivot Grid options
	 *
	 * @see http://www.guriddo.net/documentation/guriddo/javascript/user-guide/pivotgrid/
	 */
	'pivot_grid_options' => [

	],
	/**
	 * Global settings for column_model, this is following the defaults of the jqGrid
	 *
	 * @see http://www.guriddo.net/documentation/guriddo/javascript/user-guide/basic-grid/#colmodel-options
	 */
	'column_model_options' => [
		'align' => 'center',
		//'cellattr' => null,
		//'classes' => '',
		//'colmenu' => true,
		//'coloptions' => null,
		//'datefmt' => 'Y-m-d',
		'editable' => false,
		//'editoptions' => null,
		//'editrules' => null,
		'edittype' => 'text',
		//'exportcol' => true,
		//'firstsortorder' => 'asc',
		//'fixed' => false,
		//'formoptions' => null,
		//'formatoptions' => null,
		//'formatter' => null,
		//'frozen' => false,
		//'hidedlg' => false,
		'hidden' => false,
		//'index' => null,
		//'jsonmap' => null,
		//'key' => false,
		//'label' => null,
		//'minResizeWidth' => 0,
		'name' => '',//this is required
		//'resizable' => true,
		'search' => true,
		//'searchoptions' => null,
		'sortable' => true,
		//'sortfunc' => null,
		//'sorttype' => 'text',
		//'stype' => 'text',
		//'template' => null,
		//'title' => true,
		//'tooltip' => '',
		'width' => 150,
		'widthOrg' => 150,
		//'xmlmap' => null,
		//'unformat' => null,
		//'viewable' => true,
	],
];
