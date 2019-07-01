<?php
/**
 * @category  Test
 * @package   Test_Poker
 * @author    Dilina Nilakshana <dnilakshana@gmail.com>
 * @copyright 2019  All rights reserved.
 */

namespace blocks\Cards;
use models\Cards\ValuesInterface as ValuesInterface;

/**
 * Class Values
 */
class Values
{
    /**
     * @var ValuesInterface
     */
    private $suit;

    /**
     * @var \libs\Session
     */
    private $session;

    /**
     * Values constructor.
     * @param ValuesInterface $suit
     */
    public function __construct(ValuesInterface $suit)
    {
        $this->suit = $suit;
        $this->session = new \libs\Session();
    }

    /**
     * @return string
     */
    public function output()
    {
        $selected = $this->session->getValue('value');
        $values = $this->suit->getValues();
        $disabled = '';
        if(isset($selected) && $selected !== '') {
            $disabled = 'disabled=""';
        }
        $html = '<select class="form-control" '.$disabled.' name="value">';
        foreach ($values as $value) {
            if($value['id'] === $selected) {
                $attribute = 'selected';
            } else {
                $attribute = '';
            }
            $html .= '<option '.$attribute.' value="'.$value['id'].'">'.$value['label'].'</option>';
        }
        $html .= '</select>';
        return $html;
    }

}