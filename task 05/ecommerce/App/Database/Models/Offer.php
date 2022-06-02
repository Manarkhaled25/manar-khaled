<?php
namespace App\Database\Models;
use App\Database\Models\Model;
use App\Database\Contracts\ConnectTo;
class Offer extends Model implements ConnectTo {
    private const table = "offers";
    private int $id;
    private string $title_en;
    private string $title_ar;
    private float $discount;
    private string $discount_type;
    private string $image = 'default.jpg';
    private int $product_offer_id;
    private string $start_date_time;
    private string $end_date_time;
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
     * Get the value of title_en
     */ 
    public function getTitle_en()
    {
        return $this->title_en;
    }

    /**
     * Set the value of title_en
     *
     * @return  self
     */ 
    public function setTitle_en($title_en)
    {
        $this->title_en = $title_en;

        return $this;
    }

    /**
     * Get the value of title_ar
     */ 
    public function getTitle_ar()
    {
        return $this->title_ar;
    }

    /**
     * Set the value of title_ar
     *
     * @return  self
     */ 
    public function setTitle_ar($title_ar)
    {
        $this->title_ar = $title_ar;

        return $this;
    }

    /**
     * Get the value of discount
     */ 
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set the value of discount
     *
     * @return  self
     */ 
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get the value of discount_type
     */ 
    public function getDiscount_type()
    {
        return $this->discount_type;
    }

    /**
     * Set the value of discount_type
     *
     * @return  self
     */ 
    public function setDiscount_type($discount_type)
    {
        $this->discount_type = $discount_type;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of product_offer_id
     */ 
    public function getProduct_offer_id()
    {
        return $this->product_offer_id;
    }

    /**
     * Set the value of product_offer_id
     *
     * @return  self
     */ 
    public function setProduct_offer_id($product_offer_id)
    {
        $this->product_offer_id = $product_offer_id;

        return $this;
    }

    /**
     * Get the value of start_date_time
     */ 
    public function getStart_date_time()
    {
        return $this->start_date_time;
    }

    /**
     * Set the value of start_date_time
     *
     * @return  self
     */ 
    public function setStart_date_time($start_date_time)
    {
        $this->start_date_time = $start_date_time;

        return $this;
    }

    /**
     * Get the value of end_date_time
     */ 
    public function getEnd_date_time()
    {
        return $this->end_date_time;
    }

    /**
     * Set the value of end_date_time
     *
     * @return  self
     */ 
    public function setEnd_date_time($end_date_time)
    {
        $this->end_date_time = $end_date_time;

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