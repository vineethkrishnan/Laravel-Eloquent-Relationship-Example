<?php
/**
 * Shop model, shop has owner and and many customers
 */
class Shop extends Eloquent{
    /**
     * Shop belongs to owner
     * @return Owner shops owner
     */
    public function owner(){
        return $this->belongsTo('Owner');
    }
    /**
     * Shop has many customers
     * @return Customer shop's customers
     */
    public function customers(){
        return $this->hasMany('Customer');
    }
}
