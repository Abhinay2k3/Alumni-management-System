<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADmin Search List Navigation Bar</title>
<link rel="stylesheet" href="css/header_navigationbar.css" />
<link rel="stylesheet" href="css/forum_list.css" />
</head>
<body bgcolor="white">

<table class="table">
<tr>
<td>
<ul class="ul1">
	<div class="dropdown">
	<li class="li_image"><img src="image/WE23.jpg" width="55px" height="55px" style="padding-left:15px;padding-right:15px" /></li>
    </div>
    <div class="dropdown">
    <li class="li1"><a href="admin_homepage.php"><span class="span1">Home</span></a></li>
    </div>
    <!-- ... (other menu items) ... -->
    <li class="li2"><span class="span2"><?php echo "Welcome"." Admin ".$username1; ?></span></li>
    <li class="li2"><a href="logout.php"><span class="span1">Logout</span></a></li>
</ul>
</td>
</tr>
</table>

<button id="forumlist_totop" onclick="topFunction()"><img src="image/top.jpg" width="50px" height="50px"/></button>
<script src="javascript/forumlist_totop.js"></script>
</body>
</html>
