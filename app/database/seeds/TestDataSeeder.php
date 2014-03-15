<?php
class TestDataSeeder extends Seeder {

    public function run()
    {
        //create a owners with phone 
        DB::table('owners')->delete();
        $user = new Owner();
        $user->phone = "Owner phone";
        $user->save();
        //create some shop
        $shop1 = new Shop();
        $shop1->phone = "Shop1 phone";
        $user->shops()->save($shop1);
        $shop2 = new Shop();
        $shop2->phone = "Shop2 phone";
        $user->shops()->save($shop2);
        $shop3 = new Shop();
        $shop3->phone = "Shop3 phone";
        $user->shops()->save($shop3);
        //create some customers
        $c1 = new Customer();
        $c1->phone = "Customer1 phone";
        $shop1->customers()->save($c1);
        $c2 = new Customer();
        $c2->phone = "Customer2 phone";
        $shop1->customers()->save($c2);
        $c3 = new Customer();
        $c3->phone = "Customer3 phone";
        $shop1->customers()->save($c3);
        $c1 = new Customer();
        $c1->phone = "Customer4 phone";
        $shop2->customers()->save($c1);
        $c2 = new Customer();
        $c2->phone = "Customer5 phone";
        $shop2->customers()->save($c2);
        $c3 = new Customer();
        $c3->phone = "Customer6 phone";
        $shop2->customers()->save($c3);
        $c1 = new Customer();
        $c1->phone = "Customer7 phone";
        $shop3->customers()->save($c1);
        $c2 = new Customer();
        $c2->phone = "Customer8 phone";
        $shop3->customers()->save($c2);
        $c3 = new Customer();
        $c3->phone = "Customer9 phone";
        $shop3->customers()->save($c3);
    }

}