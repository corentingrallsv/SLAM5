<?php
/**
 * Created by PhpStorm.
 * User: 15grallc
 * Date: 03/04/2017
 * Time: 14:26
 */

namespace stpaul\Domain;
require_once __DIR__.'/../../src/stpaul/Domain/Sejour.php';


/**
 * Class SejourTest
 * @package stpaul\Domain
 */
class SejourDteFrTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var sejour
     */
    protected $object;
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Sejour(1, 'Classe de mer', 170, '2016-05-02', 10);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }


    /**
     *
     */
    public function testDteFr()
    {
        $this->setUp(1, 'Classe de mer', 170, '2016-05-02', 10);

        $resultatAttendu = '02-05-2016';
        $resultatObserve = $this->object->getSejDteFormatFR();

        $this->assertEquals($resultatAttendu, $resultatObserve);

    }

}