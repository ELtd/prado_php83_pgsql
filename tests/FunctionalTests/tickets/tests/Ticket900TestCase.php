<?php

class Ticket900TestCase extends PradoGenericSelenium2Test
{
	function test()
	{
		$this->url('tickets/index.php?page=Ticket900');
		$this->assertEquals($this->title(), "Verifying Ticket 900");
		$base = 'ctl0_Content_';

		$this->clickAndWait('ctl0$Content$DataGrid$ctl1$ctl3');
		$this->type($base.'DataGrid_ctl1_TextBox', '');
		$this->click($base.'DataGrid_ctl1_ctl3');
		$this->clickAndWait('ctl0$Content$DataGrid$ctl1$ctl4');
		$this->assertText($base.'CommandName', 'cancel');
	}
}

