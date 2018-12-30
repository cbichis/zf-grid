<?php
namespace ImagisGrid;

class Module
{
	public function getServiceConfig()
	{
		return [
			'factories' => [
			],
		];
	}

	public function getConfig()
	{
		return include __DIR__ . '/config/module.config.php';
	}
}
