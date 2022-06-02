<?php
namespace App\Database\Models;

use App\Database\Contracts\ConnectTo;
use App\Database\Models\Model;

class Product_Spec extends Model implements ConnectTo {
    private const table = "product_specs";
    private int $product_id;
    private int $specs_id;
    private string $value;

    /**
     * Get the value of product_id
     */ 
    public function getProduct_id()
    {
        return $this->product_id;
    }

    /**
     * Set the value of product_id
     *
     * @return  self
     */ 
    public function setProduct_id($product_id)
    {
        $this->product_id = $product_id;

        return $this;
    }

    /**
     * Get the value of specs_id
     */ 
    public function getSpecs_id()
    {
        return $this->specs_id;
    }

    /**
     * Set the value of specs_id
     *
     * @return  self
     */ 
    public function setSpecs_id($specs_id)
    {
        $this->specs_id = $specs_id;

        return $this;
    }

    /**
     * Get the value of value
     */ 
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value of value
     *
     * @return  self
     */ 
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
