<?php

namespace Alba\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 *
 */
class Reservation
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
     * @var int
     *

     * @ORM\ManyToOne(targetEntity="Users", inversedBy="reservation_id")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    
    private $user_id;


    /**
     * @var int
     *

     * @ORM\ManyToOne(targetEntity="Season", inversedBy="reservation_id")
     * @ORM\JoinColumn(name="season_id", referencedColumnName="id")
     */

    private $season_id;

    /**
     * @var int
     *

     * @ORM\ManyToOne(targetEntity="Rooms", inversedBy="reservation_id")
     * @ORM\JoinColumn(name="room_id", referencedColumnName="id")
     */
    
    private $room_id;
    
    /**
     * @var int
     *

     * @ORM\ManyToOne(targetEntity="Breakfast", inversedBy="reservation_id")
     * @ORM\JoinColumn(name="breakfast_id", referencedColumnName="id")
     */
    private $breakfast_id;
    
    
    
    
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="arrival", type="date", nullable=true)
     */
    
    private $arrival;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="departure", type="date")
     */
    private $departure;

    /**
     * @var string
     *
     * @ORM\Column(name="payment", type="string", length=255, nullable=true)
     */
    private $payment;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=255)
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
     * Set arrival
     *
     * @param \DateTime $arrival
     *
     * @return Reservation
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return \DateTime
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * Set departure
     *
     * @param \DateTime $departure
     *
     * @return Reservation
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return \DateTime
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set payment
     *
     * @param string $payment
     *
     * @return Reservation
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get payment
     *
     * @return string
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Reservation
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

    /**
     * Set userId
     *
     * @param \Alba\Bundle\Entity\Users $userId
     *
     * @return Reservation
     */
    public function setUserId(\Alba\Bundle\Entity\Users $userId = null)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return \Alba\Bundle\Entity\Users
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set seasonId
     *
     * @param \Alba\Bundle\Entity\Season $seasonId
     *
     * @return Reservation
     */
    public function setSeasonId(\Alba\Bundle\Entity\Season $seasonId = null)
    {
        $this->season_id = $seasonId;

        return $this;
    }

    /**
     * Get seasonId
     *
     * @return \Alba\Bundle\Entity\Season
     */
    public function getSeasonId()
    {
        return $this->season_id;
    }
}
