<?php
/**
 * Created by PhpStorm.
 * User: ANNICK
 * Date: 24/02/2016
 * Time: 15:11
 */

namespace stpaul\Domain;

/**
 * Class sejour
 * @package stpaul
 */
class Sejour {

    private $sejNo;
    private $sejIntitule;
    private $sejMontantMBI;
    private $sejDteDeb;
    private $sejDuree;

    function __construct($sejNo, $sejIntitule, $sejMontantMBI, $sejDteDeb, $sejDuree)
    {
        $this->sejNo = $sejNo;
        $this->sejIntitule = $sejIntitule;
        $this->sejMontantMBI = $sejMontantMBI;
        $this->sejDteDeb = $sejDteDeb;
        $this->sejDuree = $sejDuree;
    }

    /**
     * @return mixed
     */
    public function getSejNo()
    {
        return $this->sejNo;
    }

    /**
     * @param mixed $sejNo
     */
    public function setSejNo($sejNo)
    {
        $this->sejNo = $sejNo;
    }

    /**
     * @return mixed
     */
    public function getSejIntitule()
    {
        return $this->sejIntitule;
    }

    /**
     * @param mixed $sejIntitule
     */
    public function setSejIntitule($sejIntitule)
    {
        $this->sejIntitule = $sejIntitule;
    }

    /**
     * @return mixed
     */
    public function getSejMontantMBI()
    {
        return $this->sejMontantMBI;
    }

    /**
     * @param mixed $sejMontantMBI
     */
    public function setSejMontantMBI($sejMontantMBI)
    {
        $this->sejMontantMBI = $sejMontantMBI;
    }

    /**
     * @return mixed
     */
    public function getSejDteDeb()
    {
        return $this->sejDteDeb;
    }

    /**
     * @param mixed $sejDteDeb
     */
    public function setSejDteDeb($sejDteDeb)
    {
        $this->sejDteDeb = $sejDteDeb;
    }

    /**
     * @return mixed
     */
    public function getSejDuree()
    {
        return $this->sejDuree;
    }

    /**
     * @param mixed $dejDuree
     */
    public function setSejDuree($sejDuree)
    {
        $this->sejDuree = $sejDuree;
    }



    /**
     * Retourne la date de fin de séjour
     * @return mixed
     */
    public function getSejDteFin()
    {
        /*
        $date = $this->getSejDteDeb();
        $jour = substr($date,8,2) + $this->sejDuree;
        $date = substr($date,0,8) . $jour;
        return $date;$this->getSejDteDeb()
        */
        return date("Y-m-d",strtotime("+".$this->sejDuree ."  days",strtotime($this->getSejDteDeb())));
    }

    /**
     * Formatage jj-mm-aaaa
     * @param $pDte : date à formater
     * @return mixed
     */
    public function getSejDteFormatFR()
    {
        $date = explode('-',$this->getSejDteDeb());
        return $date[2] . '-' . $date[1] . '-' . $date[0];

    }














}
















