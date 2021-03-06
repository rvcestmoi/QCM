<?php

namespace QCM\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReponseProposee
 *
 * @ORM\Table(name="reponse_proposee")
 * @ORM\Entity(repositoryClass="QCM\BackBundle\Repository\ReponseProposeeRepository")
 */
class ReponseProposee
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
     * @ORM\Column(name="enonce", type="string", length=255)
     */
    private $enonce;

    /**
     * @var bool
     *
     * @ORM\Column(name="estBonne", type="boolean")
     */
    private $estBonne;
    
     /**
     * 
     *
     * @ORM\ManyToOne(targetEntity="Question", inversedBy="reponsesProposees")
     * 
     * 
     */
    private $question;


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
     * Set enonce
     *
     * @param string $enonce
     *
     * @return ReponseProposee
     */
    public function setEnonce($enonce)
    {
        $this->enonce = $enonce;

        return $this;
    }

    /**
     * Get enonce
     *
     * @return string
     */
    public function getEnonce()
    {
        return $this->enonce;
    }

    /**
     * Set estBonne
     *
     * @param boolean $estBonne
     *
     * @return ReponseProposee
     */
    public function setEstBonne($estBonne)
    {
        $this->estBonne = $estBonne;

        return $this;
    }

    /**
     * Get estBonne
     *
     * @return bool
     */
    public function getEstBonne()
    {
        return $this->estBonne;
    }
}

