<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 11/12/2018
 * Time: 00:27
 */

namespace Planning\MainBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 *
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
 *
 */

class Client
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
    private $nomprenom;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $tel;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $cin;

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
    public function getNomprenom()
    {
        return $this->nomprenom;
    }

    /**
     * @param mixed $nomprenom
     */
    public function setNomprenom($nomprenom)
    {
        $this->nomprenom = $nomprenom;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param mixed $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }

}