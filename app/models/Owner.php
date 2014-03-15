<?php
/**
 * Owner model, owner owns many shops
 */
class Owner extends Eloquent{
    /**
     * Owner has many shops
     * @return Shop owners shops
     */
    public function shops(){
        return $this->hasMany('Shop');
    }
    /**
     * Owner has many customers through his shops
     * @return Customer customers from owners shop
     */
    public function customers(){
        return $this->hasManyThrough('Customer','Shop');
    }
}
