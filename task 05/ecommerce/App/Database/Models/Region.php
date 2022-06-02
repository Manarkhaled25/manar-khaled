<?php
namespace App\Database\Models;

use App\Database\Contracts\ConnectTo;
use App\Database\Models\Model;

class Region extends Model implements ConnectTo {
    private const table = "regiones";
    private int $id;
    private string $name_en;
    private string $name_ar;
    private string $lat;
    private string $long;
    private string $distance;
    private string $created_at;
    private string $updated_at;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name_en
     */ 
    public function getName_en()
    {
        return $this->name_en;
    }

    /**
     * Set the value of name_en
     *
     * @return  self
     */ 
    public function setName_en($name_en)
    {
        $this->name_en = $name_en;

        return $this;
    }

    /**
     * Get the value of name_ar
     */ 
    public function getName_ar()
    {
        return $this->name_ar;
    }

    /**
     * Set the value of name_ar
     *
     * @return  self
     */ 
    public function setName_ar($name_ar)
    {
        $this->name_ar = $name_ar;

        return $this;
    }

    /**
     * Get the value of lat
     */ 
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set the value of lat
     *
     * @return  self
     */ 
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get the value of long
     */ 
    public function getLong()
    {
        return $this->long;
    }

    /**
     * Set the value of long
     *
     * @return  self
     */ 
    public function setLong($long)
    {
        $this->long = $long;

        return $this;
    }

    /**
     * Get the value of distance
     */ 
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Set the value of distance
     *
     * @return  self
     */ 
    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of updated_at
     */ 
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */ 
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}