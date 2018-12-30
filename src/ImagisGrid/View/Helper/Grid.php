<?php

namespace ImagisGrid\View\Helper;

use Zend\View\Helper\AbstractHelper;
use ImagisGrid\Grid\BaseGrid;

class Grid extends AbstractHelper {

	/*
	 * add something for append, insert at specific order or similar
	 */
	public function __invoke(BaseGrid $grid) {

		//render grid
		//render pager

		return '<p>' . $this->view->helpMe1('Text') . '</p>';
		return '';
	}
}
