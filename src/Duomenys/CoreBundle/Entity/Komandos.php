<?php

namespace Duomenys\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Komandos
 */
class Komandos
{
    /**
     * @var string
     */
    private $pavadinimas;

    /**
     * @var string
     */
    private $miestas;

    /**
     * @var string
     */
    private $logotipas;

    /**
     * @var string
     */
    private $sukis;

    /**
     * @var string
     */
    private $treneris;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set pavadinimas
     *
     * @param string $pavadinimas
     * @return Komandos
     */
    public function setPavadinimas($pavadinimas)
    {
        $this->pavadinimas = $pavadinimas;

        return $this;
    }

    /**
     * Get pavadinimas
     *
     * @return string 
     */
    public function getPavadinimas()
    {
        return $this->pavadinimas;
    }

    /**
     * Set miestas
     *
     * @param string $miestas
     * @return Komandos
     */
    public function setMiestas($miestas)
    {
        $this->miestas = $miestas;

        return $this;
    }

    /**
     * Get miestas
     *
     * @return string 
     */
    public function getMiestas()
    {
        return $this->miestas;
    }

    /**
     * Set logotipas
     *
     * @param string $logotipas
     * @return Komandos
     */
    public function setLogotipas($logotipas)
    {
        $this->logotipas = $logotipas;

        return $this;
    }

    /**
     * Get logotipas
     *
     * @return string 
     */
    public function getLogotipas()
    {
        return $this->logotipas;
    }

    /**
     * Set sukis
     *
     * @param string $sukis
     * @return Komandos
     */
    public function setSukis($sukis)
    {
        $this->sukis = $sukis;

        return $this;
    }

    /**
     * Get sukis
     *
     * @return string 
     */
    public function getSukis()
    {
        return $this->sukis;
    }

    /**
     * Set treneris
     *
     * @param string $treneris
     * @return Komandos
     */
    public function setTreneris($treneris)
    {
        $this->treneris = $treneris;

        return $this;
    }

    /**
     * Get treneris
     *
     * @return string 
     */
    public function getTreneris()
    {
        return $this->treneris;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
