<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 11/12/2018
 * Time: 00:06
 */

namespace Planning\MainBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 *
 *
 * @ORM\Table(name="seance")
 * @ORM\Entity
 *
 */


class Seance
{

    /**
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $type;

    /**
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date;

    /**
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $heure_debut;

    /**
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $heure_fin;

    /**
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $capacite;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getHeureDebut()
    {
        return $this->heure_debut;
    }

    /**
     * @param mixed $heure_debut
     */
    public function setHeureDebut($heure_debut)
    {
        $this->heure_debut = $heure_debut;
    }

    /**
     * @return mixed
     */
    public function getHeureFin()
    {
        return $this->heure_fin;
    }

    /**
     * @param mixed $heure_fin
     */
    public function setHeureFin($heure_fin)
    {
        $this->heure_fin = $heure_fin;
    }

    /**
     * @return mixed
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * @param mixed $capacite
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;
    }

}