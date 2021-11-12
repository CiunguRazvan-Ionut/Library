<?php

class bookuser extends book extends user
{
    public $id_bookuser;
    public $id_book;
    public $id_user;
    public $rent_date;
    public $return_date;

    public function __constructor($id_bookuser,$id_book,$id_user,$rent_date,$return_date)
    {
        $this->id_bookuser=$id_bookuser;
        $this->id_book=$id_book;
        $this->id_user=$id_user;
        $this->rent_date=$rent_date;
        $this->return_date=$return_date;
    }

}

?>