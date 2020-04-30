<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
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
    
    public function getBase64Image()
    {
        if($this->base64Image == null)
        {
            $this->base64Image = "data:image/png;base64," . $this->getRawPhoto();
        }
    
        return $this->base64Image;
    }
    
    // ... getter and setter methods
}
