<?php

class user
{
    public $id_user;
	private $cnp;
	public $first_name;
	public $last_name;
	private $id_role;

    public function __constructor($id_user,$cnp,$first_name,$last_name,$id_role)
    {
        $this->id_user = $id_user;
        $this->cnp= $cnp;
        $this->first_name= $first_name;
        $this->last_name= $last_name;
        $this->id_role= $id_role;
    }
    public function setcnp($numeric_code)
    {
        $this->cnp=$numeric_code;
    }
    public function getcnp()
    {
        return $this->cnp;
    }
    public function setid_role()
    {
        $this->id_role=$id_role;
    }
    public function getid_role()
    {
        return $thix->id_role;
    }
}

?>