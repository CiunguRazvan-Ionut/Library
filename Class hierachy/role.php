<?php

class role extends user
{
    public $id_role;
    public $user_role;
    public function __constructor($id_role, $user_role)
    {
        $this->id_role=$id_role;
        $this->user_role=$user_role;
    }
}

?>