<?php

declare(strict_types=1);

namespace App\Entity;

use DateTimeImmutable;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
//use App\Entity\Traits\StripeTrait;
//use Gedmo\Timestampable\Traits\TimestampableEntity;
/**
 * @ORM\Entity
 * @ORM\Table(name="`order`")
 */

class Order
{

   /* const DEVISE = 'eur';
*/
    //use StripeTrait;
    //use TimestampableEntity;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id = null;
/*
    /**
     * @ORM\Column(type="datetime_immutable")
     */
  //  private $createAt;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $state = "cart";

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @var Collection<int, Line>
     * @ORM\OneToMany(targetEntity=Line::class, mappedBy="order", cascade={"persist"})
     */
    private $lines;


    public function __construct()
    {
    //    $this->createAt = new DateTimeImmutable();
        $this->lines = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
/*
    public  function getCreateAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }
*/
    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return Collection<int, Line>
     */
    public function getLines(): Collection
    {
        return $this->lines;
    }

    public function addProduct(Produits $produit): self
    {
        $lines = $this->lines->filter(fn (Line $line) => $line->getProduct() === $produit);

        $line = $lines->first();

        if ($line === false) {
            $line = new Line();
            $line->setOrder($this);
            $line->setProduct($produit);
            $this->lines->add($line);
        }

        $line->increaseQuantity();

        return $this;
    }

    public function getTotal(): int
    {
        return intval(
            array_sum(
                $this->lines->map(fn (Line $line) => $line->getTotal())->toArray()
            )
        );
    }
}