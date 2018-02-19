<?php
namespace HTL\ImmobilierBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Paiement
 *
 * @ORM\Table(name="paiement")
 * @ORM\Entity(repositoryClass="HTL\ImmobilierBundle\Repository\PaiementRepository")
 */
class Paiement
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
     * @var int
     *
     * @ORM\Column(name="datepaiement", type="integer")
     */
    private $datepaiement;
    /**
     * @var int
     *
     * @ORM\Column(name="montant", type="integer")
     */
    private $montant;
    /**
     * @var int
     *
     * @ORM\Column(name="periode", type="integer")
     */
    private $periode;
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
     * Set datepaiement
     *
     * @param integer $datepaiement
     *
     * @return Paiement
     */
    public function setDatepaiement($datepaiement)
    {
        $this->datepaiement = $datepaiement;
        return $this;
    }
    /**
     * Get datepaiement
     *
     * @return int
     */
    public function getDatepaiement()
    {
        return $this->datepaiement;
    }
    /**
     * Set montant
     *
     * @param integer $montant
     *
     * @return Paiement
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
        return $this;
    }
    /**
     * Get montant
     *
     * @return int
     */
    public function getMontant()
    {
        return $this->montant;
    }
    /**
     * Set periode
     *
     * @param integer $periode
     *
     * @return Paiement
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;
        return $this;
    }
    /**
     * Get periode
     *
     * @return int
     */
    public function getPeriode()
    {
        return $this->periode;
    }
}