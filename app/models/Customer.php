<?php
/**
 * Customer model
 */
class Customer extends Eloquent{
    /**
     * Customer belongs to a shop
     * @return Shop customer's shop
     */
    public function shop(){
        return $this->belongsTo('Shop');
    }
}
