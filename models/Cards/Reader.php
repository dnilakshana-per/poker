<?php
/**
 * @category  Test
 * @package   Test_Poker
 * @author    Dilina Nilakshana <dnilakshana@gmail.com>
 * @copyright 2019  All rights reserved.
 */

namespace models\Cards;

/**
 * Class Reader
 */
class Reader
{
    /*
     * assert directory
     */
    const ASSEST_DIR = 'assets/';

    /**fule name
     * @var
     */
    private $fileName;

    /**
     * Reader constructor.
     * @param $fileName
     */
    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * get content
     * @return array
     */
    public function getContent()
    {
        $path    = self::ASSEST_DIR.$this->fileName;
        $xmldata = simplexml_load_file($path) or die("Failed to load");
        $data    = array();
        foreach($xmldata->children() as $items) {
            foreach ($items as $item) {
                $data[] =  (array)$item;
            }
        }
        return $data;
    }
}