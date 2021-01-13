<?php

class Article
{

    public  $id,
            $name,
            $description,
            $price,
            $weight,
            $available,
            $image,
            $quantity;


public function __consctruct($id,$name,$description,$price,$weight,$available,$image,$quantity)
{
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->weight = $weight;
        $this->available = $available;
        $this->image = $image;
        $this->quantity = $quantity;


}

public function getId(){
        return $this->id;
}
        
public function getName(){
        return $this->name;
}
public function getDescription(){
        return $this->description;
}
               
public function getPrice(){
        return $this->price;
}
                
public function getWeight(){
        return $this->weight;
}
        
public function getAvailable(){
        return $this->available;
}
        
public function getImage(){
        return $this->image;
}
        
public function getQuantity(){
        return $this->quantity;
}
        
        
}

?>