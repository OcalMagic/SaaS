<?php
/**
 * Created by PhpStorm.
 * User: Florence
 * Date: 23/11/2015
 * Time: 21:29
 */

namespace AE\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity()
 * @ORM\Table(name="ae_entreprise")
 */
class Entreprise
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */

    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */

    private $nomEntreprise;

    /**
     * @ORM\Column(type="integer", length=14)
     *
     * @Assert\NotBlank(message="Le numéro d'identification (SIREN/SIRET) doit comporter 9 ou 14 chiffres.")
     * @Assert\Length(
     *     min=9,
     *     max=14,
     *     minMessage="Le numéro doit comporter au moins 9 chiffres.",
     *     maxMessage="Le numéro ne doit pas comporter plus de 14 chiffres."
     *     )
     */


    private $siretId;

    /**
     * @ORM\Column(type="string", length=5)
     *
     * @Assert\NotBlank(message="Le code APE de la NAF doit comporter 4 chiffres et une lettre.")
     * @Assert\Length(
     *     min=5,
     *     max=5,
     *     exactMessage="Le code APE de la NAF doit comporter 4 chiffres et une lettre."
     *     )
     */

    private $nafId;



    /**
     * Set nom
     *
     * @param string $nom
     * @return Entreprise
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nomEntreprise
     *
     * @param string $nomEntreprise
     * @return Entreprise
     */
    public function setNomEntreprise($nomEntreprise)
    {
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    /**
     * Get nomEntreprise
     *
     * @return string 
     */
    public function getNomEntreprise()
    {
        return $this->nomEntreprise;
    }

    /**
     * Set siretId
     *
     * @param integer $siretId
     * @return Entreprise
     */
    public function setSiretId($siretId)
    {
        $this->siretId = $siretId;

        return $this;
    }

    /**
     * Get siretId
     *
     * @return integer 
     */
    public function getSiretId()
    {
        return $this->siretId;
    }

    /**
     * Set nafId
     *
     * @param string $nafId
     * @return Entreprise
     */
    public function setNafId($nafId)
    {
        $this->nafId = $nafId;

        return $this;
    }

    /**
     * Get nafId
     *
     * @return string 
     */
    public function getNafId()
    {
        return $this->nafId;
    }
}
