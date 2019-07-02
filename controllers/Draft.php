<?php
/**
 * @category  Test
 * @package   Test_Poker
 * @author    Dilina Nilakshana <dnilakshana@gmail.com>
 * @copyright 2019  All rights reserved.
 */

require 'models/Cards/Deck.php';
require 'models/Cards/Draft.php';

/**
 * Class Draft
 */
class Draft extends Controller
{
    /**
     * @var \models\Cards\Deck
     */
    protected $deck;

    /**
     * @var \models\Cards\Draft
     */
    protected $draft;

    /**
     * Draft constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->deck  = new \models\Cards\Deck();
        $this->draft = new \models\Cards\Draft();
    }

    /**
     * Draft Save method
     */
    public function save()
    {
        $sessionSuit    = $this->session->getValue('suit');
        $sessionValue   = $this->session->getValue('value');
        $sessionDeck    = $this->session->getValue('randomdeck');
        $sessionIndex   = $this->session->getValue('index');
        $sessionDrafted = $this->session->getValue('drafted');
        $sessionMatched = $this->session->getValue('matched');
        if(!$sessionMatched) {
            $this->draft->Draft($sessionSuit,$sessionValue,$sessionDeck,$sessionIndex,$sessionDrafted);
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}