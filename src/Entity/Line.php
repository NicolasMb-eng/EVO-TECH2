<?php

declare(strict_types=1);

namespace App\Entity;

use App\Entity\Produits;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="order_line")
 */
class Line
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id = null;

    /**
     * @ORM\ManyToOne(targetEntity=Order::class, inversedBy="lines")
     * @ORM\JoinColumn(nullable=false)
     */
    private $order;

    /**
     * @ORM\ManyToOne(targetEntity=Produits::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $product;

    /**
     * @ORM\Column(type="integer")
     */
    private $amount;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity = 0;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrder(): Order
    {
        return $this->order;
    }

    public function setOrder(Order $order): self
    {
        $this->order = $order;
        return $this;
    }

    public function getProduct(): Produits
    {
        return $this->product;
    }

    public function setProduct(Produits $product): self
    {
        $this->product = $product;
        $this->amount = $product->getPrixProduit();
        return $this;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function decreaseQuantity(): self
    {
        $this->quantity--;
        return $this;
    }

    public function increaseQuantity(): self
    {
        $this->quantity++;
        return $this;
    }

    public function getTotal(): int
    {
        return $this->quantity * $this->amount;
    }

}