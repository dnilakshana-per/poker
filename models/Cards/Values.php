<?php
/**
 * @category  Test
 * @package   Test_Poker
 * @author    Dilina Nilakshana <dnilakshana@gmail.com>
 * @copyright 2019  All rights reserved.
 */

namespace models\Cards;
use models\Cards\ReaderFactory as ReaderFactory;
include_once('ValuesInterface.php');
include_once('ReaderFactory.php');

/**
 * Class Values
 */
class Values implements ValuesInterface
{
    /**
     * get values
     * @return array
     */
    public function getValues()
    {
       $readerFactory = ReaderFactory::create('values.xml');
       return $readerFactory->getContent();
    }
}