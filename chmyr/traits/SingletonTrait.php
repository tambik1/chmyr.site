<?php

namespace Traits;

trait SingletonTrait
{
	protected static $instance;

	final private function __construct()
	{
		$this->init();
	}

	protected function init()
	{
	}

	final public static function getInstance()
	{
		return isset(static::$instance) ? static::$instance : static::$instance = new static();
	}

	final private function __wakeup()
	{
	}

	final private function __clone()
	{
	}
}