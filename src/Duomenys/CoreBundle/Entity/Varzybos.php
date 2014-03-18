<?php

namespace Duomenys\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Varzybos
 */
class Varzybos
{
    /**
     * @var \DateTime
     */
    private $laikas;

    /**
     * @var integer
     */
    private $taskaiK1;

    /**
     * @var integer
     */
    private $taskaiK2;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Duomenys\CoreBundle\Entity\Ivykis
     */
    private $ivykis;

    /**
     * @var \Duomenys\CoreBundle\Entity\Komandos
     */
    private $komandosKodas1;

    /**
     * @var \Duomenys\CoreBundle\Entity\Komandos
     */
    private $komandosKodas;


    /**
     * Set laikas
     *
     * @param \DateTime $laikas
     * @return Varzybos
     */
    public function setLaikas($laikas)
    {
        $this->laikas = $laikas;

        return $this;
    }

    /**
     * Get laikas
     *
     * @return \DateTime 
     */
    public function getLaikas()
    {
        return $this->laikas;
    }

    /**
     * Set taskaiK1
     *
     * @param integer $taskaiK1
     * @return Varzybos
     */
    public function setTaskaiK1($taskaiK1)
    {
        $this->taskaiK1 = $taskaiK1;

        return $this;
    }

    /**
     * Get taskaiK1
     *
     * @return integer 
     */
    public function getTaskaiK1()
    {
        return $this->taskaiK1;
    }

    /**
     * Set taskaiK2
     *
     * @param integer $taskaiK2
     * @return Varzybos
     */
    public function setTaskaiK2($taskaiK2)
    {
        $this->taskaiK2 = $taskaiK2;

        return $this;
    }

    /**
     * Get taskaiK2
     *
     * @return integer 
     */
    public function getTaskaiK2()
    {
        return $this->taskaiK2;
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

    /**
     * Set ivykis
     *
     * @param \Duomenys\CoreBundle\Entity\Ivykis $ivykis
     * @return Varzybos
     */
    public function setIvykis(\Duomenys\CoreBundle\Entity\Ivykis $ivykis = null)
    {
        $this->ivykis = $ivykis;

        return $this;
    }

    /**
     * Get ivykis
     *
     * @return \Duomenys\CoreBundle\Entity\Ivykis 
     */
    public function getIvykis()
    {
        return $this->ivykis;
    }

    /**
     * Set komandosKodas1
     *
     * @param \Duomenys\CoreBundle\Entity\Komandos $komandosKodas1
     * @return Varzybos
     */
    public function setKomandosKodas1(\Duomenys\CoreBundle\Entity\Komandos $komandosKodas1 = null)
    {
        $this->komandosKodas1 = $komandosKodas1;

        return $this;
    }

    /**
     * Get komandosKodas1
     *
     * @return \Duomenys\CoreBundle\Entity\Komandos 
     */
    public function getKomandosKodas1()
    {
        return $this->komandosKodas1;
    }

    /**
     * Set komandosKodas
     *
     * @param \Duomenys\CoreBundle\Entity\Komandos $komandosKodas
     * @return Varzybos
     */
    public function setKomandosKodas(\Duomenys\CoreBundle\Entity\Komandos $komandosKodas = null)
    {
        $this->komandosKodas = $komandosKodas;

        return $this;
    }

    /**
     * Get komandosKodas
     *
     * @return \Duomenys\CoreBundle\Entity\Komandos 
     */
    public function getKomandosKodas()
    {
        return $this->komandosKodas;
    }
}
