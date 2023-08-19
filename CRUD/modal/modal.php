<?php

// error_reporting(0);
class modal
{
    public $connection="";
    public function __construct()
    {
        //database connectivity
        $conn=$this->connection=new mysqli("localhost", "root", "", "crud");
        if($conn) {
            //  echo "<h5>Connection stablished successfully</h5>";
        } else {
            die(mysqli_error($conn));
        }
    }
    //create a member function for insart  data
    public function insalldata($table, $data)
    {
        $column=array_keys($data);
        $column1=implode(",", $column);
        $value=array_values($data);
        $value1=implode("','", $value);
        $insert="insert into $table($column1)values('$value1')";
        $exe=mysqli_query($this->connection, $insert);
        return $exe;
    }

    //create a member function for show data
    public function selectalldata($table)
    {
        $select="select * from $table";
        $exe=mysqli_query($this->connection, $select);
        while($fetch=mysqli_fetch_array($exe)) {
            $arr[]=$fetch;
        }
        return $arr;
    }

    //deleta data
    public function deletdata($table, $id)
    {
        //key convert array into value or string
        $column=array_keys($id);
        $column1=implode(",", $column);
        //values convert array into value or string
        $value=array_values($id);
        $value1=implode(",", $value);

        $delete="delete from $table where $column1='$value1'";
        $exe=mysqli_query($this->connection, $delete);
        return $exe;
    }
    public function showdata($table, $column, $id)
    {
        $shw="select * from $table where $column='$id'";
        $exe=mysqli_query($this->connection, $shw);
        while($fetch=mysqli_fetch_array($exe)) {
            $arr[]=$fetch;
        }
        return $arr;
    }

    //create a member function for update dat
    public function updatedata($table, $nm, $em, $phone, $adddate, $column, $id)
    {
        $upd="update $table set name='$nm',email='$em',phone='$phone',adddate='$adddate' where $column='$id'";
        $exe=mysqli_query($this->connection, $upd);
        return $exe;
    }
}