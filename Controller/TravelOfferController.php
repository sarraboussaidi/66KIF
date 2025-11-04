<?php
include __DIR__.'/../config.php';

class TravelOfferController
{
    public function listOffers()
    {
        $sql='SELECT* FROM traveloffer';
        $db= config::getconnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch(Exception $e)
        {
            die('Error:'.$e->getMessage());
        }
    }
}



?>