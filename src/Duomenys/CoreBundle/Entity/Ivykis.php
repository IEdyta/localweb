<?php

namespace Duomenys\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ivykis
 */
class Ivykis
{
    /**
     * @var string
     */
    private $pavadinimas;

    /**
     * @var \DateTime
     */
    private $data;

    /**
     * @var string
     */
    private $vieta;

    /**
     * @var string
     */
    private $kategorija;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set pavadinimas
     *
     * @param string $pavadinimas
     * @return Ivykis
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
     * Set data
     *
     * @param \DateTime $data
     * @return Ivykis
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set vieta
     *
     * @param string $vieta
     * @return Ivykis
     */
    public function setVieta($vieta)
    {
        $this->vieta = $vieta;

        return $this;
    }

    /**
     * Get vieta
     *
     * @return string 
     */
    public function getVieta()
    {
        return $this->vieta;
    }

    /**
     * Set kategorija
     *
     * @param string $kategorija
     * @return Ivykis
     */
    public function setKategorija($kategorija)
    {
        $this->kategorija = $kategorija;

        return $this;
    }

    /**
     * Get kategorija
     *
     * @return string 
     */
    public function getKategorija()
    {
        return $this->kategorija;
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
