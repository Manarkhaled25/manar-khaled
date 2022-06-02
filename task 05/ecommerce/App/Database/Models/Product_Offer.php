<?php
namespace App\Database\Models;

use App\Database\Models\Model;
use App\Database\Contracts\ConnectTo;

class Product_Offer extends Model implements ConnectTo {
    private const table = "products_offers";
    private int $offer_id;
    private int $product_id;
    private float $price_after_discount;


    /**
     * Get the value of offer_id
     */ 
    public function getOffer_id()
    {
        return $this->offer_id;
    }

    /**
     * Set the value of offer_id
     *
     * @return  self
     */ 
    public function setOffer_id($offer_id)
    {
        $this->offer_id = $offer_id;

        return $this;
    }

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
     * Get the value of price_after_discount
     */ 
    public function getPrice_after_discount()
    {
        return $this->price_after_discount;
    }

    /**
     * Set the value of price_after_discount
     *
     * @return  self
     */ 
    public function setPrice_after_discount($price_after_discount)
    {
        $this->price_after_discount = $price_after_discount;

        return $this;
    }
}