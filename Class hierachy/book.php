<?php

class book
{
    public $id_book;
	public $isbn;
	public $title;
	public $autor;
	public $publisher;
	public $id_location;

    public function __constructor($id_book,$isbn,$title,$autor,$publisher,$id_location)
    {
        $this->id_book = $id_book;
        $this->isbn = $isbn;
        $this->title = $title;
        $this->autor = $autor;
        $this->publisher = $publisher;
        $this->id_location = $id_location;

    }

}
?>