<?php 

namespace Celyes\Utilities;

class File 
{

	protected $handle;
	protected $size;
	protected static $units = array('B','kB','MB','GB','TB','PB','EB','ZB','YB'); 
	
	public function __construct($handle)
	{
		$this->handle = $handle;
		$this->size = filesize($handle);
	}

	public function sizeForHumans($decimals = 2)
	{

		$factor = floor((strlen($this->size) - 1) / 3);	
	    return sprintf("%.{$decimals}f", $this->size / 1024** $factor) . self::$units[$factor];

	}

	public static function getAllUnits()
	{
		return self::$units;
	
	}
}