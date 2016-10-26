<?php

namespace Ictdata\IctdataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * D_trafic
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ictdata\IctdataBundle\Entity\D_traficRepository")
 */
class D_trafic
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
     * @ORM\Column(name="tra_date", type="float")
     */
    private $traDate;

    /**
     * @var float
     *
     * @ORM\Column(name="tra_voix_mobile_sort", type="float")
     */
    private $traVoixMobileSort;

    /**
     * @var float
     *
     * @ORM\Column(name="tra_sms_mobile_sort", type="float")
     */
    private $traSmsMobileSort;

    /**
     * @var float
     *
     * @ORM\Column(name="tra_voix_fixe_sort", type="float")
     */
    private $traVoixFixeSort;


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
     * Set traDate
     *
     * @param float $traDate
     * @return D_trafic
     */
    public function setTraDate($traDate)
    {
        $this->traDate = $traDate;

        return $this;
    }

    /**
     * Get traDate
     *
     * @return float 
     */
    public function getTraDate()
    {
        return $this->traDate;
    }

    /**
     * Set traVoixMobileSort
     *
     * @param float $traVoixMobileSort
     * @return D_trafic
     */
    public function setTraVoixMobileSort($traVoixMobileSort)
    {
        $this->traVoixMobileSort = $traVoixMobileSort;

        return $this;
    }

    /**
     * Get traVoixMobileSort
     *
     * @return float 
     */
    public function getTraVoixMobileSort()
    {
        return $this->traVoixMobileSort;
    }

    /**
     * Set traSmsMobileSort
     *
     * @param float $traSmsMobileSort
     * @return D_trafic
     */
    public function setTraSmsMobileSort($traSmsMobileSort)
    {
        $this->traSmsMobileSort = $traSmsMobileSort;

        return $this;
    }

    /**
     * Get traSmsMobileSort
     *
     * @return float 
     */
    public function getTraSmsMobileSort()
    {
        return $this->traSmsMobileSort;
    }

    /**
     * Set traVoixFixeSort
     *
     * @param float $traVoixFixeSort
     * @return D_trafic
     */
    public function setTraVoixFixeSort($traVoixFixeSort)
    {
        $this->traVoixFixeSort = $traVoixFixeSort;

        return $this;
    }

    /**
     * Get traVoixFixeSort
     *
     * @return float 
     */
    public function getTraVoixFixeSort()
    {
        return $this->traVoixFixeSort;
    }
}
