<?php

namespace AddressBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Email
 *
 * @ORM\Table(name="email")
 * @ORM\Entity(repositoryClass="AddressBoxBundle\Repository\EmailRepository")
 */
class Email
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
     * @ORM\Column(name="adres_email", type="string", length=255)
     */
    private $adresEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="typ", type="string", length=255)
     */
    private $typ;
    
    /**
    * @ORM\ManyToOne(targetEntity="Osoba", inversedBy="emaile")
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
     * Set adresEmail
     *
     * @param string $adresEmail
     *
     * @return Email
     */
    public function setAdresEmail($adresEmail)
    {
        $this->adresEmail = $adresEmail;

        return $this;
    }

    /**
     * Get adresEmail
     *
     * @return string
     */
    public function getAdresEmail()
    {
        return $this->adresEmail;
    }

    /**
     * Set typ
     *
     * @param string $typ
     *
     * @return Email
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
     * @return Email
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
