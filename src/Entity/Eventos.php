<?php

namespace App\Entity;

use App\Repository\EventosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventosRepository::class)]
class Eventos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fecha = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $hora = null;

    #[ORM\Column]
    private ?int $plazasTotales = null;

    #[ORM\Column]
    private ?int $plazasOcupadas = null;

    #[ORM\Column(length: 255)]
    private ?string $lugarEvento = null;

    #[ORM\Column(length: 255)]
    private ?string $direccion = null;

    #[ORM\Column(nullable: true)]
    private ?float $precio = null;

    #[ORM\Column(length: 255)]
    private ?string $descripcion = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): static
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getHora(): ?\DateTimeInterface
    {
        return $this->hora;
    }

    public function setHora(\DateTimeInterface $hora): static
    {
        $this->hora = $hora;

        return $this;
    }

    public function getPlazasTotales(): ?int
    {
        return $this->plazasTotales;
    }

    public function setPlazasTotales(int $plazasTotales): static
    {
        $this->plazasTotales = $plazasTotales;

        return $this;
    }

    public function getPlazasOcupadas(): ?int
    {
        return $this->plazasOcupadas;
    }

    public function setPlazasOcupadas(int $plazasOcupadas): static
    {
        $this->plazasOcupadas = $plazasOcupadas;

        return $this;
    }

    public function getLugarEvento(): ?string
    {
        return $this->lugarEvento;
    }

    public function setLugarEvento(string $lugarEvento): static
    {
        $this->lugarEvento = $lugarEvento;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): static
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(?float $precio): static
    {
        $this->precio = $precio;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): static
    {
        $this->descripcion = $descripcion;

        return $this;
    }
}
