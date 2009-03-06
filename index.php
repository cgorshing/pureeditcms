<?php
//////////////////////////////////////////////////////////////
// This page is suppose to be the root/index page of
// your website. /pe-admin directory actually is pureedit.
// This page will be overwritten during installation to give
// you an example of how your website is not dependent on PureEdit.
//////////////////////////////////////////////////////////////

$pureedit_dir = "pe-admin/";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Continue to the PureEdit Install &gt;</title>
<style type="text/css">
	
	*
	{
		margin: 0; padding: 0;
	}
	
	body
	{
		background-color: #e1fcc0;
		color: #333;
		font-size: 12px;
	}
	
	div#wrapper
	{
		width: 400px;
		background-color: #4c4c4c;
		border: 3px solid #393939;
		margin: 40px auto 0;
		padding: 20px;
		color: #ccc;
	}
	
	a
	{
		color: #fff;
	}

</style>
</head>

<body>

	<div id="wrapper">
        <p style="margin-bottom: 10px;">PureEdit has detected that it has not been installed on this website, please proceed to the install directory before continuing.</p>
        <p><a href="<?php echo $pureedit_dir; ?>install/">Continue to the install directory &gt; </a></p>
    </div>

</body>
</html>