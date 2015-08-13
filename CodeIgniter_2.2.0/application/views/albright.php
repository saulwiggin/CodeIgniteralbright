<html>
<head>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/custom.css'); ?>">

</head>
<body>
<?php // echo base_url('assets/custom.css'); ?>
<div id="top">
	<h1> The IPO database </h1>
	<?php echo form_open('IPO'); ?>
	<?php $options = array(
		'application number',
		'publication number',
		);
	echo form_dropdown('numbers', $options, 'application number'); ?>
	<input type="text" placeholder="GB1117271.5" name="query"><br><br>
	<input type="submit" value="Submit">
	</form>

	<table border="1" id="table">
	
	<tr> <th> Filing date </th><th> Priority date </th><th> foreign filings deadline </th> <th> first renewal deadline </th> </tr>
	<?php 
	//echo print_r($data); 
	foreach ($data as $row){ ?>
	<tr> <td> 1996-12-1 </td><td> 1997-06-1 </td><td>1997-06-1</td><td>2000-12-1</tr>
	<tr> <td> <?php echo $row['Filing_date']; ?> </td><td> <?php echo $row['Priority_date']; ?> </td><td> <?php echo $row['foreign_filings_deadline']; ?> </td><td> <?php echo $row['Filing_date']; ?> </td></tr>
	<?php } ?>
	</table>
	<?php //echo "Hello"; ?>
</div>
</body>
<script>
</script>
</html>