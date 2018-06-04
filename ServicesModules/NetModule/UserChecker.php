<?php
    session_start();
    include('connect.inc');

    if(isset($username) && isset($password))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
    
        $query="SELECT * FROM userdatabase WHERE username='$username' AND password='$password'";
        $result=mysql_query($query);
        $count=mysql_num_rows($result);
        if($count != 0)
        {
            while($row=mysql_fetch_array($result))
            {

                $Usertype=$row['Usertype'];
                $Username=$row['username'];
                $Password=$row['password'];

                $_SESSION['Usertype']=$Usertype;
                $_SESSION['username']=$username;
                $_SESSION['password']=$password;


                if ($_SESSION['Usertype']=="Requestor")
                {
                    if(($Username==$username) && ($Password==$password))
                    {
                      header('location:Home.php'); 

                    }
                    else
                    {
                        echo "<script type='text/javascript'>alert('Username or Password is incorrect!'); window.location = 'login.php';</script>";  
                    }
                }
                elseif ($_SESSION['Usertype']=="Superior")
                {
                    if(($Username==$username) && ($Password==$password))
                    {
                        header('location:Home.php');
                    }
                    else
                    {
                        echo "<script type='text/javascript'>alert('Username or Password is incorrect!'); window.location = 'login.php';</script>";  
                    }
                } 
                elseif ($_SESSION['Usertype']=="Admin")
                {
                    if(($Username==$username) && ($Password==$password))
                    {
                        header('location:Transactions.php');
                    }
                    else
                    {
                        echo "<script type='text/javascript'>alert('Username or Password is incorrect!'); window.location = 'login.php';</script>";  
                    }
                }
                elseif ($_SESSION['Usertype']=="ICTC")
                {
                    if(($Username==$username) && ($Password==$password))
                    {
                        header('location:Home.php');
                    }
                    else
                    {
                        echo "<script type='text/javascript'>alert('Username or Password is incorrect!'); window.location = 'login.php';</script>";  
                    }
                }
                elseif ($_SESSION['Usertype']=="Technician")
                {
                    if(($Username==$username) && ($Password==$password))
                    {
                        header('location:Home.php');
                    }
                    else
                    {
                        echo "<script type='text/javascript'>alert('Username or Password is incorrect!'); window.location = 'login.php';</script>";  
                    }
                }
                else
                {
                    if(($Username==$username) && ($Password==$password))
                    {
                        header('location:Home.php');
                    }
                    else
                    {
                        echo "<script type='text/javascript'>alert('Username or Password is incorrect!'); window.location = 'login.php';</script>";  
                    }
                }
            }
        }
        else 
        {
            echo "<script type='text/javascript'>alert('Username or password does not Exist!'); window.location = 'login.php';</script>"; 
        }
    } 
    
?>
    
