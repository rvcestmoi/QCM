<?php

namespace QCM\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion")
 * @ORM\Entity(repositoryClass="QCM\BackBundle\Repository\PromotionRepository")
 */
class Promotion
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
     * @ORM\Column(name="codePromo", type="integer")
     */
    private $codePromo;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;
    
      /**
     * 
     *
     * @ORM\OneToMany(targetEntity="Candidat", mappedBy="promotion")
     */
    private $candidats;


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
     * Set codePromo
     *
     * @param integer $codePromo
     *
     * @return Promotion
     */
    public function setCodePromo($codePromo)
    {
        $this->codePromo = $codePromo;

        return $this;
    }

    /**
     * Get codePromo
     *
     * @return int
     */
    public function getCodePromo()
    {
        return $this->codePromo;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Promotion
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
}

