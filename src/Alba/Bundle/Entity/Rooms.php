<?php

namespace Alba\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rooms
 *
 * @ORM\Table(name="rooms")
 * @ORM\Entity(repositoryClass="Alba\Bundle\Repository\RoomsRepository")
 */
class Rooms
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
     * @ORM\Column(name="season_price", type="string", length=255, nullable=true)
     */
    private $seasonPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=100, nullable=true)
     */
    private $price;


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
     * Set seasonPrice
     *
     * @param string $seasonPrice
     *
     * @return Rooms
     */
    public function setSeasonPrice($seasonPrice)
    {
        $this->seasonPrice = $seasonPrice;

        return $this;
    }

    /**
     * Get seasonPrice
     *
     * @return string
     */
    public function getSeasonPrice()
    {
        return $this->seasonPrice;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Rooms
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Rooms
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }
}
