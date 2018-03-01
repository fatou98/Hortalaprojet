<?php

namespace HTL\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="contrat")
 * @ORM\Entity(repositoryClass="HTL\ImmobilierBundle\Repository\ContratRepository")
 */
class Contrat
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
     * @var string
     *
     * @ORM\Column(name="termecontrat", type="text")
     */
    private $termecontrat;


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
     * Set termecontrat
     *
     * @param string $termecontrat
     *
     * @return Contrat
     */
    public function setTermecontrat($termecontrat)
    {
        $this->termecontrat = $termecontrat;

        return $this;
    }

    /**
     * Get termecontrat
     *
     * @return string
     */
    public function getTermecontrat()
    {
        return $this->termecontrat;
    }
}

