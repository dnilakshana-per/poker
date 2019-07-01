<?php
/**
 * @category  Test
 * @package   Test_Poker
 * @author    Dilina Nilakshana <dnilakshana@gmail.com>
 * @copyright 2019  All rights reserved.
 */

namespace models\Cards;
include_once('Reader.php');

/**
 * Class Reader
 */
class ReaderFactory
{
    /**
     * Reader Factory method
     * @param $fileName
     * @return Reader
     */
    public static function create($fileName)
    {
        return new Reader($fileName);
    }
}