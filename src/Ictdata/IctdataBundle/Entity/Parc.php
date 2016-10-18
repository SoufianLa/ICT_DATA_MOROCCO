<?php

namespace Ictdata\IctdataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parc
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ictdata\IctdataBundle\Entity\ParcRepository")
 */
class Parc
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="datetime")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="M_Parc_pre", type="integer")
     */
    private $mParcPre;

    /**
     * @var integer
     *
     * @ORM\Column(name="M_Parc_pst", type="integer")
     */
    private $mParcPst;

    /**
     * @var integer
     *
     * @ORM\Column(name="F_Parc_mobilite_restreinte", type="integer")
     */
    private $fParcMobiliteRestreinte;

    /**
     * @var integer
     *
     * @ORM\Column(name="F_parc_residentiel", type="integer")
     */
    private $fParcResidentiel;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ligne_Publiphones", type="integer")
     */
    private $lignePubliphones;

    /**
     * @var integer
     *
     * @ORM\Column(name="Parc_internet", type="integer")
     */
    private $parcInternet;

    /**
     * @var integer
     *
     * @ORM\Column(name="Parc_internetG_mobile", type="integer")
     */
    private $parcInternetGMobile;

    /**
     * @var integer
     *
     * @ORM\Column(name="Parc_internetG_autre", type="integer")
     */
    private $parcInternetGAutre;

    /**
     * @var integer
     *
     * @ORM\Column(name="Parc_internet_Ba_Debit", type="integer")
     */
    private $parcInternetBaDebit;

    /**
     * @var integer
     *
     * @ORM\Column(name="Parc_Nom_Domaine", type="integer")
     */
    private $parcNomDomaine;


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
     * Set date
     *
     * @param \DateTime $date
     * @return Parc
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set mParcPre
     *
     * @param integer $mParcPre
     * @return Parc
     */
    public function setMParcPre($mParcPre)
    {
        $this->mParcPre = $mParcPre;

        return $this;
    }

    /**
     * Get mParcPre
     *
     * @return integer 
     */
    public function getMParcPre()
    {
        return $this->mParcPre;
    }

    /**
     * Set mParcPst
     *
     * @param integer $mParcPst
     * @return Parc
     */
    public function setMParcPst($mParcPst)
    {
        $this->mParcPst = $mParcPst;

        return $this;
    }

    /**
     * Get mParcPst
     *
     * @return integer 
     */
    public function getMParcPst()
    {
        return $this->mParcPst;
    }

    /**
     * Set fParcMobiliteRestreinte
     *
     * @param integer $fParcMobiliteRestreinte
     * @return Parc
     */
    public function setFParcMobiliteRestreinte($fParcMobiliteRestreinte)
    {
        $this->fParcMobiliteRestreinte = $fParcMobiliteRestreinte;

        return $this;
    }

    /**
     * Get fParcMobiliteRestreinte
     *
     * @return integer 
     */
    public function getFParcMobiliteRestreinte()
    {
        return $this->fParcMobiliteRestreinte;
    }

    /**
     * Set fParcResidentiel
     *
     * @param integer $fParcResidentiel
     * @return Parc
     */
    public function setFParcResidentiel($fParcResidentiel)
    {
        $this->fParcResidentiel = $fParcResidentiel;

        return $this;
    }

    /**
     * Get fParcResidentiel
     *
     * @return integer 
     */
    public function getFParcResidentiel()
    {
        return $this->fParcResidentiel;
    }

    /**
     * Set lignePubliphones
     *
     * @param integer $lignePubliphones
     * @return Parc
     */
    public function setLignePubliphones($lignePubliphones)
    {
        $this->lignePubliphones = $lignePubliphones;

        return $this;
    }

    /**
     * Get lignePubliphones
     *
     * @return integer 
     */
    public function getLignePubliphones()
    {
        return $this->lignePubliphones;
    }

    /**
     * Set parcInternet
     *
     * @param integer $parcInternet
     * @return Parc
     */
    public function setParcInternet($parcInternet)
    {
        $this->parcInternet = $parcInternet;

        return $this;
    }

    /**
     * Get parcInternet
     *
     * @return integer 
     */
    public function getParcInternet()
    {
        return $this->parcInternet;
    }

    /**
     * Set parcInternetGMobile
     *
     * @param integer $parcInternetGMobile
     * @return Parc
     */
    public function setParcInternetGMobile($parcInternetGMobile)
    {
        $this->parcInternetGMobile = $parcInternetGMobile;

        return $this;
    }

    /**
     * Get parcInternetGMobile
     *
     * @return integer 
     */
    public function getParcInternetGMobile()
    {
        return $this->parcInternetGMobile;
    }

    /**
     * Set parcInternetGAutre
     *
     * @param integer $parcInternetGAutre
     * @return Parc
     */
    public function setParcInternetGAutre($parcInternetGAutre)
    {
        $this->parcInternetGAutre = $parcInternetGAutre;

        return $this;
    }

    /**
     * Get parcInternetGAutre
     *
     * @return integer 
     */
    public function getParcInternetGAutre()
    {
        return $this->parcInternetGAutre;
    }

    /**
     * Set parcInternetBaDebit
     *
     * @param integer $parcInternetBaDebit
     * @return Parc
     */
    public function setParcInternetBaDebit($parcInternetBaDebit)
    {
        $this->parcInternetBaDebit = $parcInternetBaDebit;

        return $this;
    }

    /**
     * Get parcInternetBaDebit
     *
     * @return integer 
     */
    public function getParcInternetBaDebit()
    {
        return $this->parcInternetBaDebit;
    }

    /**
     * Set parcNomDomaine
     *
     * @param integer $parcNomDomaine
     * @return Parc
     */
    public function setParcNomDomaine($parcNomDomaine)
    {
        $this->parcNomDomaine = $parcNomDomaine;

        return $this;
    }

    /**
     * Get parcNomDomaine
     *
     * @return integer 
     */
    public function getParcNomDomaine()
    {
        return $this->parcNomDomaine;
    }
}
