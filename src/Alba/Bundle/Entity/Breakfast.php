<?php

namespace Alba\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Breakfast
 *
 * @ORM\Table(name="breakfast")
 * @ORM\Entity(repositoryClass="Alba\Bundle\Repository\BreakfastRepository")
 */
class Breakfast
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
     * @ORM\Column(name="kind", type="string", length=255, nullable=true)
     */
    private $kind;
    
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
     * Set kind
     *
     * @param string $kind
     *
     * @return Breakfast
     */
    public function setKind($kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Get kind
     *
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }
}
