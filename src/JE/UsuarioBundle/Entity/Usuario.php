<?php

namespace JE\UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuarios")
 * @ORM\Entity(repositoryClass="JE\UsuarioBundle\Entity\UsuarioRepository")
 */
class Usuario
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
     * @var string
     *
     * @ORM\Column(name="nombre_usuario", type="string", length=50)
     */
    private $nombreUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="primer_apellido", type="string", length=50)
     */
    private $primerApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="segundo_apellido", type="string", length=50)
     */
    private $segundoApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="rol", type="string", columnDefinition="ENUM('ROL_ADMIN','ROL_PROFESOR','ROL_ESTUDIANTE','ROL_FANILIAR')", length=50)
     */
    private $rol;

    /**
     * @var boolean
     *
     * @ORM\Column(name="esta_activo", type="boolean")
     */
    private $estaActivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fue_creado", type="datetime")
     */
    private $fueCreado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fue_actualizado", type="datetime")
     */
    private $fueActualizado;


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
     * Set nombreUsuario
     *
     * @param string $nombreUsuario
     * @return Usuario
     */
    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;

        return $this;
    }

    /**
     * Get nombreUsuario
     *
     * @return string 
     */
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set primerApellido
     *
     * @param string $primerApellido
     * @return Usuario
     */
    public function setPrimerApellido($primerApellido)
    {
        $this->primerApellido = $primerApellido;

        return $this;
    }

    /**
     * Get primerApellido
     *
     * @return string 
     */
    public function getPrimerApellido()
    {
        return $this->primerApellido;
    }

    /**
     * Set segundoApellido
     *
     * @param string $segundoApellido
     * @return Usuario
     */
    public function setSegundoApellido($segundoApellido)
    {
        $this->segundoApellido = $segundoApellido;

        return $this;
    }

    /**
     * Get segundoApellido
     *
     * @return string 
     */
    public function getSegundoApellido()
    {
        return $this->segundoApellido;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set rol
     *
     * @param string $rol
     * @return Usuario
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return string 
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set estaActivo
     *
     * @param boolean $estaActivo
     * @return Usuario
     */
    public function setEstaActivo($estaActivo)
    {
        $this->estaActivo = $estaActivo;

        return $this;
    }

    /**
     * Get estaActivo
     *
     * @return boolean 
     */
    public function getEstaActivo()
    {
        return $this->estaActivo;
    }

    /**
     * Set fueCreado
     *
     * @param \DateTime $fueCreado
     * @return Usuario
     */
    public function setFueCreado($fueCreado)
    {
        $this->fueCreado = $fueCreado;

        return $this;
    }

    /**
     * Get fueCreado
     *
     * @return \DateTime 
     */
    public function getFueCreado()
    {
        return $this->fueCreado;
    }

    /**
     * Set fueActualizado
     *
     * @param \DateTime $fueActualizado
     * @return Usuario
     */
    public function setFueActualizado($fueActualizado)
    {
        $this->fueActualizado = $fueActualizado;

        return $this;
    }

    /**
     * Get fueActualizado
     *
     * @return \DateTime 
     */
    public function getFueActualizado()
    {
        return $this->fueActualizado;
    }
}
