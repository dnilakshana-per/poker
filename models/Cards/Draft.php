<?php
/**
 * @category  Test
 * @package   Test_Poker
 * @author    Dilina Nilakshana <dnilakshana@gmail.com>
 * @copyright 2019  All rights reserved.
 *
 */

namespace models\Cards;

/**
 * Class Draft
 */
class Draft
{
    /**
     * @var \libs\Session
     */
    protected $session;

    /**
     * @var \models\Cards\Deck
     */
    protected $deck;

    /**
     * Draft constructor.
     */
    public function __construct()
    {
        $this->session   = new \libs\Session();
        $this->deck  = new \models\Cards\Deck();
    }

    /**
     * Draft Card
     *
     * @param $sessionSuit
     * @param $sessionValue
     * @param $sessionDeck
     * @param $sessionIndex
     * @param $sessionDrafted
     */
    public function Draft($sessionSuit='',$sessionValue='',$sessionDeck='',$sessionIndex='',$sessionDrafted='')
    {
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
            $pendingAmount = $totalCards - $currentIndex;
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
}