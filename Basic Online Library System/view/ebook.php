<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<?php
ob_start();
if(isset($_GET['id']) && $_GET['mode'] == 'edit'){

$title2 = "We are editing: " . $_GET['url'] . " are you sure!!!";
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v3.1.0.48375
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Ebooks</title>



    <link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="../style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="../style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="../jquery.js"></script>
    <script type="text/javascript" src="../script.js"></script>

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
                                                 <h1 class="art-logo-name"><a href="../index.html">Library System</a></h1>
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
		<a href="../new-page.html">Borrow/Return</a>
		<ul>
			<li>
                <a href="../new-page/borrow.html">Borrow</a>
		<ul>
			<li>
                <a href="../new-page/borrow/book.html">Book</a>

            </li>
			<li>
                <a href="../new-page/borrow/magazine.html">Magazine</a>

            </li>
		</ul>

            </li>
			<li>
                <a href="../new-page/new-page-3.html">Return</a>
		<ul>
			<li>
                <a href="../new-page/new-page-3/book.html">Book</a>

            </li>
			<li>
                <a href="../new-page/new-page-3/magazine.html">Magazine</a>

            </li>
		</ul>

            </li>
		</ul>
	</li>	
	<li>
		<a href="../new-page-2.html">Add/Remove</a>
		<ul>
			<li>
                <a href="../new-page-2/add.html">Add and Remove</a>
		<ul>
			<li>
                <a href="../new-page-2/add/book.html">Book</a>

            </li>
			<li>
                <a href="../new-page-2/add/magazine.html">Magazine</a>

            </li>
			<li>
                <a href="../new-page-2/add/ebook.html">Ebook</a>

            </li>
		</ul>

            </li>
			
		</ul>
	</li>	
	<li>
		<a href="../view.html" class="active">View</a>
		<ul class="active">
			<li>
                <a href="../view/book.php">Book</a>

            </li>
			<li>
                <a href="../view/magazine.php">Magazine</a>

            </li>
			<li>
                <a href="../view/ebook.php" class="active">Ebook</a>

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
                                        <h2 class="art-postheader">Ebooks
                                        </h2>
                                                        </div>
                                <div class="art-postcontent">
								<table class="art-article" border="0" cellspacing="0" cellpadding="0" style="width: 100%;">
							<tbody>
												<?php
									mysql_connect("localhost","root","static");
									@mysql_select_db('library') or die('Cannot Connect to Database');	
							echo'<tr>
							<td><h4>Book Id</h4></td>
							<td><h4>Title</h4></td>
							<td><h4>Autor</h4></td>
						
							</tr>
							';
							$query='SELECT * FROM ebook';
							$request=mysql_query($query) or die('Query request Failed');
							$rows=0;
							$numr=mysql_num_rows($request);
							while($rows<$numr){
							$id=mysql_result($request,$rows,'id');
							$title=mysql_result($request,$rows,'url');
							$author=mysql_result($request,$rows,'name');
							
						

									echo'<tr>';
									echo'<td>'.$id.'</td>';
									echo'<td>'.$title.'</td>';
									echo'<td>'.$author.'</td>';
								
									
									echo'</tr>';
									$rows++;
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
