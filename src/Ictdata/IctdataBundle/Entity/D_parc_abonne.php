<?php

namespace Ictdata\IctdataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * D_parc_abonne
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ictdata\IctdataBundle\Entity\D_parc_abonneRepository")
 */
class D_parc_abonne
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
     * @ORM\Column(name="p_date", type="date")
     */
    private $pDate;

    /**
     * @var float
     *
     * @ORM\Column(name="p_mobile_post_paye", type="float")
     */
    private $pMobilePostPaye;

    /**
     * @var float
     *
     * @ORM\Column(name="p_mobile_pre_paye", type="float")
     */
    private $pMobilePrePaye;

    /**
     * @var float
     *
     * @ORM\Column(name="p_fixe_mobilite_restreinte", type="float")
     */
    private $pFixeMobiliteRestreinte;

    /**
     * @var float
     *
     * @ORM\Column(name="p_fixe_residentiel", type="float")
     */
    private $pFixeResidentiel;

    /**
     * @var float
     *
     * @ORM\Column(name="p_publiphone_lignes", type="float")
     */
    private $pPubliphoneLignes;

    /**
     * @var float
     *
     * @ORM\Column(name="p_internet_globale_adsl", type="float")
     */
    private $pInternetGlobaleAdsl;

    /**
     * @var float
     *
     * @ORM\Column(name="p_internet_globale_mobile", type="float")
     */
    private $pInternetGlobaleMobile;

    /**
     * @var float
     *
     * @ORM\Column(name="p_internet_globale_autre", type="float")
     */
    private $pInternetGlobaleAutre;

    /**
     * @var float
     *
     * @ORM\Column(name="p_internet_basdebit", type="float")
     */
    private $pInternetBasdebit;

    /**
     * @var float
     *
     * @ORM\Column(name="p_internet", type="float")
     */
    private $pInternet;

    /**
     * @var float
     *
     * @ORM\Column(name="p_nom_domain_ma", type="float")
     */
    private $pNomDomainMa;

    /**
     * @var float
     *
     * @ORM\Column(name="p_repart_ma", type="float")
     */
    private $pRepartMa;

    /**
     * @var float
     *
     * @ORM\Column(name="p_repart_autre", type="float")
     */
    private $pRepartAutre;

    /**
     * @var float
     *
     * @ORM\Column(name="p_new_enregist_trimestre", type="float")
     */
    private $pNewEnregistTrimestre;


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
     * Set pDate
     *
     * @param \DateTime $pDate
     * @return D_parc_abonne
     */
    public function setPDate($pDate)
    {
        $this->pDate = $pDate;

        return $this;
    }

    /**
     * Get pDate
     *
     * @return \DateTime 
     */
    public function getPDate()
    {
        return $this->pDate;
    }

    /**
     * Set pMobilePostPaye
     *
     * @param float $pMobilePostPaye
     * @return D_parc_abonne
     */
    public function setPMobilePostPaye($pMobilePostPaye)
    {
        $this->pMobilePostPaye = $pMobilePostPaye;

        return $this;
    }

    /**
     * Get pMobilePostPaye
     *
     * @return float 
     */
    public function getPMobilePostPaye()
    {
        return $this->pMobilePostPaye;
    }

    /**
     * Set pMobilePrePaye
     *
     * @param float $pMobilePrePaye
     * @return D_parc_abonne
     */
    public function setPMobilePrePaye($pMobilePrePaye)
    {
        $this->pMobilePrePaye = $pMobilePrePaye;

        return $this;
    }

    /**
     * Get pMobilePrePaye
     *
     * @return float 
     */
    public function getPMobilePrePaye()
    {
        return $this->pMobilePrePaye;
    }

    /**
     * Set pFixeMobiliteRestreinte
     *
     * @param float $pFixeMobiliteRestreinte
     * @return D_parc_abonne
     */
    public function setPFixeMobiliteRestreinte($pFixeMobiliteRestreinte)
    {
        $this->pFixeMobiliteRestreinte = $pFixeMobiliteRestreinte;

        return $this;
    }

    /**
     * Get pFixeMobiliteRestreinte
     *
     * @return float 
     */
    public function getPFixeMobiliteRestreinte()
    {
        return $this->pFixeMobiliteRestreinte;
    }

    /**
     * Set pFixeResidentiel
     *
     * @param float $pFixeResidentiel
     * @return D_parc_abonne
     */
    public function setPFixeResidentiel($pFixeResidentiel)
    {
        $this->pFixeResidentiel = $pFixeResidentiel;

        return $this;
    }

    /**
     * Get pFixeResidentiel
     *
     * @return float 
     */
    public function getPFixeResidentiel()
    {
        return $this->pFixeResidentiel;
    }

    /**
     * Set pPubliphoneLignes
     *
     * @param float $pPubliphoneLignes
     * @return D_parc_abonne
     */
    public function setPPubliphoneLignes($pPubliphoneLignes)
    {
        $this->pPubliphoneLignes = $pPubliphoneLignes;

        return $this;
    }

    /**
     * Get pPubliphoneLignes
     *
     * @return float 
     */
    public function getPPubliphoneLignes()
    {
        return $this->pPubliphoneLignes;
    }

    /**
     * Set pInternetGlobaleAdsl
     *
     * @param float $pInternetGlobaleAdsl
     * @return D_parc_abonne
     */
    public function setPInternetGlobaleAdsl($pInternetGlobaleAdsl)
    {
        $this->pInternetGlobaleAdsl = $pInternetGlobaleAdsl;

        return $this;
    }

    /**
     * Get pInternetGlobaleAdsl
     *
     * @return float 
     */
    public function getPInternetGlobaleAdsl()
    {
        return $this->pInternetGlobaleAdsl;
    }

    /**
     * Set pInternetGlobaleMobile
     *
     * @param float $pInternetGlobaleMobile
     * @return D_parc_abonne
     */
    public function setPInternetGlobaleMobile($pInternetGlobaleMobile)
    {
        $this->pInternetGlobaleMobile = $pInternetGlobaleMobile;

        return $this;
    }

    /**
     * Get pInternetGlobaleMobile
     *
     * @return float 
     */
    public function getPInternetGlobaleMobile()
    {
        return $this->pInternetGlobaleMobile;
    }

    /**
     * Set pInternetGlobaleAutre
     *
     * @param float $pInternetGlobaleAutre
     * @return D_parc_abonne
     */
    public function setPInternetGlobaleAutre($pInternetGlobaleAutre)
    {
        $this->pInternetGlobaleAutre = $pInternetGlobaleAutre;

        return $this;
    }

    /**
     * Get pInternetGlobaleAutre
     *
     * @return float 
     */
    public function getPInternetGlobaleAutre()
    {
        return $this->pInternetGlobaleAutre;
    }

    /**
     * Set pInternetBasdebit
     *
     * @param float $pInternetBasdebit
     * @return D_parc_abonne
     */
    public function setPInternetBasdebit($pInternetBasdebit)
    {
        $this->pInternetBasdebit = $pInternetBasdebit;

        return $this;
    }

    /**
     * Get pInternetBasdebit
     *
     * @return float 
     */
    public function getPInternetBasdebit()
    {
        return $this->pInternetBasdebit;
    }

    /**
     * Set pInternet
     *
     * @param float $pInternet
     * @return D_parc_abonne
     */
    public function setPInternet($pInternet)
    {
        $this->pInternet = $pInternet;

        return $this;
    }

    /**
     * Get pInternet
     *
     * @return float 
     */
    public function getPInternet()
    {
        return $this->pInternet;
    }

    /**
     * Set pNomDomainMa
     *
     * @param float $pNomDomainMa
     * @return D_parc_abonne
     */
    public function setPNomDomainMa($pNomDomainMa)
    {
        $this->pNomDomainMa = $pNomDomainMa;

        return $this;
    }

    /**
     * Get pNomDomainMa
     *
     * @return float 
     */
    public function getPNomDomainMa()
    {
        return $this->pNomDomainMa;
    }

    /**
     * Set pRepartMa
     *
     * @param float $pRepartMa
     * @return D_parc_abonne
     */
    public function setPRepartMa($pRepartMa)
    {
        $this->pRepartMa = $pRepartMa;

        return $this;
    }

    /**
     * Get pRepartMa
     *
     * @return float 
     */
    public function getPRepartMa()
    {
        return $this->pRepartMa;
    }

    /**
     * Set pRepartAutre
     *
     * @param float $pRepartAutre
     * @return D_parc_abonne
     */
    public function setPRepartAutre($pRepartAutre)
    {
        $this->pRepartAutre = $pRepartAutre;

        return $this;
    }

    /**
     * Get pRepartAutre
     *
     * @return float 
     */
    public function getPRepartAutre()
    {
        return $this->pRepartAutre;
    }

    /**
     * Set pNewEnregistTrimestre
     *
     * @param float $pNewEnregistTrimestre
     * @return D_parc_abonne
     */
    public function setPNewEnregistTrimestre($pNewEnregistTrimestre)
    {
        $this->pNewEnregistTrimestre = $pNewEnregistTrimestre;

        return $this;
    }

    /**
     * Get pNewEnregistTrimestre
     *
     * @return float 
     */
    public function getPNewEnregistTrimestre()
    {
        return $this->pNewEnregistTrimestre;
    }
}
