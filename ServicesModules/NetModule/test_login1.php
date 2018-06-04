<?php
    session_start();
    include('connect.inc');
?>
<?php
    if(isset($username) && isset($password))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
    
        $query="SELECT * FROM userdatabase WHERE Username='$username' AND Password='$password'";
        $result=mysql_query($query);
        $count=mysql_num_rows($result);
        if($count != 0)
        {
            while($row=mysql_fetch_array($result))
            {
                $UserID=$row['UserID'];
                $Usertype=$row['Usertype'];
                $Name=$row['Name'];
                $Username=$row['username'];
                $Password=$row['password'];

                $_SESSION["Usertype"]=$Usertype;

                if ($_SESSION["Usertype"]=="Requestor")
                {
                    header('location:Home.php');
                }
                elseif ($_SESSION["Usertype"]=="NetSupport")
                {
                    header('location:NetSupport.php');
                } 
                elseif ($_SESSION["Usertype"]=="Superior")
                {
                    header('location:Superior.php');
                }
                elseif ($_SESSION["Usertype"]=="Admin")
                {
                    header('location:Admin.php');
                }
                else
                {
                    echo"";  
                }
            }
        }
        else 
        {
            echo"";  
        }
    } 
    
?>
    
