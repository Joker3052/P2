<?php
include_once("Model/M_m.php");
class Ctrl_C{
    public $modelC;	

     public function __construct()  
     {  
          $this->modelC = new Model_M();
     } 
    public function invokeNhanvien()
    {
        if(isset($_GET['stidIDNV']))
        {
            $nhanvien = $this->modelC->getnhanvienDetail($_GET['stidIDNV']);
            include_once("View/nhanviendetail.php");
        }else
        {
            $nhanvien = $this->modelC->getAll();
            include_once("View/nhanvienlist.php");
        }
    }
    public function invokePhongban()
    {
        if(isset($_GET['stidIDPB']))
        {
            $phongban = $this->modelC->getAll();
            // $phongban = $this->modelC->getphongbanDetail($_GET['stidIDPB']);
            include_once("View/phongbanDetail.php");
        }else
        {
            $phongban = $this->modelC->getAll();
            include_once("View/phongbanlist.php");
        }
    }
    public function invokeSearch()
    {
         $search = $this->modelC->searchHoten();
            include_once("View/search.php");
    }
    public function invokeLogin()
    {
         $admin = $this->modelC->getAllAdmmin();
            include_once("View/login.php");
    }
    public function invokeUpdate()
    {
         $nhanvien = $this->modelC->getAll();
            include_once("View/update.php");
    }
    public function invokeInput()
    {
         $nhanvien = $this->modelC->getUpdate();
         //echo $nhanvien->Hoten;
            include_once("View/input.php");
    }
    // public function invokeDelete()
    // {
    //      $nhanvien = $this->modelC->getDelete();
    //      //echo $nhanvien->Hoten;
    //         include_once("View/update.php");
    // }
};
// $C_Student =new Ctrl_student();
// $C_Student->invoke();
