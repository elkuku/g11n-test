<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 07/07/18
 * Time: 10:02
 */

namespace App;

use ElKuKu\G11n\G11n;
use ElKuKu\G11n\Support\ExtensionHelper;

class Application
{
	private $debug = false;

	public function __construct(bool $debug = false)
	{
		$this->debug = $debug;
	}

	public function run(): void
	{

		// Set the language cache directory
		ExtensionHelper::setCacheDir('../cache');

		// Set the language path(s)
		ExtensionHelper::addDomainPath('someName', '../translations');

		// Set the current language
		G11n::setCurrent('de-DE');

		// Debugging
		G11n::setDebug($this->debug);

		// Do a check here if you are in dev mode and clean the cache
		if ($this->debug)
		{
			ExtensionHelper::cleanCache();
		}

		// Load the language file(s)
		G11n::loadLanguage('mytest', 'someName');


	}

}
