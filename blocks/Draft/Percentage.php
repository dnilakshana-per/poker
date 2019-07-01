<?php
/**
 * @category  Test
 * @package   Test_Poker
 * @author    Dilina Nilakshana <dnilakshana@gmail.com>
 * @copyright 2019  All rights reserved.
 */

namespace blocks\Draft;

/**
 * Class Percentage
 */
class Percentage
{
    /**
     * @var \libs\Session
     */
    private $session;

    /**
     * Percentage constructor.
     */
    public function __construct()
    {
        $this->session = new \libs\Session();
    }

    /**
     * @return float|int
     */
    public function getPercentage()
    {
        $percentage = $this->session->getValue('percentage');
        $matched = $this->session->getValue('matched');
        if($matched) {
            return 0;
        }
        if($percentage !== '') {
            return round($percentage,2);
        }
        return round((1/52)*100, 2);
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