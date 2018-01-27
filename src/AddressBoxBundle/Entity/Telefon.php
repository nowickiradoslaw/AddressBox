<?php

namespace AddressBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Telefon
 *
 * @ORM\Table(name="telefon")
 * @ORM\Entity(repositoryClass="AddressBoxBundle\Repository\TelefonRepository")
 */
class Telefon
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="numer_telefonu", type="string", length=255)
     */
    private $numerTelefonu;

    /**
     * @var string
     *
     * @ORM\Column(name="typ", type="string", length=255)
     */
    private $typ;
    
    /**
    * @ORM\ManyToOne(targetEntity="Osoba", inversedBy="telefony")
    * @ORM\JoinColumn(name="osoba_id", referencedColumnName="id")
    */
    private $osoba;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numerTelefonu
     *
     * @param string $numerTelefonu
     *
     * @return Telefon
     */
    public function setNumerTelefonu($numerTelefonu)
    {
        $this->numerTelefonu = $numerTelefonu;

        return $this;
    }

    /**
     * Get numerTelefonu
     *
     * @return string
     */
    public function getNumerTelefonu()
    {
        return $this->numerTelefonu;
    }

    /**
     * Set typ
     *
     * @param string $typ
     *
     * @return Telefon
     */
    public function setTyp($typ)
    {
        $this->typ = $typ;

        return $this;
    }

    /**
     * Get typ
     *
     * @return string
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * Set osoba
     *
     * @param \AddressBoxBundle\Entity\Osoba $osoba
     *
     * @return Telefon
     */
    public function setOsoba(\AddressBoxBundle\Entity\Osoba $osoba = null)
    {
        $this->osoba = $osoba;

        return $this;
    }

    /**
     * Get osoba
     *
     * @return \AddressBoxBundle\Entity\Osoba
     */
    public function getOsoba()
    {
        return $this->osoba;
    }
}
