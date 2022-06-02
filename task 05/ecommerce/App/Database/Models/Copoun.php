<?php
namespace App\Database\Models;
use App\Database\Models\Model;
use App\Database\Contracts\ConnectTo;
class Copoun extends Model implements ConnectTo {
    private const table = "copouns";
    private int $id;
    private string $code;
    private float $discount;
    private string $discount_type;
    private int $max_number_of_value;
    private int $max_discount_usage;
    private int $max_discount_usage_per_user;
    private float $min_order_price;
    private int $status;
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
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;

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
     * Get the value of max_number_of_value
     */ 
    public function getMax_number_of_value()
    {
        return $this->max_number_of_value;
    }

    /**
     * Set the value of max_number_of_value
     *
     * @return  self
     */ 
    public function setMax_number_of_value($max_number_of_value)
    {
        $this->max_number_of_value = $max_number_of_value;

        return $this;
    }

    /**
     * Get the value of max_discount_usage
     */ 
    public function getMax_discount_usage()
    {
        return $this->max_discount_usage;
    }

    /**
     * Set the value of max_discount_usage
     *
     * @return  self
     */ 
    public function setMax_discount_usage($max_discount_usage)
    {
        $this->max_discount_usage = $max_discount_usage;

        return $this;
    }

    /**
     * Get the value of min_order_price
     */ 
    public function getMin_order_price()
    {
        return $this->min_order_price;
    }

    /**
     * Set the value of min_order_price
     *
     * @return  self
     */ 
    public function setMin_order_price($min_order_price)
    {
        $this->min_order_price = $min_order_price;

        return $this;
    }

    /**
     * Get the value of max_discount_usage_per_user
     */ 
    public function getMax_discount_usage_per_user()
    {
        return $this->max_discount_usage_per_user;
    }

    /**
     * Set the value of max_discount_usage_per_user
     *
     * @return  self
     */ 
    public function setMax_discount_usage_per_user($max_discount_usage_per_user)
    {
        $this->max_discount_usage_per_user = $max_discount_usage_per_user;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

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