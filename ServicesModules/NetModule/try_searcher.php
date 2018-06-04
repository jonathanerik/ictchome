<?php
    session_start();
    include('connect.inc');

    if(isset($submit))
    {
        $username=$_POST['username'];
        $id=$_POST['id'];
    
        $query="SELECT * FROM requestdatabase UNION userdatabase WHERE username='$username' || id='$id' ";
        $result=mysql_query($query);
        $count=mysql_num_rows($result);
        if($count != 0)
        {
            while($row=mysql_fetch_array($result))
            {

                $Username=$row['username'];
                $id=$row['id'];

                $_SESSION['username']=$username;
                $_SESSION['id']=$id;


                if ($_SESSION['searcher']=="username")
                {

                      header('location:1.php'); 
                }
                else
                {
                    echo "qwe";  
                }
                
            }
        }
    } 
    
?>
    qqwe
