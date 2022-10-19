                        <?php session_start();?>
                        <table>   
                             <tr><td>country</td>
                             <td><select id="country" name="country"style='padding: 10px 10px;font-size: 17px;margin-top: 5px; 'onchange="countryname(this.value)">
                                <option>---select---</option>
                                <?php 
                               
                                include("db.php");
                                $result = mysqli_query($conn,"SELECT * FROM country");
                                while($row = mysqli_fetch_array($result)) {
                                 $_SESSION['userid']=$row['id']; 
                                 
                                ?>
                                <option value="<?php echo $row['id'];?>"><?php echo $row["name"];?></option>
                                <?php
                                }
                                ?>
                                
                             </select></td></tr>
                             <tr><td>state</td>
                             <td><select id="state"name="state"style='padding: 10px 10px;font-size: 17px;margin-top: 5px;'>
                                <!-- <option>---select---</option> -->
                                <?php 
                             
                              //   $val="<script> function countryname(id){alert(id);}</script>";
                                //echo $val;
                                $result = mysqli_query($conn,"SELECT * FROM state WHERE countryid='$val'");
                                while($row = mysqli_fetch_array($result)) {
                                ?>
                                <option value="<?php echo $row['id'];?>"><?php echo $row["statename"];?></option>
                                <?php
                                }
                                ?>
                             </select></td></tr>
                            </table>
                            <script
                    src="https://code.jquery.com/jquery-3.6.0.js"
                    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
                    crossorigin="anonymous">
             </script>
             <script>
                      $("#country").change(function(){

                       var $id=this.value
                        //alert($id);
                        <?php echo $id?>
                       
                      });

               </script>
                               
                               

                          