<?php 

	$link_id = mysql_query("SELECT teacher_class_id, location from teacher_class_Student JOIN student ON student.student_id = teacher_class_student.student_id where teacher_class_student_id = '$get_id' ")or die(mysql_error());

		while($row = mysql_fetch_array($link_id)){

			$id = $row['teacher_class_id'];
			$avatar_location = $row['location']; 
		}

?>

<div class="span3" id="sidebar">
	<img id="avatar" src="admin/<?php echo $avatar_location; ?>" class="img-polaroid">
		<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
				<li class=""><a href="dashboard_student.php"><i class="icon-chevron-right"></i><i class="icon-chevron-left"></i>&nbsp;Back</a></li>
				<li class=""><a href="my_classmates.php<?php echo '?id='.$id; ?>"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;My Classmates</a></li>
				<li class=""><a href="progress.php<?php echo '?id='.$id; ?>"><i class="icon-chevron-right"></i><i class="icon-bar-chart"></i>&nbsp;My Progress</a></li>
				<li class=""><a href="subject_overview_student.php<?php echo '?id='.$id; ?>"><i class="icon-chevron-right"></i><i class="icon-file"></i>&nbsp;Subject Overview</a></li>
				<li class=""><a href="student_attendance.php<?php echo '?id='.$id; ?>"><i class="icon-chevron-right"></i><i class="icon-calendar"></i>&nbsp;View Attendance</a></li>
				<li class=""><a href="downloadable_student.php<?php echo '?id='.$id; ?>"><i class="icon-chevron-right"></i><i class="icon-download"></i>&nbsp;Downloadable Materials</a></li>
				<li class=""><a href="assignment_student.php<?php echo '?id='.$id; ?>"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;Assignments</a></li>
				<li class=""><a href="announcements_student.php<?php echo '?id='.$id; ?>"><i class="icon-chevron-right"></i><i class="icon-info-sign"></i>&nbsp;Announcements</a></li>
				<li class=""><a href="class_calendar_student.php<?php echo '?id='.$id; ?>"><i class="icon-chevron-right"></i><i class="icon-calendar"></i>&nbsp;Class Calendar</a></li>
				<li class="active"><a href="#"><i class="icon-chevron-right"></i><i class="icon-reorder"></i>&nbsp;My Grades</a></li>
		</ul>
</div>