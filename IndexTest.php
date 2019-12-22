<?php
use PHPUnit\Framework\TestCase;

include "./index.php";

class IndexTest extends TestCase
{
    public function testMain()
    {
        $this->assertEquals(main(), "Joyeux Noël");
    }
}
