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
     * @ORM\Column(name="p_fixe_professionnel", type="float")
     */
    private $pFixeProfessionnel;
    /**
     * @var float
     *
     * @ORM\Column(name="p_fixe_global", type="float")
     */
    private $pFixeGlobal;
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
     * @ORM\Column(name="p_internet_classique", type="float")
     */
    private $pInternetClassique;
    /**
     * @var float
     *
     * @ORM\Column(name="p_internet_forfait", type="float", nullable=true)
     */
    private $pInternetForfait = null;
    /**
     * @var float
     *
     * @ORM\Column(name="p_internet_adsl", type="float")
     */
    private $pInternetAdsl;
    /**
     * @var float
     *
     * @ORM\Column(name="p_internet_adsl_debit128k", type="float")
     */
    private $pInternetAdsldebit128k;
    /**
     * @var float
     *
     * @ORM\Column(name="p_internet_adsl_debit153k", type="float")
     */
    private $pInternetAdsldebit153k;
    /**
     * @var float
     *
     * @ORM\Column(name="p_internet_adsl_debit256k", type="float")
     */
    private $pInternetAdsldebit256k;
    /**
     * @var float
     *
     * @ORM\Column(name="p_internet_adsl_debit512k", type="float")
     */
    private $pInternetAdsldebit512k;
    /**
     * @var float
     *
     * @ORM\Column(name="p_internet_adsl_debit1024k", type="float")
     */
    private $pInternetAdsldebit1024k;
    /**
     * @var float
     *
     * @ORM\Column(name="p_internet_adsl_debit2M", type="float")
     */
    private $pInternetAdsldebit2M;
    /**
     * @var float
     *
     * @ORM\Column(name="p_internet_adsl_debit4M", type="float")
     */
    private $pInternetAdsldebit4M;
    /**
     * @var float
     *
     * @ORM\Column(name="p_internet_adsl_debit8M", type="float")
     */
    private $pInternetAdsldebit8M;
    /**
     * @var float
     *
     * @ORM\Column(name="p_internet_adsl_debit12M", type="float")
     */
    private $pInternetAdsldebit12M;
    /**
     * @var float
     *
     * @ORM\Column(name="p_internet_adsl_debit20M", type="float")
     */
    private $pInternetAdsldebit20M;
    /**
     * @var float
     *
     * @ORM\Column(name="pll_Internet", type="float")
     */
    private $pllInternet;
    /**
     * @var float
     *
     * @ORM\Column(name="p_Internet3G", type="float", nullable=true)
     */
    private $pInternet3G = null;
    /**
     * @var float
     *
     * @ORM\Column(name="p_Internet3G_Data", type="float", nullable=true)
     */
    private $pInternet3GData = null;
    /**
     * @var float
     *
     * @ORM\Column(name="p_Internet3G_Data_Voi", type="float", nullable=true)
     */
    private $pInternet3GDataVoi = null;

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
     * Set pFixeProfessionnel
     *
     * @param float $pFixeProfessionnel
     * @return D_parc_abonne
     */

    public function setPFixeProfessionnel($pFixeProfessionnel)
    {
        $this->pFixeProfessionnel = $pFixeProfessionnel;

        return $this;
    }
    /**
     * Get pFixeProfessionnel
     *
     * @return float
     */
    public function getPFixeProfessionnel()
    {
        return $this->pFixeProfessionnel;
    }
    /**
     * Set pFixeGlobal
     *
     * @param float $pFixeGlobal
     * @return D_parc_abonne
     */

    public function setPFixeGlobal($pFixeGlobal)
    {
        $this->pFixeGlobal = $pFixeGlobal;

        return $this;
    }

    /**
     * Get pFixeGlobal
     *
     * @return float
     */
    public function getPFixeGlobal()
    {
        return $this->pFixeGlobal;
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
    // Labihi lMengouss !!
    /**
     * Set pInternetClassique
     *
     * @param float $pInternetClassique
     * @return D_parc_abonne
     */
    public function setPInternetClassique($pInternetClassique)
    {
        $this->pInternetClassique = $pInternetClassique;

        return $this;
    }

    /**
     * Get pInternet
     *
     * @return float
     */
    public function getPInternetClassique()
    {
        return $this->pInternetClassique;
    }

    /**
     * Set pInternetForfait
     *
     * @param float $pInternetForfait
     * @return D_parc_abonne
     */
    public function setPInternetForfait($pInternetForfait)
    {
        $this->pInternetForfait = $pInternetForfait;

        return $this;
    }

    /**
     * Get pInternetForfait
     *
     * @return float
     */
    public function getPInternetForfait()
    {
        return $this->pInternetForfait;
    }
    /**
     * Set pInternetAdsl
     *
     * @param float $pInternetAdsl
     * @return D_parc_abonne
     */
    public function setPInternetAdsl($pInternetAdsl)
    {
        $this->pInternetAdsl = $pInternetAdsl;

        return $this;
    }

    /**
     * Get pInternetAdsldebit128k
     *
     * @return float
     */
    public function getPInternetAdsl()
    {
        return $this->pInternetAdsl;
    }
    /**
     * Set pInternetAdsldebit128k
     *
     * @param float $pInternetAdsldebit128k
     * @return D_parc_abonne
     */
    public function setPInternetAdsldebit128k($pInternetAdsldebit128k)
    {
        $this->pInternetAdsldebit128k = $pInternetAdsldebit128k;

        return $this;
    }

    /**
     * Get pInternetAdsldebit128k
     *
     * @return float
     */
    public function getPInternetAdsldebit128k()
    {
        return $this->pInternetAdsldebit128k;
    }

    /**
     * Set pInternetAdsldebit153k
     *
     * @param float $pInternetAdsldebit153k
     * @return D_parc_abonne
     */
    public function setPInternetAdsldebit153k($pInternetAdsldebit153k)
    {
        $this->pInternetAdsldebit153k = $pInternetAdsldebit153k;

        return $this;
    }

    /**
     * Get pInternetAdsldebit153k
     *
     * @return float
     */
    public function getPInternetAdsldebit153k()
    {
        return $this->pInternetAdsldebit153k;
    }

    /**
     * Set pInternetAdsldebit256k
     *
     * @param float $pInternetAdsldebit256k
     * @return D_parc_abonne
     */
    public function setPInternetAdsldebit256k($pInternetAdsldebit256k)
    {
        $this->pInternetAdsldebit256k = $pInternetAdsldebit256k;

        return $this;
    }

    /**
     * Get pInternetAdsldebit256k
     *
     * @return float
     */
    public function getPInternetAdsldebit256k()
    {
        return $this->pInternetAdsldebit256k;
    }
    /**
     * Set pInternetAdsldebit512k
     *
     * @param float $pInternetAdsldebit512k
     * @return D_parc_abonne
     */
    public function setPInternetAdsldebit512k($pInternetAdsldebit512k)
    {
        $this->pInternetAdsldebit512k = $pInternetAdsldebit512k;

        return $this;
    }

    /**
     * Get pInternetAdsldebit512k
     *
     * @return float
     */
    public function getPInternetAdsldebit512k()
    {
        return $this->pInternetAdsldebit512k;
    }
    /**
     * Set pInternetAdsldebit1024k
     *
     * @param float $pInternetAdsldebit1024k
     * @return D_parc_abonne
     */
    public function setPInternetAdsldebit1024k($pInternetAdsldebit1024k)
    {
        $this->pInternetAdsldebit1024k = $pInternetAdsldebit1024k;

        return $this;
    }

    /**
     * Get pInternetAdsldebit1024k
     *
     * @return float
     */
    public function getPInternetAdsldebit1024k()
    {
        return $this->pInternetAdsldebit1024k;
    }
    /**
     * Set pInternetAdsldebit2M
     *
     * @param float $pInternetAdsldebit2M
     * @return D_parc_abonne
     */
    public function setPInternetAdsldebit2M($pInternetAdsldebit2M)
    {
        $this->pInternetAdsldebit2M = $pInternetAdsldebit2M;

        return $this;
    }

    /**
     * Get pInternetAdsldebit2M
     *
     * @return float
     */
    public function getPInternetAdsldebit2M()
    {
        return $this->pInternetAdsldebit2M;
    }
    /**
     * Set pInternetAdsldebit4M
     *
     * @param float $pInternetAdsldebit4M
     * @return D_parc_abonne
     */
    public function setPInternetAdsldebit4M($pInternetAdsldebit4M)
    {
        $this->pInternetAdsldebit4M = $pInternetAdsldebit4M;

        return $this;
    }

    /**
     * Get pInternetAdsldebit4M
     *
     * @return float
     */
    public function getPInternetAdsldebit4M()
    {
        return $this->pInternetAdsldebit4M;
    }
    /**
     * Set pInternetAdsldebit8M
     *
     * @param float $pInternetAdsldebit8M
     * @return D_parc_abonne
     */
    public function setPInternetAdsldebit8M($pInternetAdsldebit8M)
    {
        $this->pInternetAdsldebit8M = $pInternetAdsldebit8M;

        return $this;
    }

    /**
     * Get pInternetAdsldebit8M
     *
     * @return float
     */
    public function getPInternetAdsldebit8M()
    {
        return $this->pInternetAdsldebit8M;
    }
    /**
     * Set pInternetAdsldebit12M
     *
     * @param float $pInternetAdsldebit12M
     * @return D_parc_abonne
     */
    public function setPInternetAdsldebit12M($pInternetAdsldebit12M)
    {
        $this->pInternetAdsldebit12M = $pInternetAdsldebit12M;

        return $this;
    }

    /**
     * Get pInternetAdsldebit12M
     *
     * @return float
     */
    public function getPInternetAdsldebit12M()
    {
        return $this->pInternetAdsldebit12M;
    }
    /**
     * Set pInternetAdsldebit20M
     *
     * @param float $pInternetAdsldebit20M
     * @return D_parc_abonne
     */
    public function setPInternetAdsldebit20M($pInternetAdsldebit20M)
    {
        $this->pInternetAdsldebit20M = $pInternetAdsldebit20M;

        return $this;
    }

    /**
     * Get pInternetAdsldebit20M
     *
     * @return float
     */
    public function getPInternetAdsldebit20M()
    {
        return $this->pInternetAdsldebit20M;
    }
    /**
     * Set pllInternet;

     *
     * @param float $pllInternet
     * @return D_parc_abonne
     */
    public function setPllInternet($pllInternet)
    {
        $this->pllInternet = $pllInternet;

        return $this;
    }

    /**
     * Get pllInternet
     *
     * @return float
     */
    public function getPllInternet()
    {
        return $this->pllInternet;
    }
    /**
     * Set pInternet3G
     *
     * @param float $pInternet3G
     * @return D_parc_abonne
     */
    public function setPInternet3G($pInternet3G)
    {
        $this->pInternet3G = $pInternet3G;

        return $this;
    }

    /**
     * Get pInternet3G
     *
     * @return float
     */
    public function getPInternet3G()
    {
        return $this->pInternet3G;
    }
    /**
     * Set pInternet3GData
     *
     * @param float $pInternet3GData
     * @return D_parc_abonne
     */
    public function setPInternet3GData($pInternet3GData)
    {
        $this->pInternet3GData = $pInternet3GData;

        return $this;
    }

    /**
     * Get pInternet3GData
     *
     * @return float
     */
    public function getPInternet3GData()
    {
        return $this->pInternet3GData;
    }
    /**
     * Set pInternet3GDataVoi
     *
     * @param float $pInternet3GDataVoi
     * @return D_parc_abonne
     */
    public function setPInternet3GDataVoi($pInternet3GDataVoi)
    {
        $this->pInternet3GDataVoi = $pInternet3GDataVoi;

        return $this;
    }

    /**
     * Get pInternet3GDataVoi
     *
     * @return float
     */
    public function getPInternet3GDataVoi()
    {
        return $this->pInternet3GDataVoi;
    }

    // Labihi l Mengouss !! /!\

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
