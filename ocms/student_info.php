<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_info_link.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
						
						<?php  include('student_info_breadcrumbs.php');// if breadcrumb is needed ?>
						
                        </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<ul	 id="da-thumbs" class="da-thumbs">
										    <?php
														$my_student = mysql_query("SELECT * FROM student where student_id = '$get_id'
														")or die(mysql_error());

														while($row = mysql_fetch_array($my_student)){
														$id = $row['student_id'];	
														
											?>											
												<?php if($get_id == $id){ ?>
													<a href="#">
													<img  src ="admin/<?php echo $row['location'] ?>" width="200" height="200" class="img-circle">
													    
													</a>

													<p class="lead"><?php echo "Email Address : ".$row['email']; ?></p>
													<p class="lead"><?php echo "Phone : ".$row['contact_number']; ?></p>
													
												
												<?php } ?>

											<?php } ?>
									</ul>
												
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>