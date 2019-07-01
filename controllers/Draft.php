<?php
/**
 * @category  Test
 * @package   Test_Poker
 * @author    Dilina Nilakshana <dnilakshana@gmail.com>
 * @copyright 2019  All rights reserved.
 */

require 'models/Cards/Deck.php';

/**
 * Class Draft
 */
class Draft extends Controller
{

    /**
     * Draft constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->deck = new \models\Cards\Deck();
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
            $drafted = array();
            if ($sessionSuit === '' && $sessionValue === '' && $sessionDeck === '') {
                $deck = $this->deck->getRandomDeck();
                $this->session->setValue('suit', $_POST['suit']);
                $this->session->setValue('value', $_POST['value']);
                $this->session->setValue('randomdeck', serialize($deck));
                $sessionSuit    = $_POST['suit'];
                $sessionValue   = $_POST['value'];
                $sessionDeck    = $deck;
                $sessionIndex   = 0;
            } else {
                $sessionIndex  = $sessionIndex + 1;
                $sessionDeck   = unserialize($sessionDeck);
                $drafted       = unserialize($sessionDrafted);
            }

            if ($sessionSuit . $sessionValue !== $sessionDeck[$sessionIndex]) {
                $totalCards = count($sessionDeck);
                $currentIndex = (int)$sessionIndex + 1;
                $pendingAmount = (int)$totalCards - $currentIndex;
                $percentage = (1 / $pendingAmount) * 100;
                $this->session->setValue('percentage', $percentage);
                $this->session->setValue('index', $sessionIndex);
                $drafted[] = $sessionDeck[$sessionIndex];
                $this->session->setValue('matched', false);
                $this->session->setValue('drafted', serialize($drafted));
            } else {
                $drafted[] = $sessionDeck[$sessionIndex];
                $this->session->setValue('drafted', serialize($drafted));
                $this->session->setValue('matched', true);
            }
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}