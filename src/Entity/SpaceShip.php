<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SpaceShipRepository")
 */
class SpaceShip
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $IMG_URL;

    /**
     * @ORM\Column(type="string", length=2048, nullable=true)
     */
    private $Description;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $Capacity;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Speed;

    /**
     * @ORM\Column(type="string", length=1024, nullable=true)
     */
    private $Protect;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $CruiseType;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Trips", mappedBy="SpaceShip")
     */
    private $trips;

    public function __construct()
    {
        $this->trips = new ArrayCollection();
    }

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
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param mixed $Name
     */
    public function setName($Name): void
    {
        $this->Name = $Name;
    }

    /**
     * @return mixed
     */
    public function getIMGURL()
    {
        return $this->IMG_URL;
    }

    /**
     * @param mixed $IMG_URL
     */
    public function setIMGURL($IMG_URL): void
    {
        $this->IMG_URL = $IMG_URL;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     */
    public function setDescription($Description): void
    {
        $this->Description = $Description;
    }

    /**
     * @return mixed
     */
    public function getCapacity()
    {
        return $this->Capacity;
    }

    /**
     * @param mixed $Capacity
     */
    public function setCapacity($Capacity): void
    {
        $this->Capacity = $Capacity;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->Speed;
    }

    /**
     * @param mixed $Speed
     */
    public function setSpeed($Speed): void
    {
        $this->Speed = $Speed;
    }

    /**
     * @return mixed
     */
    public function getProtect()
    {
        return $this->Protect;
    }

    /**
     * @param mixed $Protect
     */
    public function setProtect($Protect): void
    {
        $this->Protect = $Protect;
    }

    /**
     * @return mixed
     */
    public function getCruiseType()
    {
        return $this->CruiseType;
    }

    /**
     * @param mixed $CruiseType
     */
    public function setCruiseType($CruiseType): void
    {
        $this->CruiseType = $CruiseType;
    }

    /**
     * @return Collection|Trips[]
     */
    public function getTrips(): Collection
    {
        return $this->trips;
    }

    public function addTrip(Trips $trip): self
    {
        if (!$this->trips->contains($trip)) {
            $this->trips[] = $trip;
            $trip->setSpaceShip($this);
        }

        return $this;
    }

    public function removeTrip(Trips $trip): self
    {
        if ($this->trips->contains($trip)) {
            $this->trips->removeElement($trip);
            // set the owning side to null (unless already changed)
            if ($trip->getSpaceShip() === $this) {
                $trip->setSpaceShip(null);
            }
        }

        return $this;
    }


}
