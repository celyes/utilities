<?php 

namespace Celyes\Utilities;


use PHPUnit\Framework\TestCase;

class FileTest extends TestCase

{
	
	private $file;
	private $types = array('B','kB','MB','GB','TB','PB','EB','ZB','YB');


	protected function setUp()
    {
        $this->file = new File("README.md");
    }

    public function test_sizeForHumans()
    {
    	$this->assertEquals($this->file->sizeForHumans(), '65.00B');
    }


	public function test_getAllUnits()
	{
		$this->assertEquals(File::getAllUnits(), $this->types);
	} 
}