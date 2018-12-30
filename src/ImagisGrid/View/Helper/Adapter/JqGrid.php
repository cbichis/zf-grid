<?php

namespace ImagisGrid\View\Helper\Adapter;

use Zend\View\Helper\AbstractHelper;
use ImagisGrid\Grid\BaseGrid;

class JqGrid extends AbstractHelper {

	/*
	 * add something for append, insert at specific order or similar
	 */
	public function __invoke(BaseGrid $grid) {

		//render grid
		//render pager

		return '';
	}
}
