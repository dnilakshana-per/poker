<?php
/**
 * @category  Test
 * @package   Test_Poker
 * @author    Dilina Nilakshana <dnilakshana@gmail.com>
 * @copyright 2019  All rights reserved.
 */

namespace blocks\Cards;
use models\Cards\SuitInterface as suitInterface;

/**
 * Class Suit
 */
class Suit
{
    /**
     * @var suitInterface
     */
    private $suit;

    /**
     * @var \libs\Session
     */
    private $session;

    /**
     * Suit constructor.
     * @param suitInterface $suit
     */
    public function __construct(suitInterface $suit)
    {
        $this->suit = $suit;
        $this->session = new \libs\Session();
    }

    /**
     * Return Suit Select content
     * @return string
     */
    public function output()
    {
        $selected = $this->session->getValue('suit');
        $suits = $this->suit->getSuit();
        $disabled = '';
        if(isset($selected) && $selected !== '') {
            $disabled = 'disabled=""';
        }
        $html = '<select class="form-control" '.$disabled.'  name="suit">';
        foreach ($suits as $suit) {
            if($suit['id'] === $selected) {
                $attribute = 'selected';
            } else {
                $attribute = '';
            }

            $html .= '<option '.$attribute.' value="'.$suit['id'].'">'.$suit['label'].'</option>';
        }
        $html .= '</select>';
        return $html;
    }
}