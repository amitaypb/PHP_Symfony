<?php

namespace App\Entity;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StoreRepository")
 * @ORM\Table(name="stores")
 */
class Store
{
    public function __construct()
    {
        $this->products = new ArrayCollection();
    }
    
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
    
    private $category;
    
    public function getCategory(): ?ProductCategory
    {
        return $this->category;
    }
    
    public function setCategory(?ProductCategory $category): self
    {
        $this->category = $category;
        
        return $this;
    }
}
