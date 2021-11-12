<?php

class location extends book
{
    public $id_location;
    public $street;
    public $street_number;
    public $library_name;
    location($id_location, $street, $street_number, $library_name)
    {
        $this->id_location=$id_location;
        $this->street=$street;
        $this->street_number=$street_number;
        $this->library_name=$library_name;
    }

}

?>