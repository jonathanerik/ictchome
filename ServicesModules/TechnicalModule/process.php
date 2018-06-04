<?php
if(isset($_POST['approve'])){
                if(isset($_POST['check'])){
                    foreach ($_POST['check'] as $value){
                        $sql = "UPDATE forms SET status = 1 WHERE formid = $value"; //write this query according to your table schema
                        mysql_query($sql) or die (mysql_error());
                    }
                }
            }
			?>