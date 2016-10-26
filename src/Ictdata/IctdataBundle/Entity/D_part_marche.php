<?php

namespace Ictdata\IctdataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * D_part_marche
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ictdata\IctdataBundle\Entity\D_part_marcheRepository")
 */
class D_part_marche
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
     * @var float
     *
     * @ORM\Column(name="part_date", type="float")
     */
    private $partDate;

    /**
     * @var float
     *
     * @ORM\Column(name="part_parc_mobile_post_iam", type="float")
     */
    private $partParcMobilePostIam;

    /**
     * @var float
     *
     * @ORM\Column(name="part_parc_mobile_pre_iam", type="float")
     */
    private $partParcMobilePreIam;

    /**
     * @var float
     *
     * @ORM\Column(name="part_parc_mobile_post_med", type="float")
     */
    private $partParcMobilePostMed;

    /**
     * @var float
     *
     * @ORM\Column(name="part_parc_mobile_pre_med", type="float")
     */
    private $partParcMobilePreMed;

    /**
     * @var float
     *
     * @ORM\Column(name="part_parc_mobile_post_wana", type="float")
     */
    private $partParcMobilePostWana;

    /**
     * @var float
     *
     * @ORM\Column(name="part_parc_mobile_pre_wana", type="float")
     */
    private $partParcMobilePreWana;

    /**
     * @var float
     *
     * @ORM\Column(name="part_parc_fixe_resid_iam", type="float")
     */
    private $partParcFixeResidIam;

    /**
     * @var float
     *
     * @ORM\Column(name="part_parc_fixe_prof_iam", type="float")
     */
    private $partParcFixeProfIam;

    /**
     * @var float
     *
     * @ORM\Column(name="part_parc_fixe_resid_med", type="float")
     */
    private $partParcFixeResidMed;

    /**
     * @var float
     *
     * @ORM\Column(name="part_parc_fixe_prof_med", type="float")
     */
    private $partParcFixeProfMed;

    /**
     * @var float
     *
     * @ORM\Column(name="part_parc_fixe_resid_wana", type="float")
     */
    private $partParcFixeResidWana;

    /**
     * @var float
     *
     * @ORM\Column(name="part_parc_fixe_prof_wana", type="float")
     */
    private $partParcFixeProfWana;

    /**
     * @var float
     *
     * @ORM\Column(name="part_parc_lignes_publi_iam", type="float")
     */
    private $partParcLignesPubliIam;

    /**
     * @var float
     *
     * @ORM\Column(name="part_parc_lignes_publi_med", type="float")
     */
    private $partParcLignesPubliMed;

    /**
     * @var float
     *
     * @ORM\Column(name="part_parc_internet_adsl_iam", type="float")
     */
    private $partParcInternetAdslIam;

    /**
     * @var float
     *
     * @ORM\Column(name="part_parc_internet_mobile_iam", type="float")
     */
    private $partParcInternetMobileIam;

    /**
     * @var float
     *
     * @ORM\Column(name="part_parc_internet_adsl_med", type="float")
     */
    private $partParcInternetAdslMed;

    /**
     * @var string
     *
     * @ORM\Column(name="part_parc_internet_mobile_med", type="string", length=255)
     */
    private $partParcInternetMobileMed;


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
     * Set partDate
     *
     * @param float $partDate
     * @return D_part_marche
     */
    public function setPartDate($partDate)
    {
        $this->partDate = $partDate;

        return $this;
    }

    /**
     * Get partDate
     *
     * @return float 
     */
    public function getPartDate()
    {
        return $this->partDate;
    }

    /**
     * Set partParcMobilePostIam
     *
     * @param float $partParcMobilePostIam
     * @return D_part_marche
     */
    public function setPartParcMobilePostIam($partParcMobilePostIam)
    {
        $this->partParcMobilePostIam = $partParcMobilePostIam;

        return $this;
    }

    /**
     * Get partParcMobilePostIam
     *
     * @return float 
     */
    public function getPartParcMobilePostIam()
    {
        return $this->partParcMobilePostIam;
    }

    /**
     * Set partParcMobilePreIam
     *
     * @param float $partParcMobilePreIam
     * @return D_part_marche
     */
    public function setPartParcMobilePreIam($partParcMobilePreIam)
    {
        $this->partParcMobilePreIam = $partParcMobilePreIam;

        return $this;
    }

    /**
     * Get partParcMobilePreIam
     *
     * @return float 
     */
    public function getPartParcMobilePreIam()
    {
        return $this->partParcMobilePreIam;
    }

    /**
     * Set partParcMobilePostMed
     *
     * @param float $partParcMobilePostMed
     * @return D_part_marche
     */
    public function setPartParcMobilePostMed($partParcMobilePostMed)
    {
        $this->partParcMobilePostMed = $partParcMobilePostMed;

        return $this;
    }

    /**
     * Get partParcMobilePostMed
     *
     * @return float 
     */
    public function getPartParcMobilePostMed()
    {
        return $this->partParcMobilePostMed;
    }

    /**
     * Set partParcMobilePreMed
     *
     * @param float $partParcMobilePreMed
     * @return D_part_marche
     */
    public function setPartParcMobilePreMed($partParcMobilePreMed)
    {
        $this->partParcMobilePreMed = $partParcMobilePreMed;

        return $this;
    }

    /**
     * Get partParcMobilePreMed
     *
     * @return float 
     */
    public function getPartParcMobilePreMed()
    {
        return $this->partParcMobilePreMed;
    }

    /**
     * Set partParcMobilePostWana
     *
     * @param float $partParcMobilePostWana
     * @return D_part_marche
     */
    public function setPartParcMobilePostWana($partParcMobilePostWana)
    {
        $this->partParcMobilePostWana = $partParcMobilePostWana;

        return $this;
    }

    /**
     * Get partParcMobilePostWana
     *
     * @return float 
     */
    public function getPartParcMobilePostWana()
    {
        return $this->partParcMobilePostWana;
    }

    /**
     * Set partParcMobilePreWana
     *
     * @param float $partParcMobilePreWana
     * @return D_part_marche
     */
    public function setPartParcMobilePreWana($partParcMobilePreWana)
    {
        $this->partParcMobilePreWana = $partParcMobilePreWana;

        return $this;
    }

    /**
     * Get partParcMobilePreWana
     *
     * @return float 
     */
    public function getPartParcMobilePreWana()
    {
        return $this->partParcMobilePreWana;
    }

    /**
     * Set partParcFixeResidIam
     *
     * @param float $partParcFixeResidIam
     * @return D_part_marche
     */
    public function setPartParcFixeResidIam($partParcFixeResidIam)
    {
        $this->partParcFixeResidIam = $partParcFixeResidIam;

        return $this;
    }

    /**
     * Get partParcFixeResidIam
     *
     * @return float 
     */
    public function getPartParcFixeResidIam()
    {
        return $this->partParcFixeResidIam;
    }

    /**
     * Set partParcFixeProfIam
     *
     * @param float $partParcFixeProfIam
     * @return D_part_marche
     */
    public function setPartParcFixeProfIam($partParcFixeProfIam)
    {
        $this->partParcFixeProfIam = $partParcFixeProfIam;

        return $this;
    }

    /**
     * Get partParcFixeProfIam
     *
     * @return float 
     */
    public function getPartParcFixeProfIam()
    {
        return $this->partParcFixeProfIam;
    }

    /**
     * Set partParcFixeResidMed
     *
     * @param float $partParcFixeResidMed
     * @return D_part_marche
     */
    public function setPartParcFixeResidMed($partParcFixeResidMed)
    {
        $this->partParcFixeResidMed = $partParcFixeResidMed;

        return $this;
    }

    /**
     * Get partParcFixeResidMed
     *
     * @return float 
     */
    public function getPartParcFixeResidMed()
    {
        return $this->partParcFixeResidMed;
    }

    /**
     * Set partParcFixeProfMed
     *
     * @param float $partParcFixeProfMed
     * @return D_part_marche
     */
    public function setPartParcFixeProfMed($partParcFixeProfMed)
    {
        $this->partParcFixeProfMed = $partParcFixeProfMed;

        return $this;
    }

    /**
     * Get partParcFixeProfMed
     *
     * @return float 
     */
    public function getPartParcFixeProfMed()
    {
        return $this->partParcFixeProfMed;
    }

    /**
     * Set partParcFixeResidWana
     *
     * @param float $partParcFixeResidWana
     * @return D_part_marche
     */
    public function setPartParcFixeResidWana($partParcFixeResidWana)
    {
        $this->partParcFixeResidWana = $partParcFixeResidWana;

        return $this;
    }

    /**
     * Get partParcFixeResidWana
     *
     * @return float 
     */
    public function getPartParcFixeResidWana()
    {
        return $this->partParcFixeResidWana;
    }

    /**
     * Set partParcFixeProfWana
     *
     * @param float $partParcFixeProfWana
     * @return D_part_marche
     */
    public function setPartParcFixeProfWana($partParcFixeProfWana)
    {
        $this->partParcFixeProfWana = $partParcFixeProfWana;

        return $this;
    }

    /**
     * Get partParcFixeProfWana
     *
     * @return float 
     */
    public function getPartParcFixeProfWana()
    {
        return $this->partParcFixeProfWana;
    }

    /**
     * Set partParcLignesPubliIam
     *
     * @param float $partParcLignesPubliIam
     * @return D_part_marche
     */
    public function setPartParcLignesPubliIam($partParcLignesPubliIam)
    {
        $this->partParcLignesPubliIam = $partParcLignesPubliIam;

        return $this;
    }

    /**
     * Get partParcLignesPubliIam
     *
     * @return float 
     */
    public function getPartParcLignesPubliIam()
    {
        return $this->partParcLignesPubliIam;
    }

    /**
     * Set partParcLignesPubliMed
     *
     * @param float $partParcLignesPubliMed
     * @return D_part_marche
     */
    public function setPartParcLignesPubliMed($partParcLignesPubliMed)
    {
        $this->partParcLignesPubliMed = $partParcLignesPubliMed;

        return $this;
    }

    /**
     * Get partParcLignesPubliMed
     *
     * @return float 
     */
    public function getPartParcLignesPubliMed()
    {
        return $this->partParcLignesPubliMed;
    }

    /**
     * Set partParcInternetAdslIam
     *
     * @param float $partParcInternetAdslIam
     * @return D_part_marche
     */
    public function setPartParcInternetAdslIam($partParcInternetAdslIam)
    {
        $this->partParcInternetAdslIam = $partParcInternetAdslIam;

        return $this;
    }

    /**
     * Get partParcInternetAdslIam
     *
     * @return float 
     */
    public function getPartParcInternetAdslIam()
    {
        return $this->partParcInternetAdslIam;
    }

    /**
     * Set partParcInternetMobileIam
     *
     * @param float $partParcInternetMobileIam
     * @return D_part_marche
     */
    public function setPartParcInternetMobileIam($partParcInternetMobileIam)
    {
        $this->partParcInternetMobileIam = $partParcInternetMobileIam;

        return $this;
    }

    /**
     * Get partParcInternetMobileIam
     *
     * @return float 
     */
    public function getPartParcInternetMobileIam()
    {
        return $this->partParcInternetMobileIam;
    }

    /**
     * Set partParcInternetAdslMed
     *
     * @param float $partParcInternetAdslMed
     * @return D_part_marche
     */
    public function setPartParcInternetAdslMed($partParcInternetAdslMed)
    {
        $this->partParcInternetAdslMed = $partParcInternetAdslMed;

        return $this;
    }

    /**
     * Get partParcInternetAdslMed
     *
     * @return float 
     */
    public function getPartParcInternetAdslMed()
    {
        return $this->partParcInternetAdslMed;
    }

    /**
     * Set partParcInternetMobileMed
     *
     * @param string $partParcInternetMobileMed
     * @return D_part_marche
     */
    public function setPartParcInternetMobileMed($partParcInternetMobileMed)
    {
        $this->partParcInternetMobileMed = $partParcInternetMobileMed;

        return $this;
    }

    /**
     * Get partParcInternetMobileMed
     *
     * @return string 
     */
    public function getPartParcInternetMobileMed()
    {
        return $this->partParcInternetMobileMed;
    }
}
