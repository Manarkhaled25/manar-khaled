<?php
namespace App\Database\Models;

use App\Database\Contracts\ConnectTo;
use App\Database\Models\Model;


class Spec extends Model implements ConnectTo {
    private const table = "specs";
    private int $id;
    private string $name;

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
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    public function getSpecs()
    {
        $query = "SELECT
                    `products_specs`.*,
                    `specs`.`name`
                FROM
                    `products_specs`
                JOIN `specs` ON `specs`.`id` = `products_specs`.`spec_id`
                WHERE `products_specs`.`product_id` = ?";
        $stmt = $this->con->prepare($query);
        $stmt->bind_param('i', $this->id);
        $stmt->execute();
        return $stmt;
    }
}