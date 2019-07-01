<?php
/**
 * @category  Test
 * @package   Test_Poker
 * @author    Dilina Nilakshana <dnilakshana@gmail.com>
 * @copyright 2019  All rights reserved.
 */

namespace blocks\Draft;

/**
 * Class Values
 */
class Drafted
{
    /**
     * @var \libs\Session
     */
    private $session;

    /**
     * Drafted constructor.
     */
    public function __construct()
    {
        $this->session = new \libs\Session();
    }

    /**
     * @return bool|string
     */
    public function getDrafted()
    {
        $drafted = $this->session->getValue('drafted');
        if($drafted !== '') {
            $drafted = unserialize($drafted);
            return implode(", ",$drafted);
        }
        return false;
    }

    /**
     * @return bool|mixed
     */
    public function getMatchedStatus()
    {
        $matched = $this->session->getValue('matched');
        if($matched !== '') {
           return $matched;
        }
        return false;
    }
}