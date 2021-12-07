<!doctype html>

<html>
<head>
	<title>Welcome</title>
	<!--Sample 5-->
	<script type="text/javascript">
		<?php
		echo "alert('i amcoming from java')";
		?>
	</script>
</head>
<body>

<!--Example 1-->
	<h1>"Muhammad Haris Munir"</h1>
	<?php
	echo "Hello world";
	?>

<!--Example 2-->
	<?php 
	print "<p>Sample 1: html text is printed inside php</p>"
	?>

	<?php echo"<hr>" ?>

	<p>
		<?php echo"Sample 2: php text is printed inside html tag" ?>
	</p>

<!--Example 3-->
	<p <?php 'style="color:#FF0000;"'?>>Sample 3: this text is red</p>

<!--Example 4-->

<?php '<p>' ?>
Sample 4: here html tags are generated through php
<?php '</p>' ?>

</body>	
</html>