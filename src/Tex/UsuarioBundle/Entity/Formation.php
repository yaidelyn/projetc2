<?php

namespace Tex\UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_404021BFA76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class Formation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name_ocupation", type="string", length=255, nullable=false)
     */
    private $nameOcupation;

    /**
     * @var string
     *
     * @ORM\Column(name="abstract", type="string", length=255, nullable=false)
     */
    private $abstract;

    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=255, nullable=true)
     */
    private $file;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id",onDelete="CASCADE")
     * })
     */
    private $user;



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
     * Set nameOcupation
     *
     * @param string $nameOcupation
     * @return Formation
     */
    public function setNameOcupation($nameOcupation)
    {
        $this->nameOcupation = $nameOcupation;

        return $this;
    }

    /**
     * Get nameOcupation
     *
     * @return string 
     */
    public function getNameOcupation()
    {
        return $this->nameOcupation;
    }

    /**
     * Set abstract
     *
     * @param string $abstract
     * @return Formation
     */
    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;

        return $this;
    }

    /**
     * Get abstract
     *
     * @return string 
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * Set file
     *
     * @param string $file
     * @return Formation
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set user
     *
     * @param \Tex\UsuarioBundle\Entity\User $user
     * @return Formation
     */
    public function setUser(\Tex\UsuarioBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Tex\UsuarioBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
