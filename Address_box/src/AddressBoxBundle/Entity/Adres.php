<?php

namespace AddressBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adres
 *
 * @ORM\Table(name="adres")
 * @ORM\Entity(repositoryClass="AddressBoxBundle\Repository\AdresRepository")
 */
class Adres
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
     * @ORM\Column(name="miasto", type="string", length=255)
     */
    private $miasto;

    /**
     * @var string
     *
     * @ORM\Column(name="ulica", type="string", length=255)
     */
    private $ulica;

    /**
     * @var int
     *
     * @ORM\Column(name="numer_domu", type="integer")
     */
    private $numerDomu;

    /**
     * @var int
     *
     * @ORM\Column(name="numer_mieszkania", type="integer")
     */
    private $numerMieszkania;
    
    /**
    * @ORM\OneToMany(targetEntity="Osoba", mappedBy="adres")
    */
    private $osoby;

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
     * Set miasto
     *
     * @param string $miasto
     *
     * @return Adres
     */
    public function setMiasto($miasto)
    {
        $this->miasto = $miasto;

        return $this;
    }

    /**
     * Get miasto
     *
     * @return string
     */
    public function getMiasto()
    {
        return $this->miasto;
    }

    /**
     * Set ulica
     *
     * @param string $ulica
     *
     * @return Adres
     */
    public function setUlica($ulica)
    {
        $this->ulica = $ulica;

        return $this;
    }

    /**
     * Get ulica
     *
     * @return string
     */
    public function getUlica()
    {
        return $this->ulica;
    }

    /**
     * Set numerDomu
     *
     * @param integer $numerDomu
     *
     * @return Adres
     */
    public function setNumerDomu($numerDomu)
    {
        $this->numerDomu = $numerDomu;

        return $this;
    }

    /**
     * Get numerDomu
     *
     * @return int
     */
    public function getNumerDomu()
    {
        return $this->numerDomu;
    }

    /**
     * Set numerMieszkania
     *
     * @param integer $numerMieszkania
     *
     * @return Adres
     */
    public function setNumerMieszkania($numerMieszkania)
    {
        $this->numerMieszkania = $numerMieszkania;

        return $this;
    }

    /**
     * Get numerMieszkania
     *
     * @return int
     */
    public function getNumerMieszkania()
    {
        return $this->numerMieszkania;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->osoby = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add osoby
     *
     * @param \AddressBoxBundle\Entity\Osoba $osoby
     *
     * @return Adres
     */
    public function addOsoby(\AddressBoxBundle\Entity\Osoba $osoby)
    {
        $this->osoby[] = $osoby;

        return $this;
    }

    /**
     * Remove osoby
     *
     * @param \AddressBoxBundle\Entity\Osoba $osoby
     */
    public function removeOsoby(\AddressBoxBundle\Entity\Osoba $osoby)
    {
        $this->osoby->removeElement($osoby);
    }

    /**
     * Get osoby
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOsoby()
    {
        return $this->osoby;
    }
    
    public function getfullAddress()
    {
        return sprintf("%s, ul. %s %s/%s", $this->miasto, $this->ulica, $this->numerDomu, $this->numerMieszkania);
    }
}
