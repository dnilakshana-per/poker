<?php
/**
 * @category  Test
 * @package   Test_Poker
 * @author    Dilina Nilakshana <dnilakshana@gmail.com>
 * @copyright 2019  All rights reserved.
 *
 */

namespace models\Cards;

interface DeckInterface
{
    /**
     * Get Deck Randomly
     * @return mixed
     */
    public function getRandomDeck();
}