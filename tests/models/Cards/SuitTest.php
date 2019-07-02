<?php
/**
 * @category  Test
 * @package   Test_Deck
 * @author    Dilina Nilakshana <dnilakshana@gmail.com>
 * @copyright 2019  All rights reserved.
 *
 */
use PHPUnit\Framework\TestCase;
require 'models/Cards/Suit.php';

class SuitTest extends TestCase
{
    /**
     * Testing Get Suit Function
     */
    public function testGetSuit()
    {
        $suit = new \models\Cards\Suit();
        $suit = $suit->getSuit();
        $count = count($suit);
        // number of cards should be 4
        $this->assertEquals($count, 4);
    }

}