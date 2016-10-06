<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v3.1.0.48375
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Magazine</title>



    <link rel="stylesheet" href="../../style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="../../style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="../../style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="../../jquery.js"></script>
    <script type="text/javascript" src="../../script.js"></script>

</head>
<body>
<div id="art-page-background-middle-texture">
<div id="art-main">
    <div class="cleared reset-box"></div>
    <div class="art-box art-sheet">
        <div class="art-box-body art-sheet-body">
<div class="art-bar art-nav">
<div class="art-nav-outer">
	<ul class="art-hmenu">
	</ul>
</div>
</div>
<div class="cleared reset-box"></div>
<div class="art-header">
                <div class="art-logo">
                                                 <h1 class="art-logo-name"><a href="../../index.html">Library System</a></h1>
                                                                        </div>
                
            </div>
            <div class="cleared reset-box"></div>
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content">
<div class="art-box art-vmenublock">
    <div class="art-box-body art-vmenublock-body">
                <div class="art-box art-vmenublockcontent">
                    <div class="art-box-body art-vmenublockcontent-body">
                <ul class="art-vmenu">
	<li>
		<a href="../../new-page.html">Borrow/Return</a>
		<ul>
			<li>
                <a href="../../new-page/borrow.html">Borrow</a>
		<ul>
			<li>
                <a href="../../new-page/borrow/book.html">Book</a>

            </li>
			<li>
                <a href="../../new-page/borrow/magazine.html">Magazine</a>

            </li>
		</ul>

            </li>
			<li>
                <a href="../../new-page/new-page-3.html">Return</a>
		<ul>
			<li>
                <a href="../../new-page/new-page-3/book.html">Book</a>

            </li>
			<li>
                <a href="../../new-page/new-page-3/magazine.html">Magazine</a>

            </li>
		</ul>

            </li>
		</ul>
	</li>	
	<li>
		<a href="../../new-page-2.html" class="active">Add/Remove</a>
		<ul class="active">
			<li>
                <a href="../../new-page-2/add.html" class="active">Add and Remove</a>
		<ul class="active">
			<li>
                <a href="../../new-page-2/add/book.php">Book</a>

            </li>
			<li>
                <a href="../../new-page-2/add/magazine.php" class="active">Magazine</a>

            </li>
			<li>
                <a href="../../new-page-2/add/ebook.php">Ebook</a>

            </li>
		</ul>

            </li>
			
		</ul>

           
		
	</li>	
	<li>
		<a href="../../view.html">View</a>
		<ul>
			<li>
                <a href="../../view/book.html">Book</a>

            </li>
			<li>
                <a href="../../view/magazine.html">Magazine</a>

            </li>
			<li>
                <a href="../../view/ebook.html">Ebook</a>

            </li>
		</ul>
	</li>	
</ul>
                
                                		<div class="cleared"></div>
                    </div>
                </div>
		<div class="cleared"></div>
    </div>
</div>
<div class="art-box art-post">
    <div class="art-box-body art-post-body">
<div class="art-post-inner art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader">Magazine
                                        </h2>
                                                        </div>
                                <div class="art-postcontent">
								<table class="art-article" border="0" cellspacing="0" cellpadding="0" style="width: 100%;">
								<tbody>
								
<?php
error_reporting(~E_ALL);
 mysql_connect("localhost","root", "static") or die(mysql_error()); 
 mysql_select_db("library") or die(mysql_error()); 




$mode = $_GET['mode'];

$checkSql="select count(id) as eCount from mag";
$result = mysql_query($checkSql);
$row = mysql_fetch_assoc($result);
if($row['eCount'] == 6){
$disable = 1;
}
switch($mode){

case 'add':
?>
<h2>Add a Magazine</h2>
<form name="form1" action="<?=$_SERVER['PHP_SELF'];?>?mode=added" method="post">
<table class="tableStyleClassTwo">
<tr><td>Name:</td><td><div align="left">
<input type="text" name="magname" />
</div></td></tr>

<tr><td>Publisher:</td><td><div align="left">
<input type="text" name="publisher" />
</div></td></tr>
<tr><td colspan="2" align="center"><a href="javascript:history.go(-1);">Back</a> | <input name="Submit" type="submit" id="Submit" value="Add New Contact" <?php if($disable ==1){?>disabled<?php } ?>/></td></tr>
<input type="hidden" name="mode" value="added">
</table>
</form>
<?php
break;

case 'added':

$magname = $_POST['magname'];

$publisher = $_POST['publisher'];

$sql = "INSERT INTO mag (magname, publisher) VALUES ('" . $magname . "', '" . $publisher . "')";

mysql_query($sql);
//done take me back to the main page
header('location: ' . $_SERVER['PHP_SELF']);
break;

case 'edit':
?>
<h2>Editing: <?=$_GET['magname'];?></h2>
<form name="form1" action="<?=$_SERVER['PHP_SELF'];?>?mode=edited" method="post">
<table width="399" class="tableStyleClassTwo">
<tr><td width="87">title:</td>
<td width="551"><div align="left">
<input type="text" value="<?=$_GET['magname'];?>" name="magname" />
</div></td></tr>

<tr><td>Publisher:</td><td><div align="left">
<input type="text" value="<?=$_GET['publisher'];?>" name="publisher" />
</div></td></tr>
<tr><td colspan="2" align="center"><a href="javascript:history.go(-1);">Back</a> |<input name="Submit" type="submit" value="Save Changes" /></td></tr>
<input type="hidden" name="mode" value="edited">
<input type="hidden" name="id" value="<?=$_GET['id'];?>">
</table>
</form>
<?php 
break;

case 'edited':

$magname = $_POST['magname'];

$publisher = $_POST['publisher'];
$id = $_POST['id'];

$sql = "UPDATE mag SET magname = '" . $magname ."', publisher = '" . $publisher . "' WHERE id = '" . $id . "'";
mysql_query($sql);





header('location: ' . $_SERVER['PHP_SELF']);
break;

case 'remove':
$id = $_GET['id'];

$sql ="delete from mag where id= '" . $id ."'";

mysql_query($sql);


header('location: ' . $_SERVER['PHP_SELF']);
break;

default:

$sql ="SELECT * FROM mag ORDER BY magname ASC";
$data = mysql_query($sql);

?>
<h2>Add, Update and remove Magazines</h2>
<table class="tableStyleClass">
<tr>
<th width="100">Title of the magazine</th>
<th width="200">Name of the publisher</th>
<th width="100" colspan="2">Admin</th>
</tr>
<td colspan="5" align="right"><?php if($disable!=1){?><div align="right"><a href="<?=$_SERVER['PHP_SELF'];?>?mode=add"?mode=add>Add a Magazine</a><?php }else{?>Library is Full<?php } ?></div></td>
<?php

$rowColor = 0;

while($info = mysql_fetch_array( $data )){
if($rowColor==0){
?>
<tr class="oddClassStyle">
<?php 
$rowColor =1;
}elseif($rowColor==1){
?>
<tr class="evenClassStyle">
<?php
$rowColor = 0;
}
?>
<td><?=$info['magname'];?></td>
<td><?=$info['publisher'];?></a></td>
<td><a href="<?=$_SERVER['PHP_SELF'];?>?id=<?=$info['id'];?>&magname=<?=$info['magname'];?>&publisher=<?=$info['publisher'];?>&mode=edit" >Edit </a></td>
<td><a href="<?=$_SERVER['PHP_SELF'];?>?id=<?=$info['id'];?>&mode=remove">Remove</a></td>
</tr>
<?php
}
?>
</table>
<?php
break;

}
?>
								</tbody>
								</table>
                </div>
                <div class="cleared"></div>
                </div>

		<div class="cleared"></div>
    </div>
</div>

                          <div class="cleared"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cleared"></div>
            <div class="art-footer">
                <div class="art-footer-body">
                    <a href="#" class="art-rss-tag-icon" title="RSS"></a>
                            <div class="art-footer-text">
                                <p><a href="#">Link1</a> | <a href="#">Link2</a> | <a href="#">Link3</a></p>

<p>Copyright © 2011. All Rights Reserved.</p>
                                                            </div>
                    <div class="cleared"></div>
                </div>
            </div>
    		<div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
    <p class="art-page-footer"><a href="http://www.artisteer.com/?p=website_templates" target="_blank">Website Template</a> created with Artisteer.</p>
    <div class="cleared"></div>
</div>
</div>

</body>
</html>

<?php ob_flush();?>