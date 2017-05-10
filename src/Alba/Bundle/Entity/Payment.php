<?php

namespace Alba\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 *
 * @ORM\Table(name="payment")
 * @ORM\Entity(repositoryClass="Alba\Bundle\Repository\PaymentRepository")
 */
class Payment
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
     * @ORM\Column(name="creditcard", type="string", length=255, nullable=true)
     */
    private $creditcard;

    /**
     * @var string
     *
     * @ORM\Column(name="total_costumers", type="string", length=32)
     */
    private $totalCostumers;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_time", type="date", nullable=true)
     */
    private $createTime;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=45, nullable=true)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="payment", type="string", length=45, nullable=true)
     */
    private $payment;


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
     * Set creditcard
     *
     * @param string $creditcard
     *
     * @return Payment
     */
    public function setCreditcard($creditcard)
    {
        $this->creditcard = $creditcard;

        return $this;
    }

    /**
     * Get creditcard
     *
     * @return string
     */
    public function getCreditcard()
    {
        return $this->creditcard;
    }

    /**
     * Set totalCostumers
     *
     * @param string $totalCostumers
     *
     * @return Payment
     */
    public function setTotalCostumers($totalCostumers)
    {
        $this->totalCostumers = $totalCostumers;

        return $this;
    }

    /**
     * Get totalCostumers
     *
     * @return string
     */
    public function getTotalCostumers()
    {
        return $this->totalCostumers;
    }

    /**
     * Set createTime
     *
     * @param \DateTime $createTime
     *
     * @return Payment
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * Get createTime
     *
     * @return \DateTime
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Payment
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
     * Set payment
     *
     * @param string $payment
     *
     * @return Payment
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
}
