<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TripsRepository")
 */
class Trips
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="smallint")
     */
    private $Type;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DepartureDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $ArrivalDate;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SpaceShip", inversedBy="trips")
     */
    private $SpaceShip;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Origin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Arrival;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?int
    {
        return $this->Type;
    }

    public function setType(int $Type): self
    {
        $this->Type = $Type;

        return $this;
    }

    public function getDepartureDate(): ?\DateTimeInterface
    {
        return $this->DepartureDate;
    }

    public function setDepartureDate(\DateTimeInterface $DepartureDate): self
    {
        $this->DepartureDate = $DepartureDate;

        return $this;
    }

    public function getArrivalDate(): ?\DateTimeInterface
    {
        return $this->ArrivalDate;
    }

    public function setArrivalDate(?\DateTimeInterface $ArrivalDate): self
    {
        $this->ArrivalDate = $ArrivalDate;

        return $this;
    }

    public function getSpaceShip(): ?SpaceShip
    {
        return $this->SpaceShip;
    }

    public function setSpaceShip(?SpaceShip $SpaceShip): self
    {
        $this->SpaceShip = $SpaceShip;

        return $this;
    }

    public function getOrigin(): ?string
    {
        return $this->Origin;
    }

    public function setOrigin(string $Origin): self
    {
        $this->Origin = $Origin;

        return $this;
    }

    public function getArrival(): ?string
    {
        return $this->Arrival;
    }

    public function setArrival(string $Arrival): self
    {
        $this->Arrival = $Arrival;

        return $this;
    }
}
