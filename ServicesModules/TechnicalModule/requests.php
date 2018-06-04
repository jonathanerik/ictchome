<?php
					$query="SELECT * FROM form";
					$result=mysql_query($query);

					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{
							$formid=$row['formid'];
							$fullname=$row['fullname'];
							$email=$row['email'];
							$contactnumber=$row['contactnumber'];
							$date=$row['date'];
							$building=$row['building'];
							$department=$row['department'];
							$roomnumber=$row['roomnumber'];
							$issues=$row['issues'];
							$request=$row['request'];

							echo "<tr>";
							echo "<td class='info'>".$formid."</td>";
							echo "<td class='info'>".$fullname."</td>";
							echo "<td>".$email."</td>";
							echo "<td>".$contactnumber."</td>";
							echo "<td>".$date."</td>";
							echo "<td>".$building."</td>";
							echo "<td>".$department."</td>";
							echo "<td>".$roomnumber."</td>";
							echo "<td>".$issues."</td>";
							echo "<td>".$request."</td>";

							if (($request == 'APPROVED') || ($request == 'DISAPPROVED') || ($request == 'CANCELLED'))
							{
								echo "<td colspan='2'></td>";
							}
							else
							{?>
								<form action="superior.php" method="POST">
									<input type="hidden" name="request_selected" value="<?php echo $formid ?>">
									<?php
										if ($request == 'Request for Cancellation')
										{
											?><td colspan='2'><input type='submit' id='received' name='approve' value='Approve'></td><?php
										}
										else
										{
											?><td><input type='submit' id='received' name='approve' value='Approve'></td>
											<td><input type='submit' id='received' name='deny' value='Disapprove'></td><?php
										}
									?>
								</form><?php
							}
						}
							
							if(isset($_POST['approve']))
							{
								$request_selected=$_POST['request_selected'];
								if($request == 'PENDING')
								{
									
									$request='APPROVED';
								}
								else
								{
									$request='CANCELLED';	
								}
								
								$query_select="SELECT * FROM form WHERE formid = '$request_selected'";
								$result_query=mysql_query($connect,$query_select);
								if(mysql_num_rows($result_query)>0)
								{
									$query_req="UPDATE request SET request ='$request' WHERE formid = '$request_selected'";
									$query_update=mysql_query($connect,$query_req);

									$query_apprv="UPDATE for_approval SET status ='$request' WHERE formid = '$request_selected'";
									$query_update_apprv=mysql_query($connect,$query_apprv);
												
									if(($query_update) && ($query_update_apprv))
									{
										if($status == 'APPROVED')
										{
											echo '<script type="text/javascript"> alert("Request has been approved!"); window.location = "superior.php"; </script>';
										}
										else
										{
											echo '<script type="text/javascript"> alert("Request has been cancelled!"); window.location = "superior.php"; </script>';
										}
										
									}
									else
									{
										echo '<script type="text/javascript"> alert("ERROR update!") window.location = "superior.php"; </script>';
										//echo (mysql_error());
									}
								}
								else
								{
									echo '<script type="text/javascript"> alert("ERROR inventory") </script>';
									//echo (mysql_error());
								}
							}
							elseif(isset($_POST['deny']))
							{
								/*STATUS PENDING TO DISAPPROVED*/
								$request_selected=$_POST['request_selected'];
								if($request == 'PENDING')
								{
									
									$request='DISAPPROVED';
								}
								else
								{
									$request='CANCELLED';	
								}
								
								$query_select="SELECT * FROM form WHERE formid = '$request_selected'";
								$result_query=mysql_query($connect,$query_select);
								if(mysql_num_rows($result_query)>0)
								{
									$query_req="UPDATE request SET status ='$request' WHERE formid = '$request_selected'";
									$query_update=mysqli_query($connect,$query_req);

									$query_apprv="UPDATE for_approval SET status ='$status' WHERE request_ID = '$request_selected'";
									$query_update_apprv=mysqli_query($connect,$query_apprv);
												
									if(($query_update) && ($query_update_apprv))
									{
										if($status == 'APPROVED')
										{
											echo '<script type="text/javascript"> alert("Request has been approved!"); window.location = "view_requests.php"; </script>';
										}
										else
										{
											echo '<script type="text/javascript"> alert("Request has been cancelled!"); window.location = "view_requests.php"; </script>';
										}
										
									}
									else
									{
										echo '<script type="text/javascript"> alert("ERROR update!") window.location = "view_requests.php"; </script>';
										//echo (mysql_error());
									}
								}
								else
								{
									echo '<script type="text/javascript"> alert("ERROR inventory") </script>';
									//echo (mysqli_error());
								}
								/*END OF STATUS PENDING TO DISAPPROVED*/
							}?>
					
						<button id="submit" class="permit_req">Permit Requests</button><?php
					}?><?php
					$query="SELECT * FROM request";
					$result=mysql_query($connect,$query);

					if(mysql_num_rows($result)>0)
					{
						while($row=mysqli_fetch_array($result))
						{
							$request_ID=$row['request_ID'];
							$rqstr_name=$row['rqstr_name'];
							$date_from=$row['date_from'];
							$date_to=$row['date_to'];
							$time_rqstd=$row['time_rqstd'];
							$room=$row['room'];
							$college=$row['college'];
							$item_name=$row['item_name'];
							$quantity=$row['quantity'];
							$date_rtrn=$row['return_date'];
							$time_rtrn=$row['return_time'];
							$status=$row['status'];

							echo "<tr>";
							echo "<td class='info'>".$request_ID."</td>";
							echo "<td class='info'>".$rqstr_name."</td>";
							echo "<td>".$date_from."</td>";
							echo "<td>".$date_to."</td>";
							echo "<td>".date('h:i A', strtotime($time_rqstd))."</td>";
							echo "<td>".$room."</td>";
							echo "<td>".$college."</td>";
							echo "<td>".$item_name."</td>";
							echo "<td>".$quantity."</td>";
							echo "<td>".$date_rtrn."</td>";
							echo "<td>".date('h:i A', strtotime($time_rtrn))."</td>";
							echo "<td>".$status."</td>";

							if (($status == 'APPROVED') || ($status == 'DISAPPROVED') || ($status == 'CANCELLED'))
							{
								echo "<td colspan='2'></td>";
							}
							else
							{?>
								<form action="view_requests.php" method="POST">
									<input type="hidden" name="request_selected" value="<?php echo $request_ID ?>">
									<?php
										if ($status == 'Request for Cancellation')
										{
											?><td colspan='2'><input type='submit' id='received' name='approve' value='Approve'></td><?php
										}
										else
										{
											?><td><input type='submit' id='received' name='approve' value='Approve'></td>
											<td><input type='submit' id='received' name='deny' value='Disapprove'></td><?php
										}
									?>
								</form><?php
							}
						}
							
							if(isset($_POST['approve']))
							{
								$request_selected=$_POST['request_selected'];
								if($status == 'PENDING')
								{
									
									$status='APPROVED';
								}
								else
								{
									$status='CANCELLED';	
								}
								
								$query_select="SELECT * FROM request WHERE request_ID = '$request_selected'";
								$result_query=mysqli_query($connect,$query_select);
								if(mysqli_num_rows($result_query)>0)
								{
									$query_req="UPDATE request SET status ='$status' WHERE request_ID = '$request_selected'";
									$query_update=mysqli_query($connect,$query_req);

									$query_apprv="UPDATE for_approval SET status ='$status' WHERE request_ID = '$request_selected'";
									$query_update_apprv=mysqli_query($connect,$query_apprv);
												
									if(($query_update) && ($query_update_apprv))
									{
										if($status == 'APPROVED')
										{
											echo '<script type="text/javascript"> alert("Request has been approved!"); window.location = "view_requests.php"; </script>';
										}
										else
										{
											echo '<script type="text/javascript"> alert("Request has been cancelled!"); window.location = "view_requests.php"; </script>';
										}
										
									}
									else
									{
										echo '<script type="text/javascript"> alert("ERROR update!") window.location = "view_requests.php"; </script>';
										//echo (mysql_error());
									}
								}
								else
								{
									echo '<script type="text/javascript"> alert("ERROR inventory") </script>';
									//echo (mysqli_error());
								}
							}
							elseif(isset($_POST['deny']))
							{
								/*STATUS PENDING TO DISAPPROVED*/
								$request_selected=$_POST['request_selected'];
								if($status == 'PENDING')
								{
									
									$status='DISAPPROVED';
								}
								else
								{
									$status='CANCELLED';	
								}
								
								$query_select="SELECT * FROM request WHERE request_ID = '$request_selected'";
								$result_query=mysqli_query($connect,$query_select);
								if(mysqli_num_rows($result_query)>0)
								{
									$query_req="UPDATE request SET status ='$status' WHERE request_ID = '$request_selected'";
									$query_update=mysqli_query($connect,$query_req);

									$query_apprv="UPDATE for_approval SET status ='$status' WHERE request_ID = '$request_selected'";
									$query_update_apprv=mysqli_query($connect,$query_apprv);
												
									if(($query_update) && ($query_update_apprv))
									{
										if($status == 'APPROVED')
										{
											echo '<script type="text/javascript"> alert("Request has been approved!"); window.location = "view_requests.php"; </script>';
										}
										else
										{
											echo '<script type="text/javascript"> alert("Request has been cancelled!"); window.location = "view_requests.php"; </script>';
										}
										
									}
									else
									{
										echo '<script type="text/javascript"> alert("ERROR update!") window.location = "view_requests.php"; </script>';
										//echo (mysql_error());
									}
								}
								else
								{
									echo '<script type="text/javascript"> alert("ERROR inventory") </script>';
									//echo (mysqli_error());
								}
								/*END OF STATUS PENDING TO DISAPPROVED*/
							}?>
					
						<button id="submit" class="permit_req">Permit Requests</button><?php
					}?>