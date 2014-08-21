<?php

class Ticket586TestCase extends PradoGenericSelenium2Test
{
	function test()
	{
		$base = 'ctl0_Content_';
		$this->url('tickets/index.php?page=Ticket586');
		$this->verifyTitle("Verifying Ticket 586", "");

		$this->assertText("{$base}label1", "Status");
		$this->clickAndWait("{$base}button1");
		$this->assertText("{$base}label1", "Button 1 Clicked!");

		$this->type("{$base}text1", "testing");

		// this can't work properly without manual testing
		// $this->keyDownAndWait("{$base}text1", '\13');
		// $this->assertText("{$base}label1", "Button 2 (default) Clicked!");
	}
}
