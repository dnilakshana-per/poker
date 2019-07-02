<?php
/**
 * @category  Test
 * @package   Test_Deck
 * @author    Dilina Nilakshana <dnilakshana@gmail.com>
 * @copyright 2019  All rights reserved.
 *
 */
use PHPUnit\Framework\TestCase;
require 'models/Cards/Deck.php';
require 'models/Cards/Deck.php';

class DeckTest extends TestCase
{
    /**
     * Testing Get random deck function
     */
    public function testGetRandomDeck()
    {
        $deck = new \models\Cards\Deck();
        $deck = $deck->getRandomDeck();
        $count = count($deck);
        // number of cards should be 52
        $this->assertEquals($count, 52);
    }

}