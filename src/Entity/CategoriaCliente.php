<?php

namespace App\Entity;

use App\Repository\CategoriaClienteRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoriaClienteRepository::class)
 */
class CategoriaCliente
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\Regex(pattern="/^[a-zA-ZñÁÉÍÓÚáéíó ú]+$/", message = "Insertar solo letras en el campo Categoría de cliente.")
     * @Assert\NotBlank(message = "El campo no puede estar en blanco") 
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;
    
    /**
     * @ORM\Column(type="datetime", nullable =true)
     */
    private $fecha;
    
    /**
     * @ORM\Column(type="date", nullable = true)
     */
    private $fechaInsercion; 

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }
    
       public function __toString() {
                                return $this->nombre; 
                            }

       public function getFecha(): ?\DateTimeInterface
       {
           return $this->fecha;
       }

       public function setFecha(?\DateTimeInterface $fecha): self
       {
           $this->fecha = $fecha;

           return $this;
       }

       public function getFechaInsercion(): ?\DateTimeInterface
       {
           return $this->fechaInsercion;
       }

       public function setFechaInsercion(?\DateTimeInterface $fechaInsercion): self
       {
           $this->fechaInsercion = $fechaInsercion;

           return $this;
       }
}