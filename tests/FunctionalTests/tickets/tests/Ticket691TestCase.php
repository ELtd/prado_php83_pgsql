<?php
class Ticket691TestCase extends PradoGenericSelenium2Test
{
	function test()
	{
		$base = 'ctl0_Content_';
		$this->url('tickets/index.php?page=Ticket691');
		$this->assertEquals($this->title(), "Verifying Ticket 691");

		$this->click("//input[@id='{$base}List_c2']/../..");
		$this->pause(800);
		$this->assertText("{$base}Title", "Thanks");
		$this->assertText("{$base}Result", "You vote 3");
	}

}