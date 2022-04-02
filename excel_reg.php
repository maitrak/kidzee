<?php  
$connection=mysqli_connect("localhost","root","","kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
 $query ="SELECT `child_id`, `F_no`, `child_no`, `program`, `batch`, `timeing_from`, `timeing_to`, `Image1`, `Image2`,
		`Image3`, `name_child`, `gender`, `dob`, `pob`, `height`, `weight`, `blood`, `uniform_reg`, `uniform_win`, `Lang`,
		`House`, `Street_name`, `Area`, `Landmmark`, `City`, `State`, `Pin`, `telephone`, `Mobile`, `Child_Stay`, `M_name`,
		`M_House`, `M_Street`, `M_Area`, `M_Landmmark`, `M_City`, `M_State`, `M_APin`, `M_Phone`, `M_Occupation`, 
		`M_Gualification`, `M_Designation`, `M_Office`, `M_OPin`, `M_Contact`, `M_Mobile`, `M_Email`, `M_Medial`, `F_name`,
		`F_House`, `F_Street`, `F_Area`, `F_Landmmark`, `F_City`, `F_State`, `F_APin`, `F_Phone`, `F_Occupation`,
		`F_Gualification`, `F_Designation`, `F_Office`, `F_OPin`, `F_Contact`, `F_Mobile`, `F_Email`, `F_Medial`, `1_Name`,
		`1_gender`, `1_dob`, `1_school`, `1_std`, `1_alumni`, `2_Name`, `2_gender`, `2_dob`, `2_school`, `2_std`, `2_alumni`,
		`01_Name`, `01_gender`, `01_relationship`, `01_dob`, `02_Name`, `02_gender`, `02_relationship`, `02_dob`, `v_1`,
		`v_2`, `v_3`, `v_4`, `v_5`, `v_6`, `v_7`, `v_8`, `v_9`, `v_10`, `v_11`, `E1_name`, `E1_address`, `E1_pin`, `E1_phone`,
		`E1_mobile`, `E1_email`, `E1__rela`, `E2_name`, `E2_address`, `E2_pin`, `E2_phone`, `E2_mobile`, `E2_email`,
		`E2__rela`, `DOC_name`, `DOC_add`, `DOC_pin`, `DOC_mobile`, `DOC_email`, `allergies`, `allergies_discp`, `issue`,
		`issue_discp`, `medication`, `medication_discp`, `understand`, `comment`, `Batch_detail`, `timing`, `date`,
		`invoice`, `amount`,`pdf1`,`pdf2`,`pdf3` FROM `register`";
 $result = mysqli_query($connection, $query);  
 ?>  
 <?php
include('nav.php');
?>
 <!DOCTYPE html>  
 <html>  
      <head>  
           
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:900px;">  
                  
                <h3 align="center">Admission Form Excel</h3>                 
                <br />  
                <form method="post" action="export_reg.php" align="center">  
                     <input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
                </form>  
                <br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th>>Child Id</th>  
                               <th>Form No</th>  
                               <th>Child No</th>  
                               <th>Name of Program</th>  
                               <th>Batch</th>  
                               <th>timing From </th>  
                               <th>timing To </th>  
                               <th>Child Photo </th>  
                               <th>Father Photo </th>  
                               <th>Mother Photo </th>  
                               <th>Name of the Child </th>  
                               <th>Gender  </th> 
                               <th>Date of birth </th>  
                               <th>Place of Birth  </th>  
                               <th>height(cm) </th>  
                               <th>Weight(kg) </th>  
                               <th>Blood Group </th>  
                               <th>Uniform Size Regular </th>  
                               <th>Uniform Size Winter </th>  
                               <th>Languages spoken at home </th>  
                               <th>Address:House No </th>  
                               <th>Street name </th>  
                               <th>Area </th>  
                               <th>Landmmark </th>  
                               <th>City  </th>  
                               <th>State  </th>  
                               <th>Pin  </th>  
                               <th>telephome number </th>  
                               <th>Mobile number </th>  
                               <th>Child Stay/live With </th>  
                               <th>Mather's Name</th>  
                               <th>Mather's Resideantial:House No</th>  
                               <th>Mather's Street name</th>  
                               <th>Mather's Area</th>  
                               <th>Mather's Landmmark </th>  
                               <th>Mather's City </th>  
                               <th>Mather's State </th>  
                               <th>Mather's Pin </th>  
                               <th>Mather's Phone Number</th>  
                               <th>Mather's Occupation</th>  
                               <th>Mather's Qualification</th>  
                               <th>Mather's Designation</th>  
                               <th>Mather's Office Address</th>  
                               <th>Mather's office Pin</th>  
                               <th>Mather's Office Contact No</th>  
                               <th>Mather's Office Mobile NO</th>  
                               <th>Mather's Office Email</th>  
                               <th>Mather's Medial history</th>  
                               <th>Father's Name</th>  
                               <th>Father's Resideantial:House No</th>  
                               <th>Father's Street name</th>  
                               <th>Father's Area </th>  
                               <th>Father's Landmmark </th>  
                               <th>Father's City </th>  
                               <th>Father's State </th>  
                               <th>Father's Pin </th>  
                               <th>Father's Phone Number</th>  
                               <th>Father's Occupation</th>  
                               <th>Father's Qualification</th>  
                               <th>Father's Designation</th>  
                               <th>Father's Office Address</th>  
                               <th>Father's Office Pin</th>  
                               <th>Father's Office Contact No</th>  
                               <th>Father's Office Mobile NO</th>  
                               <th>Father's Office Email</th>  
                               <th>Father's Medial history</th>  
                               <th>Sibling 1) Name </th>  
                               <th>Sibling 1) gender </th>  
                               <th>Sibling 1) Date of birth</th>  
                               <th>Sibling 1) School/attending</th>  
                               <th>Sibling 1) KIDZEE alumni</th>                                
							   <th>Sibling 2) Name </th>  
                               <th>Sibling 2) gender </th>  
                               <th>Sibling 2) Date of birth</th>  
                               <th>Sibling 2) School/attending</th>  
                               <th>Sibling 2) KIDZEE alumni</th>  
                               <th>Additional Member 1) Name  </th>  
                               <th>Additional Member 1) gender</th>  
                               <th>Additional Member 1) relationship with child</th>  
                               <th>Additional Member 1) Date of birth</th>                                
							   <th>Additional Member 2) Name  </th>  
                               <th>Additional Member 2) gender</th>  
                               <th>Additional Member 2) relationship with child</th>  
                               <th>Additional Member 2) Date of birth</th>  
                               <th>vaccine 1 </th>  
                               <th>vaccine 2 </th>  
                               <th>vaccine 3 </th>  
                               <th>vaccine 4 </th>  
                               <th>vaccine 5 </th>  
                               <th>vaccine 6 </th>  
                               <th>vaccine 7 </th>  
                               <th>vaccine 8 </th>  
                               <th>vaccine 9 </th>  
                               <th>vaccine 10 </th>  
                               <th>vaccine 11 </th>  
                               <th>EMERGENCY CONTACT 1) NAME  </th>  
                               <th>EMERGENCY CONTACT 1) Address </th>  
                               <th>EMERGENCY CONTACT 1) PIN </th>  
                               <th>EMERGENCY CONTACT 1) Home phone</th>  
                               <th>EMERGENCY CONTACT 1) Mobile NO</th>  
                               <th>EMERGENCY CONTACT 1) Email</th>  
                               <th>EMERGENCY CONTACT 1) Relationship with child</th>                                
							   <th>EMERGENCY CONTACT 2) NAME  </th>  
                               <th>EMERGENCY CONTACT 2) Address </th>  
                               <th>EMERGENCY CONTACT 2) PIN </th>  
                               <th>EMERGENCY CONTACT 2) Home phone</th>  
                               <th>EMERGENCY CONTACT 2) Mobile NO</th>  
                               <th>EMERGENCY CONTACT 2) Email</th>  
                               <th>EMERGENCY CONTACT 2) Relationship with child</th>  
                               <th>Family Doctor's Name </th>  
                               <th>Family Doctor's Address </th>  
                               <th>Family Doctor's PIN  </th>  
                               <th>Family Doctor's Home phone</th>  
                               <th>Family Doctor's Mobile NO</th>  
                               <th>Family Doctor's Email</th>  
                               <th>Does your cild have any allergies </th>  
                               <th>if yes the please explain </th>  
                               <th>does your child have any physical,emotional or behavioural issue that may interfere with his/her learning </th>  
                               <th>if yes the please explain </th>  
                               <th>At home does your child take an daily medication? </th>  
                               <th>if yes the please explain </th>  
                               <th>Is there any futhere information you feel we should know that may help us understand your child? </th>  
                               <th>Any other comment </th>  
                               <th>Office use Batch details</th>  
                               <th>Office use timing </th>  
                               <th>Office use Date </th>  
                               <th>Office use Invoice/receipt No</th>  
                               <th>Office use Amount</th>  
                               <th>Child's Document</th>  
                               <th>Father's Document</th>  
                               <th>Mother's Document</th>  
                               
 
                               
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                                
							   <td><a href="search_s1.php?userid=<?php echo $row[0]; ?>"><?php echo $row[0]; ?></a></td>  

                               <td><?php echo $row[1]; ?></td>  
                               <td><?php echo $row[2]; ?></td>  
                               <td><?php echo $row[3]; ?></td>  
                               <td><?php echo $row[4]; ?></td>  
                               <td><?php echo $row[5]; ?></td>  
                               <td><?php echo $row[6]; ?></td>  
                               <td><?php echo $row[7]; ?></td>  
                               <td><?php echo $row[8]; ?></td>  
                               <td><?php echo $row[9]; ?></td>  
                               <td><?php echo $row[10]; ?></td>  
                               <td><?php echo $row[11]; ?></td>  
                               <td><?php echo $row[12]; ?></td>  
                               <td><?php echo $row[13]; ?></td>  
                               <td><?php echo $row[14]; ?></td>  
                               <td><?php echo $row[15]; ?></td>  
                               <td><?php echo $row[16]; ?></td>  
                               <td><?php echo $row[17]; ?></td>  
                               <td><?php echo $row[18]; ?></td>  
                               <td><?php echo $row[19]; ?></td>  
                               <td><?php echo $row[20]; ?></td>  
                               <td><?php echo $row[21]; ?></td>  
                               <td><?php echo $row[22]; ?></td>  
                               <td><?php echo $row[23]; ?></td>  
                               <td><?php echo $row[24]; ?></td>  
                               <td><?php echo $row[25]; ?></td>  
                               <td><?php echo $row[26]; ?></td>  
                               <td><?php echo $row[27]; ?></td>  
                               <td><?php echo $row[28]; ?></td>  
                               <td><?php echo $row[29]; ?></td>  
                               <td><?php echo $row[30]; ?></td>  
                               <td><?php echo $row[31]; ?></td>  
                               <td><?php echo $row[32]; ?></td>  
                               <td><?php echo $row[33]; ?></td>  
                               <td><?php echo $row[34]; ?></td>  
                               <td><?php echo $row[35]; ?></td>  
                               <td><?php echo $row[36]; ?></td>  
                               <td><?php echo $row[37]; ?></td>  
                               <td><?php echo $row[38]; ?></td>  
                               <td><?php echo $row[39]; ?></td>  
                               <td><?php echo $row[40]; ?></td>  
                               <td><?php echo $row[41]; ?></td>  
                               <td><?php echo $row[42]; ?></td>  
                               <td><?php echo $row[43]; ?></td>  
                               <td><?php echo $row[44]; ?></td>  
                               <td><?php echo $row[45]; ?></td>  
                               <td><?php echo $row[46]; ?></td>  
                               <td><?php echo $row[47]; ?></td>  
                               <td><?php echo $row[48]; ?></td>  
                               <td><?php echo $row[49]; ?></td>  
                               <td><?php echo $row[50]; ?></td>  
                               <td><?php echo $row[51]; ?></td>  
                               <td><?php echo $row[52]; ?></td>  
                               <td><?php echo $row[53]; ?></td>  
                               <td><?php echo $row[54]; ?></td>  
                               <td><?php echo $row[55]; ?></td>  
                               <td><?php echo $row[56]; ?></td>  
                               <td><?php echo $row[57]; ?></td>  
                               <td><?php echo $row[58]; ?></td>  
                               <td><?php echo $row[59]; ?></td>  
                               <td><?php echo $row[60]; ?></td>  
                               <td><?php echo $row[61]; ?></td>  
                               <td><?php echo $row[62]; ?></td>  
                               <td><?php echo $row[63]; ?></td>  
                               <td><?php echo $row[64]; ?></td>  
                               <td><?php echo $row[65]; ?></td>  
                               <td><?php echo $row[66]; ?></td>  
                               <td><?php echo $row[67]; ?></td>  
                               <td><?php echo $row[68]; ?></td>  
                               <td><?php echo $row[69]; ?></td>  
                               <td><?php echo $row[70]; ?></td>  
                               <td><?php echo $row[71]; ?></td>  
                               <td><?php echo $row[72]; ?></td>  
                               <td><?php echo $row[73]; ?></td>  
                               <td><?php echo $row[74]; ?></td>  
                               <td><?php echo $row[75]; ?></td>  
                               <td><?php echo $row[76]; ?></td>  
                               <td><?php echo $row[77]; ?></td>  
                               <td><?php echo $row[78]; ?></td>  
                               <td><?php echo $row[79]; ?></td>  
                               <td><?php echo $row[80]; ?></td>  
                               <td><?php echo $row[81]; ?></td>  
                               <td><?php echo $row[82]; ?></td>  
                               <td><?php echo $row[83]; ?></td>  
                               <td><?php echo $row[84]; ?></td>  
                               <td><?php echo $row[85]; ?></td>  
                               <td><?php echo $row[86]; ?></td>  
                               <td><?php echo $row[87]; ?></td>  
                               <td><?php echo $row[88]; ?></td>  
                               <td><?php echo $row[89]; ?></td>  
                               <td><?php echo $row[90]; ?></td>  
                               <td><?php echo $row[91]; ?></td>  
                               <td><?php echo $row[92]; ?></td>  
                               <td><?php echo $row[93]; ?></td>  
                               <td><?php echo $row[94]; ?></td>  
                               <td><?php echo $row[95]; ?></td>  
                               <td><?php echo $row[96]; ?></td>  
                               <td><?php echo $row[97]; ?></td>  
                               <td><?php echo $row[98]; ?></td>  
                               <td><?php echo $row[99]; ?></td>  
                               <td><?php echo $row[100]; ?></td>  
                               <td><?php echo $row[101]; ?></td>  
                               <td><?php echo $row[102]; ?></td>  
                               <td><?php echo $row[103]; ?></td>  
                               <td><?php echo $row[104]; ?></td>  
                               <td><?php echo $row[105]; ?></td>  
                               <td><?php echo $row[107]; ?></td>  
                               <td><?php echo $row[108]; ?></td>  
                               <td><?php echo $row[109]; ?></td>  
                               <td><?php echo $row[110]; ?></td>  
                               <td><?php echo $row[111]; ?></td>  
                               <td><?php echo $row[112]; ?></td>  
                               <td><?php echo $row[113]; ?></td>  
                               <td><?php echo $row[114]; ?></td>  
                               <td><?php echo $row[115]; ?></td>  
                               <td><?php echo $row[116]; ?></td>  
                               <td><?php echo $row[117]; ?></td>  
                               <td><?php echo $row[118]; ?></td>  
                               <td><?php echo $row[119]; ?></td>  
                               <td><?php echo $row[120]; ?></td>  
                               <td><?php echo $row[121]; ?></td>  
                               <td><?php echo $row[122]; ?></td>  
                               <td><?php echo $row[123]; ?></td>  
                               <td><?php echo $row[124]; ?></td>  
                               <td><?php echo $row[125]; ?></td>  
                               <td><?php echo $row[126]; ?></td>  
                               <td><?php echo $row[127]; ?></td>  
                               <td><?php echo $row[128]; ?></td>  
							   <td><a href="http://localhost/kidzee1/child_doc/<?php echo $row[129]; ?>" class="w3-bar-item w3-button w3-bar-block">File</a></td>
							   <td><a href="http://localhost/kidzee1/child_doc/<?php echo $row[130]; ?>" class="w3-bar-item w3-button w3-bar-block">File</a></td>
							   <td><a href="http://localhost/kidzee1/child_doc/<?php echo $row[131]; ?>" class="w3-bar-item w3-button w3-bar-block">File</a></td>
							
  
  
  
                                
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  