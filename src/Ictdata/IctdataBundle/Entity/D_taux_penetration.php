<?php

namespace Ictdata\IctdataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * D_taux_penetration
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ictdata\IctdataBundle\Entity\D_taux_penetrationRepository")
 */
class D_taux_penetration
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
     * @var date
     *
     * @ORM\Column(name="t_date", type="date")
     */
    private $tDate;

    /**
     * @var float
     *
     * @ORM\Column(name="t_mobile_post_paye", type="float")
     */
    private $tMobilePostPaye;

    /**
     * @var float
     *
     * @ORM\Column(name="t_mobile_pre_paye", type="float")
     */
    private $tMobilePrePaye;

    /**
     * @var float
     *
     * @ORM\Column(name="t_fixe", type="float")
     */
    private $tFixe;

    /**
     * @var float
     *
     * @ORM\Column(name="t_internet", type="float")
     */
    private $tInternet;


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
     * Set tDate
     *
     * @param date $tDate
     * @return D_taux_penetration
     */
    public function setTDate($tDate)
    {
        $this->tDate = $tDate;

        return $this;
    }

    /**
     * Get tDate
     *
     * @return date
     */
    public function getTDate()
    {
        return $this->tDate;
    }

    /**
     * Set tMobilePostPaye
     *
     * @param float $tMobilePostPaye
     * @return D_taux_penetration
     */
    public function setTMobilePostPaye($tMobilePostPaye)
    {
        $this->tMobilePostPaye = $tMobilePostPaye;

        return $this;
    }

    /**
     * Get tMobilePostPaye
     *
     * @return float 
     */
    public function getTMobilePostPaye()
    {
        return $this->tMobilePostPaye;
    }

    /**
     * Set tMobilePrePaye
     *
     * @param float $tMobilePrePaye
     * @return D_taux_penetration
     */
    public function setTMobilePrePaye($tMobilePrePaye)
    {
        $this->tMobilePrePaye = $tMobilePrePaye;

        return $this;
    }

    /**
     * Get tMobilePrePaye
     *
     * @return float 
     */
    public function getTMobilePrePaye()
    {
        return $this->tMobilePrePaye;
    }

    /**
     * Set tFixe
     *
     * @param float $tFixe
     * @return D_taux_penetration
     */
    public function setTFixe($tFixe)
    {
        $this->tFixe = $tFixe;

        return $this;
    }

    /**
     * Get tFixe
     *
     * @return float 
     */
    public function getTFixe()
    {
        return $this->tFixe;
    }

    /**
     * Set tInternet
     *
     * @param float $tInternet
     * @return D_taux_penetration
     */
    public function setTInternet($tInternet)
    {
        $this->tInternet = $tInternet;

        return $this;
    }

    /**
     * Get tInternet
     *
     * @return float 
     */
    public function getTInternet()
    {
        return $this->tInternet;
    }
}
