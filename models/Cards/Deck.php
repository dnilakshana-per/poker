<?php
/**
 * @category  Test
 * @package   Test_Poker
 * @author    Dilina Nilakshana <dnilakshana@gmail.com>
 * @copyright 2019  All rights reserved.
 *
 */

namespace models\Cards;
use models\Cards\Suit;
use models\Cards\Values;
include_once('DeckInterface.php');
include_once('Suit.php');
include_once('Values.php');

/**
 * Class Deck
 */
class Deck implements DeckInterface
{
    /**
     * @var \models\Cards\Suit
     */
    protected $suit;

    /**
     * @var \models\Cards\Values
     */
    protected $values;

    /**
     * Deck constructor.
     */
    public function __construct()
    {
        $this->suit   = new \models\Cards\Suit();
        $this->values = new \models\Cards\Values();
    }

    /**
     * Get Deck Randomly
     * @return array
     */
    public function getRandomDeck()
    {
        $suits   = $this->suit->getSuit();
        $values = $this->values->getValues();
        shuffle($suits);
        shuffle($values);
        $deck = array();
        foreach ($suits as $suit ) {
            foreach ($values as $value) {
                $deck[] = $suit['id'].$value['id'];
            }
        }
        shuffle($deck);
        return $deck;
    }
}