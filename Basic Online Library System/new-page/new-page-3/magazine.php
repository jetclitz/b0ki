<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<?php
ob_start();
if(isset($_GET['id']) && $_GET['mode'] == 'edit'){

}
?>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v3.1.0.48375
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Magazine Page</title>



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
		<a href="../../new-page.html" class="active">Borrow/Return</a>
		<ul class="active">
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
                <a href="../../new-page/new-page-3.html" class="active">Return</a>
		<ul class="active">
			<li>
                <a href="../../new-page/new-page-3/book.php">Book</a>

            </li>
			<li>
                <a href="../../new-page/new-page-3/magazine.php" class="active">Magazine</a>

            </li>
		</ul>

            </li>
		</ul>
	</li>	
	<li>
		<a href="../../new-page-2.html">Add/Remove</a>
		<ul>
			<li>
                <a href="../../new-page-2/add.html">Add</a>
		<ul>
			<li>
                <a href="../../new-page-2/add/book.html">Book</a>

            </li>
			<li>
                <a href="../../new-page-2/add/magazine.html">Magazine</a>

            </li>
			<li>
                <a href="../../new-page-2/add/ebook.html">Ebook</a>

            </li>
		</ul>

            </li>
			<li>
                <a href="../../new-page-2/remove.html">Remove</a>
		<ul>
			<li>
                <a href="../../new-page-2/remove/book.html">Book</a>

            </li>
			<li>
                <a href="../../new-page-2/remove/magazine.html">Magazine</a>

            </li>
			<li>
                <a href="../../new-page-2/remove/ebook.html">Ebook</a>

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
                                        <h2 class="art-postheader">Magazine Page
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

$checkSql="select count(id) as eCount from lib";
$result = mysql_query($checkSql);
$row = mysql_fetch_assoc($result);
if($row['eCount'] == 6){
$disable = 1;
}
switch($mode){

	case 'edit':
?>
	<h2>Editing: <?=$_GET['name'];?></h2>
	<form name="form1" action="<?=$_SERVER['PHP_SELF'];?>?mode=edited" method="post">
	<table width="399" class="tableStyleClassTwo">
	<h2>Make Available?</h2>
	<a href="javascript:history.go(-1);">Return to UI</a> |<input name="Submit" type="submit" value="Make Available" />
	<input type="hidden" name="mode" value="edited">
	<input type="hidden" name="id" value="<?=$_GET['id'];?>">
	<input type="hidden" name="author" value="<?=$_GET['author'];?>">
	</table>
	</form>
<?php 
	break;

	case 'edited':

	$name = $_POST['name'];
	$author = $_POST['author'];
	$id = $_POST['id'];

	$sql = "UPDATE mag SET name = 'NULL', publisher = '" . $author . "', status='Available' WHERE id = '" . $id . "'";
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

	$sql ="SELECT * FROM mag WHERE status='Borrowed' ORDER BY magname ASC";
	$data = mysql_query($sql);

?>
<h2>Borrow Books</h2>
<table class="tableStyleClass">
<tr>
<th width="100">Name of the Book</th>
<th width="200">Name of the Author</th>
<th width="200" colspan ="1">Name of the Borrower</th>
<th width="100" colspan ="1">Date Borrowed</th>
<th width="100" colspan ="1">Due Date</th>
<th width="100" colspan ="1">Status</th>
<th width="100">Admin</th>
</tr>
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

<?php
	$date = $info['date'];
	$duedate = strtotime ( '+14 day' , strtotime ( $date ) ) ;
	$duedate = date ( 'Y-m-j' , $duedate );   
?>
<td><?=$info['magname'];?></td>
<td><?=$info['publisher'];?></a></td>
<td><?=$info['name'];?></a></td>
<td><?=$info['date'];?></a></td>
<td><?=$duedate;?></a></td>
<td><?=$info['status'];?></a></td>
<td><a href="<?=$_SERVER['PHP_SELF'];?>?id=<?=$info['id'];?>&title=<?=$info['magname'];?>&author=<?=$info['publisher'];?>&mode=edit" >Make Available </a></td>
</tr>
<?php
}
?>
</table>
<?php
break;

}
?>

								</tbody></table>
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