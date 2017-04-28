<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('teacher_students_grade_link.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
						

						<?php include('my_students_breadcrums.php'); ?>


                        <!-- editing block -->                         
                             

                       <div id="block_bg" class="block">

                            <div class="navbar navbar-inner block-header">  

                              <a href="teacher_view_grade.php<?php echo "?id=".$get_id;?>" class="btn btn-success">View Class Grades</a>                                 
                                   
                            </div>

                            <div class="block-content collapse in">
                                    
                                            
                                   
                                <!-- editing poll form -->

            <div class="span12">
            <table cellpadding="0" cellspacing="0" border="0" class="table" id="">
                    <thead>
                            <tr>
                                <th>Test/Assignment</th>
                                <th>Created</th>
                                <th>Weight</th>
                                <th>Alloted Marks</th>
                                <th>Update Scores</th>
                                <th>Edit Poll</th>
                            </tr>                                                
                    </thead>

                <tbody>
                        <?php
                            $student_marks = mysql_query(" SELECT * FROM full_marks WHERE teacher_class_id = '$get_id' ") or die(mysql_error());
                            
                            while($row = mysql_fetch_array($student_marks)){                            	

                        ?>

                            <tr>
                                <td><?php echo $row['poll_name']; ?></td>
                                <td><?php echo $row['pdatein']; ?></td>
                                <td><?php echo $row['poll_weight']."%"; ?></td>
                                <td><?php echo $row['number']; ?></td>
                                <td><a href="update_student_marks.php<?php echo "?id=".$row['poll_id']; ?>" class="btn btn-success">UPDATE</a></td>
                                <td><a href="edit_polls.php<?php echo "?id=".$row['poll_id'] ?>" class="btn btn-success" >EDIT</a></td>
                            </tr>

                                                            
                        <?php } ?>                                            
                                                        
                </tbody> 
            </table>  

                                <!-- editing poll form -->    


                                </div>
                            </div>
                        </div>
                        <!-- /block --> 



                        <!-- /editing block -->


                    </div>
                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>