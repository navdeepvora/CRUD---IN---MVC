<?php

error_reporting(0);
require_once("modal/modal.php");
class controller extends modal
{
    public function __construct()
    {
        parent::__construct();
        //insert data
        if(isset($_POST["add"])) {
            $nm=$_POST["name"];
            $em=$_POST["email"];
            $phone=$_POST["phone"];
            $ad=$_POST["ad"];
            $data=array("name"=>$nm,"email"=>$em,"phone"=>$phone,"adddate"=>$ad);
            $chk=$this->insalldata('add_contect', $data);

            if($chk) {
                echo "<script>
            alert('you are details add Sucssfulley')
            window.location='./';
            </script>";

            } else {
                echo "<script>
         alert('you are details Not add Sucssfulley')
         // window.location='login-us';
         </script>";
            }
        }

        if(isset($_POST["upd"])) {
            $id=$_GET["show"];
            $nm=$_POST["name"];
            $em=$_POST["email"];
            $phone=$_POST["phone"];
            $adddate=$_POST["ad"];

            $chk=$this->updatedata('crud', $nm, $em, $phone, $adddate, 'id', $id);
            if($chk) {
                echo "<script>
        alert('Your Data Updated successfully')
        window.location='./';
        </script>";
            } else {
                echo "<script>
        alert('Your DataNot  Updated successfully')
        // window.location='manageprofile';
        </script>";
            }
        }

        //view data
        $stshw=$this->selectalldata('crud');

        //delete data
        if(isset($_GET["delete"])) {
            $delid=$_GET["delete"];
            $id=array("id"=>$delid);
            $chk=$this->deletdata('crud', $id);
            if($chk) {
                echo "<script>
        alert('Your DATA delete successfully')
        window.location='./';
        </script>";
            }
        }

        //showdata
        $id=$_GET["show"];
        $shw1=$this->showdata('crud', 'id', $id);


        if(isset($_SERVER["PATH_INFO"])) {
            switch ($_SERVER["PATH_INFO"]) {
                case '/':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("view.php");
                    break;

                case '/upd':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("upd.php");
                    break;

                default:
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("404.php");
                    break;
            }
        }
    }
}

$obj=new controller();

?>