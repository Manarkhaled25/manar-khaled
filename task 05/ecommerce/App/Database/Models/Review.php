<?php
namespace App\Database\Models;

use App\Database\Contracts\ConnectTo;
use App\Database\Models\Model;


class Review extends Model implements ConnectTo {
    private const table = "reviews";
    private int $product_id;
    private string $comment;
    private string $rate;
    private int $user_id;
    private string $updated_at;

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
     * Get the value of comment
     */ 
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set the value of comment
     *
     * @return  self
     */ 
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get the value of rate
     */ 
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set the value of rate
     *
     * @return  self
     */ 
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get the value of user_id
     */ 
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     *
     * @return  self
     */ 
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

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
    public function getReviews()
    {
        $query = "SELECT
                        `reviews`.*,
                        CONCAT(`users`.`first_name` , ' ' , `users`.`last_name`) AS `full_name`
                    FROM
                        `reviews`
                    JOIN `users`
                    ON `users`.`id` = `reviews`.`user_id`
                    WHERE
                        `reviews`.`product_id` = ?";
        $stmt = $this->con->prepare($query);
        $stmt->bind_param('i', $this->id);
        $stmt->execute();
        return $stmt;
    }
}