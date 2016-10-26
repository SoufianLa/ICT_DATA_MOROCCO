<?php

namespace Ictdata\IctdataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * E_enquete
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ictdata\IctdataBundle\Entity\E_enqueteRepository")
 */
class E_enquete
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
     * @ORM\Column(name="e_date", type="date")
     */
    private $eDate;

    /**
     * @var float
     *
     * @ORM\Column(name="e_menages_fixe", type="float")
     */
    private $eMenagesFixe;

    /**
     * @var float
     *
     * @ORM\Column(name="e_menages_mobile", type="float")
     */
    private $eMenagesMobile;

    /**
     * @var float
     *
     * @ORM\Column(name="e_individus_mobile", type="float")
     */
    private $eIndividusMobile;

    /**
     * @var float
     *
     * @ORM\Column(name="e_individus_mobile_internet", type="float")
     */
    private $eIndividusMobileInternet;

    /**
     * @var float
     *
     * @ORM\Column(name="e_individus_smartphone", type="float")
     */
    private $eIndividusSmartphone;

    /**
     * @var float
     *
     * @ORM\Column(name="e_menages_ordinateur_bureau", type="float")
     */
    private $eMenagesOrdinateurBureau;

    /**
     * @var float
     *
     * @ORM\Column(name="e_menages_ordinateur_pc", type="float")
     */
    private $eMenagesOrdinateurPc;

    /**
     * @var float
     *
     * @ORM\Column(name="e_menages_ordinateur_tablette", type="float")
     */
    private $eMenagesOrdinateurTablette;

    /**
     * @var float
     *
     * @ORM\Column(name="e_menages_internet_fixe", type="float")
     */
    private $eMenagesInternetFixe;

    /**
     * @var float
     *
     * @ORM\Column(name="e_menages_internet_mobile", type="float")
     */
    private $eMenagesInternetMobile;

    /**
     * @var float
     *
     * @ORM\Column(name="e_menages_internet_mobile_fixe", type="float")
     */
    private $eMenagesInternetMobileFixe;

    /**
     * @var float
     *
     * @ORM\Column(name="e_individus_internet", type="float")
     */
    private $eIndividusInternet;

    /**
     * @var float
     *
     * @ORM\Column(name="e_nbr_internautes", type="float")
     */
    private $eNbrInternautes;


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
     * Set eDate
     *
     * @param \DateTime $eDate
     * @return E_enquete
     */
    public function setEDate($eDate)
    {
        $this->eDate = $eDate;

        return $this;
    }

    /**
     * Get eDate
     *
     * @return \DateTime 
     */
    public function getEDate()
    {
        return $this->eDate;
    }

    /**
     * Set eMenagesFixe
     *
     * @param float $eMenagesFixe
     * @return E_enquete
     */
    public function setEMenagesFixe($eMenagesFixe)
    {
        $this->eMenagesFixe = $eMenagesFixe;

        return $this;
    }

    /**
     * Get eMenagesFixe
     *
     * @return float 
     */
    public function getEMenagesFixe()
    {
        return $this->eMenagesFixe;
    }

    /**
     * Set eMenagesMobile
     *
     * @param float $eMenagesMobile
     * @return E_enquete
     */
    public function setEMenagesMobile($eMenagesMobile)
    {
        $this->eMenagesMobile = $eMenagesMobile;

        return $this;
    }

    /**
     * Get eMenagesMobile
     *
     * @return float 
     */
    public function getEMenagesMobile()
    {
        return $this->eMenagesMobile;
    }

    /**
     * Set eIndividusMobile
     *
     * @param float $eIndividusMobile
     * @return E_enquete
     */
    public function setEIndividusMobile($eIndividusMobile)
    {
        $this->eIndividusMobile = $eIndividusMobile;

        return $this;
    }

    /**
     * Get eIndividusMobile
     *
     * @return float 
     */
    public function getEIndividusMobile()
    {
        return $this->eIndividusMobile;
    }

    /**
     * Set eIndividusMobileInternet
     *
     * @param float $eIndividusMobileInternet
     * @return E_enquete
     */
    public function setEIndividusMobileInternet($eIndividusMobileInternet)
    {
        $this->eIndividusMobileInternet = $eIndividusMobileInternet;

        return $this;
    }

    /**
     * Get eIndividusMobileInternet
     *
     * @return float 
     */
    public function getEIndividusMobileInternet()
    {
        return $this->eIndividusMobileInternet;
    }

    /**
     * Set eIndividusSmartphone
     *
     * @param float $eIndividusSmartphone
     * @return E_enquete
     */
    public function setEIndividusSmartphone($eIndividusSmartphone)
    {
        $this->eIndividusSmartphone = $eIndividusSmartphone;

        return $this;
    }

    /**
     * Get eIndividusSmartphone
     *
     * @return float 
     */
    public function getEIndividusSmartphone()
    {
        return $this->eIndividusSmartphone;
    }

    /**
     * Set eMenagesOrdinateurBureau
     *
     * @param float $eMenagesOrdinateurBureau
     * @return E_enquete
     */
    public function setEMenagesOrdinateurBureau($eMenagesOrdinateurBureau)
    {
        $this->eMenagesOrdinateurBureau = $eMenagesOrdinateurBureau;

        return $this;
    }

    /**
     * Get eMenagesOrdinateurBureau
     *
     * @return float 
     */
    public function getEMenagesOrdinateurBureau()
    {
        return $this->eMenagesOrdinateurBureau;
    }

    /**
     * Set eMenagesOrdinateurPc
     *
     * @param float $eMenagesOrdinateurPc
     * @return E_enquete
     */
    public function setEMenagesOrdinateurPc($eMenagesOrdinateurPc)
    {
        $this->eMenagesOrdinateurPc = $eMenagesOrdinateurPc;

        return $this;
    }

    /**
     * Get eMenagesOrdinateurPc
     *
     * @return float 
     */
    public function getEMenagesOrdinateurPc()
    {
        return $this->eMenagesOrdinateurPc;
    }

    /**
     * Set eMenagesOrdinateurTablette
     *
     * @param float $eMenagesOrdinateurTablette
     * @return E_enquete
     */
    public function setEMenagesOrdinateurTablette($eMenagesOrdinateurTablette)
    {
        $this->eMenagesOrdinateurTablette = $eMenagesOrdinateurTablette;

        return $this;
    }

    /**
     * Get eMenagesOrdinateurTablette
     *
     * @return float 
     */
    public function getEMenagesOrdinateurTablette()
    {
        return $this->eMenagesOrdinateurTablette;
    }

    /**
     * Set eMenagesInternetFixe
     *
     * @param float $eMenagesInternetFixe
     * @return E_enquete
     */
    public function setEMenagesInternetFixe($eMenagesInternetFixe)
    {
        $this->eMenagesInternetFixe = $eMenagesInternetFixe;

        return $this;
    }

    /**
     * Get eMenagesInternetFixe
     *
     * @return float 
     */
    public function getEMenagesInternetFixe()
    {
        return $this->eMenagesInternetFixe;
    }

    /**
     * Set eMenagesInternetMobile
     *
     * @param float $eMenagesInternetMobile
     * @return E_enquete
     */
    public function setEMenagesInternetMobile($eMenagesInternetMobile)
    {
        $this->eMenagesInternetMobile = $eMenagesInternetMobile;

        return $this;
    }

    /**
     * Get eMenagesInternetMobile
     *
     * @return float 
     */
    public function getEMenagesInternetMobile()
    {
        return $this->eMenagesInternetMobile;
    }

    /**
     * Set eMenagesInternetMobileFixe
     *
     * @param float $eMenagesInternetMobileFixe
     * @return E_enquete
     */
    public function setEMenagesInternetMobileFixe($eMenagesInternetMobileFixe)
    {
        $this->eMenagesInternetMobileFixe = $eMenagesInternetMobileFixe;

        return $this;
    }

    /**
     * Get eMenagesInternetMobileFixe
     *
     * @return float 
     */
    public function getEMenagesInternetMobileFixe()
    {
        return $this->eMenagesInternetMobileFixe;
    }

    /**
     * Set eIndividusInternet
     *
     * @param float $eIndividusInternet
     * @return E_enquete
     */
    public function setEIndividusInternet($eIndividusInternet)
    {
        $this->eIndividusInternet = $eIndividusInternet;

        return $this;
    }

    /**
     * Get eIndividusInternet
     *
     * @return float 
     */
    public function getEIndividusInternet()
    {
        return $this->eIndividusInternet;
    }

    /**
     * Set eNbrInternautes
     *
     * @param float $eNbrInternautes
     * @return E_enquete
     */
    public function setENbrInternautes($eNbrInternautes)
    {
        $this->eNbrInternautes = $eNbrInternautes;

        return $this;
    }

    /**
     * Get eNbrInternautes
     *
     * @return float 
     */
    public function getENbrInternautes()
    {
        return $this->eNbrInternautes;
    }
}
