<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    public function __construct()
    {
        $this->categories = new ArrayCollection();
    }
    
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setId(int $id): self
    {
        $this->id = $id;
        
        return $this;
    }
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;
    
    public function getName(): ?string
    {
        return $this->name;
    }
    
    public function setName(string $name): self
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * @ORM\Column(type="integer")
     */
    private $price;
    
    public function getPrice(): ?int
    {
        return $this->price;
    }
    
    public function setPrice(int $price): self
    {
        $this->price = $price;
        
        return $this;
    }
    
    //TODO: Move all of the Calculations to the Business Logic Layer (Manager or Service).
    public function getPriceFormatted()
    {
        if($this->price % 1 == 0)
        {
            return "$ " . $this->price . ".00";
        }
        
        return "$ " . $this->price;
    }
    
    public function getIntegerPart(int $price)
    {
        $str = strval($price);
        $dec_pos = strrpos($str, '.');
        
        if($dec_pos == true)
        {
            return substr($str, 0, $dec_pos);
        }
        
        return $price;
    }
    
    public function getDecimals(int $price)
    {
        $str = strval($price);
        $dec_pos = strrpos($str, '.');
        
        if($dec_pos == true)
        {
            return substr($str, $dec_pos + 1);
        }
        
        return "00";
    }

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $imageFilename;
    
    public function getImageFilename()
    {
        return $this->imageFilename;
    }
    
    public function setImageFilename($imageFilename)
    {
        $this->imageFilename = $imageFilename;
        
        return $this;
    }
    
    /**
     * @ORM\Column(name="photo", type="blob", nullable=true)
     */
    private $photo;
    
    public function getPhoto()
    {
        return $this->photo;
    }
    
    public function setPhoto($photo)
    {
        $this->photo = $photo;
        
        //Clear the RawPhoto, so it gets refreshed.
        //$this->rawPhoto = null;
        
        return $this;
    }
    
    /**
     * @ORM\Column(name="rawPhoto", type="text", nullable=true)
     */
    private $rawPhoto;
    
    public function getRawPhoto()
    {
//         if($this->rawPhoto == null)
//         {
//             //$this->rawPhoto = "data:image/png;base64," . base64_encode(stream_get_contents($this->getPhoto()));
//             $this->rawPhoto = "data:image/png;base64," . $this->getPhoto();
//         }
        
        return $this->rawPhoto;
    }
    
    public function setRawPhoto($rawPhoto)
    {
        $this->rawPhoto = $rawPhoto;
        
        return $this;
    }
    
    private $base64Image;
    
    public function getbase64Image()
    {
        if($this->base64Image == null)
        {
            $this->base64Image = "data:image/png;base64," . $this->getRawPhoto();
        }
    
        return $this->base64Image;
    }
    
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ProductCategory", inversedBy="products")
     */
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
    
    private $categories;
    
    public function getCategories()
    {
        if($this->categories == null)
        {
            $this->categories = new ArrayCollection();
        }
        
        return $this->categories;
    }
    
    // ... getter and setter methods
}
