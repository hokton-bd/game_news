<?php

namespace App\Facades\Valorant;

use Illuminate\Support\Facades\Facade;

class Scrape extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'scrape';
	}
}