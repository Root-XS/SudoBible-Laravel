<?php

namespace RootXS;

// use Aws\AwsClientInterface;
use Illuminate\Support\Facades\Facade;

/**
 * Facade for the SudoBible service
 */
class SudoBibleFacade extends Facade
{

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'sudobible';
	}

}
