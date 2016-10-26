<?php

namespace Ictdata\IctdataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * D_infrastruct_autre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ictdata\IctdataBundle\Entity\D_infrastruct_autreRepository")
 */
class D_infrastruct_autre
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
     * @ORM\Column(name="i_date", type="date")
     */
    private $iDate;

    /**
     * @var float
     *
     * @ORM\Column(name="i_bp_internet", type="float")
     */
    private $iBpInternet;

    /**
     * @var float
     *
     * @ORM\Column(name="i_nbr_presta_ma_total", type="float")
     */
    private $iNbrPrestaMaTotal;

    /**
     * @var float
     *
     * @ORM\Column(name="i_nbr_presta_ma_new", type="float")
     */
    private $iNbrPrestaMaNew;

    /**
     * @var float
     *
     * @ORM\Column(name="i_nbr_lir_marocains", type="float")
     */
    private $iNbrLirMarocains;

    /**
     * @var float
     *
     * @ORM\Column(name="i_parc_maroc_ipv4_afrinic", type="float")
     */
    private $iParcMarocIpv4Afrinic;

    /**
     * @var float
     *
     * @ORM\Column(name="i_stock_ipv4_afrinic", type="float")
     */
    private $iStockIpv4Afrinic;

    /**
     * @var float
     *
     * @ORM\Column(name="i_nbr_ipv4_allouees", type="float")
     */
    private $iNbrIpv4Allouees;

    /**
     * @var float
     *
     * @ORM\Column(name="i_repart_ipv4_lir_maroc", type="float")
     */
    private $iRepartIpv4LirMaroc;

    /**
     * @var float
     *
     * @ORM\Column(name="i_etat_epuis_ipv4", type="float")
     */
    private $iEtatEpuisIpv4;

    /**
     * @var float
     *
     * @ORM\Column(name="i_plage_ipv6_maroc", type="float")
     */
    private $iPlageIpv6Maroc;


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
     * Set iDate
     *
     * @param \DateTime $iDate
     * @return D_infrastruct_autre
     */
    public function setIDate($iDate)
    {
        $this->iDate = $iDate;

        return $this;
    }

    /**
     * Get iDate
     *
     * @return \DateTime 
     */
    public function getIDate()
    {
        return $this->iDate;
    }

    /**
     * Set iBpInternet
     *
     * @param float $iBpInternet
     * @return D_infrastruct_autre
     */
    public function setIBpInternet($iBpInternet)
    {
        $this->iBpInternet = $iBpInternet;

        return $this;
    }

    /**
     * Get iBpInternet
     *
     * @return float 
     */
    public function getIBpInternet()
    {
        return $this->iBpInternet;
    }

    /**
     * Set iNbrPrestaMaTotal
     *
     * @param float $iNbrPrestaMaTotal
     * @return D_infrastruct_autre
     */
    public function setINbrPrestaMaTotal($iNbrPrestaMaTotal)
    {
        $this->iNbrPrestaMaTotal = $iNbrPrestaMaTotal;

        return $this;
    }

    /**
     * Get iNbrPrestaMaTotal
     *
     * @return float 
     */
    public function getINbrPrestaMaTotal()
    {
        return $this->iNbrPrestaMaTotal;
    }

    /**
     * Set iNbrPrestaMaNew
     *
     * @param float $iNbrPrestaMaNew
     * @return D_infrastruct_autre
     */
    public function setINbrPrestaMaNew($iNbrPrestaMaNew)
    {
        $this->iNbrPrestaMaNew = $iNbrPrestaMaNew;

        return $this;
    }

    /**
     * Get iNbrPrestaMaNew
     *
     * @return float 
     */
    public function getINbrPrestaMaNew()
    {
        return $this->iNbrPrestaMaNew;
    }

    /**
     * Set iNbrLirMarocains
     *
     * @param float $iNbrLirMarocains
     * @return D_infrastruct_autre
     */
    public function setINbrLirMarocains($iNbrLirMarocains)
    {
        $this->iNbrLirMarocains = $iNbrLirMarocains;

        return $this;
    }

    /**
     * Get iNbrLirMarocains
     *
     * @return float 
     */
    public function getINbrLirMarocains()
    {
        return $this->iNbrLirMarocains;
    }

    /**
     * Set iParcMarocIpv4Afrinic
     *
     * @param float $iParcMarocIpv4Afrinic
     * @return D_infrastruct_autre
     */
    public function setIParcMarocIpv4Afrinic($iParcMarocIpv4Afrinic)
    {
        $this->iParcMarocIpv4Afrinic = $iParcMarocIpv4Afrinic;

        return $this;
    }

    /**
     * Get iParcMarocIpv4Afrinic
     *
     * @return float 
     */
    public function getIParcMarocIpv4Afrinic()
    {
        return $this->iParcMarocIpv4Afrinic;
    }

    /**
     * Set iStockIpv4Afrinic
     *
     * @param float $iStockIpv4Afrinic
     * @return D_infrastruct_autre
     */
    public function setIStockIpv4Afrinic($iStockIpv4Afrinic)
    {
        $this->iStockIpv4Afrinic = $iStockIpv4Afrinic;

        return $this;
    }

    /**
     * Get iStockIpv4Afrinic
     *
     * @return float 
     */
    public function getIStockIpv4Afrinic()
    {
        return $this->iStockIpv4Afrinic;
    }

    /**
     * Set iNbrIpv4Allouees
     *
     * @param float $iNbrIpv4Allouees
     * @return D_infrastruct_autre
     */
    public function setINbrIpv4Allouees($iNbrIpv4Allouees)
    {
        $this->iNbrIpv4Allouees = $iNbrIpv4Allouees;

        return $this;
    }

    /**
     * Get iNbrIpv4Allouees
     *
     * @return float 
     */
    public function getINbrIpv4Allouees()
    {
        return $this->iNbrIpv4Allouees;
    }

    /**
     * Set iRepartIpv4LirMaroc
     *
     * @param float $iRepartIpv4LirMaroc
     * @return D_infrastruct_autre
     */
    public function setIRepartIpv4LirMaroc($iRepartIpv4LirMaroc)
    {
        $this->iRepartIpv4LirMaroc = $iRepartIpv4LirMaroc;

        return $this;
    }

    /**
     * Get iRepartIpv4LirMaroc
     *
     * @return float 
     */
    public function getIRepartIpv4LirMaroc()
    {
        return $this->iRepartIpv4LirMaroc;
    }

    /**
     * Set iEtatEpuisIpv4
     *
     * @param float $iEtatEpuisIpv4
     * @return D_infrastruct_autre
     */
    public function setIEtatEpuisIpv4($iEtatEpuisIpv4)
    {
        $this->iEtatEpuisIpv4 = $iEtatEpuisIpv4;

        return $this;
    }

    /**
     * Get iEtatEpuisIpv4
     *
     * @return float 
     */
    public function getIEtatEpuisIpv4()
    {
        return $this->iEtatEpuisIpv4;
    }

    /**
     * Set iPlageIpv6Maroc
     *
     * @param float $iPlageIpv6Maroc
     * @return D_infrastruct_autre
     */
    public function setIPlageIpv6Maroc($iPlageIpv6Maroc)
    {
        $this->iPlageIpv6Maroc = $iPlageIpv6Maroc;

        return $this;
    }

    /**
     * Get iPlageIpv6Maroc
     *
     * @return float 
     */
    public function getIPlageIpv6Maroc()
    {
        return $this->iPlageIpv6Maroc;
    }
}
