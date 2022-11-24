<?php
class Entity_e
{
    public $IDNV;
    public $Hoten;
    public $IDPB;
    public $Diachi;
    public $Tenpb;
    public $Mota;

    public function __construct($_IDNV,$_Hoten,$_IDPB,$_Diachi,$_Tenpb,$_Mota)
    {
        $this->IDNV = $_IDNV;
        $this->Hoten =$_Hoten;
        $this->IDPB = $_IDPB;
        $this->Diachi =$_Diachi;
        $this->Tenpb =$_Tenpb;
        $this->Mota =$_Mota;
    }
}
class Entity_s
{
    public $IDNV;
    public $Hoten;
    public $Diachi;
    public $Tenpb;

    public function __construct($_IDNV,$_Hoten,$_Diachi,$_Tenpb)
    {
        $this->IDNV = $_IDNV;
        $this->Hoten =$_Hoten;
        $this->Diachi =$_Diachi;
        $this->Tenpb =$_Tenpb;
    }
}

class Entity_a
{
    public $id;
    public $nickname;
    public $username;
    public $password;

    public function __construct($_id,$_nickname,$_username,$_password)
    {
        $this->id = $_id;
        $this->nickname =$_nickname;
        $this->username =$_username;
        $this->password =$_password;
    }
}