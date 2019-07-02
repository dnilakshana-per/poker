<?php
/**
 * @category  Test
 * @package   Test_Deck
 * @author    Dilina Nilakshana <dnilakshana@gmail.com>
 * @copyright 2019  All rights reserved.
 *
 */
use PHPUnit\Framework\TestCase;
require 'models/Cards/Values.php';

class ValuesTest extends TestCase
{
    /**
     * Testing Get values function
     */
    public function testGetValues()
    {
        $values = new \models\Cards\Values();
        $values = $values->getValues();
        $count  = count($values);
        // number of values should be 13
        $this->assertEquals($count, 13);
    }

}