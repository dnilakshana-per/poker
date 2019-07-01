<?php
/**
 * @category  Test
 * @package   Test_Poker
 * @author    Dilina Nilakshana <dnilakshana@gmail.com>
 * @copyright 2019  All rights reserved.
 */

namespace models\Cards;
use models\Cards\ReaderFactory as ReaderFactory;
include_once('SuitInterface.php');
include_once('ReaderFactory.php');

/**
 * Class Suit
 */
class Suit implements SuitInterface
{
    /**
     * Get suit
     * @return array
     */
    public function getSuit()
    {
       $readerFactory = ReaderFactory::create('suit.xml');
       return $readerFactory->getContent();
    }
}