<?php

namespace Ictdata\IctdataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * D_revenu_usage
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ictdata\IctdataBundle\Entity\D_revenu_usageRepository")
 */
class D_revenu_usage
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
     * @ORM\Column(name="r_date", type="date")
     */
    private $rDate;

    /**
     * @var float
     *
     * @ORM\Column(name="r_minute_com_mobile", type="float")
     */
    private $rMinuteComMobile;

    /**
     * @var float
     *
     * @ORM\Column(name="r_mensuel_client_mobile", type="float")
     */
    private $rMensuelClientMobile;

    /**
     * @var float
     *
     * @ORM\Column(name="r_minute_com_fixe", type="float")
     */
    private $rMinuteComFixe;

    /**
     * @var float
     *
     * @ORM\Column(name="r_mensuel_com_fixe", type="float")
     */
    private $rMensuelComFixe;


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
     * Set rDate
     *
     * @param \DateTime $rDate
     * @return D_revenu_usage
     */
    public function setRDate($rDate)
    {
        $this->rDate = $rDate;

        return $this;
    }

    /**
     * Get rDate
     *
     * @return \DateTime 
     */
    public function getRDate()
    {
        return $this->rDate;
    }

    /**
     * Set rMinuteComMobile
     *
     * @param float $rMinuteComMobile
     * @return D_revenu_usage
     */
    public function setRMinuteComMobile($rMinuteComMobile)
    {
        $this->rMinuteComMobile = $rMinuteComMobile;

        return $this;
    }

    /**
     * Get rMinuteComMobile
     *
     * @return float 
     */
    public function getRMinuteComMobile()
    {
        return $this->rMinuteComMobile;
    }

    /**
     * Set rMensuelClientMobile
     *
     * @param float $rMensuelClientMobile
     * @return D_revenu_usage
     */
    public function setRMensuelClientMobile($rMensuelClientMobile)
    {
        $this->rMensuelClientMobile = $rMensuelClientMobile;

        return $this;
    }

    /**
     * Get rMensuelClientMobile
     *
     * @return float 
     */
    public function getRMensuelClientMobile()
    {
        return $this->rMensuelClientMobile;
    }

    /**
     * Set rMinuteComFixe
     *
     * @param float $rMinuteComFixe
     * @return D_revenu_usage
     */
    public function setRMinuteComFixe($rMinuteComFixe)
    {
        $this->rMinuteComFixe = $rMinuteComFixe;

        return $this;
    }

    /**
     * Get rMinuteComFixe
     *
     * @return float 
     */
    public function getRMinuteComFixe()
    {
        return $this->rMinuteComFixe;
    }

    /**
     * Set rMensuelComFixe
     *
     * @param float $rMensuelComFixe
     * @return D_revenu_usage
     */
    public function setRMensuelComFixe($rMensuelComFixe)
    {
        $this->rMensuelComFixe = $rMensuelComFixe;

        return $this;
    }

    /**
     * Get rMensuelComFixe
     *
     * @return float 
     */
    public function getRMensuelComFixe()
    {
        return $this->rMensuelComFixe;
    }
}
