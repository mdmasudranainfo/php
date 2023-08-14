<?php
header("X-XSS-Protection:0");
?>

<html>
<body>
<h2>From</h2>

<h3> Full Name is <?php if(isset($_REQUEST["first_name"]) && isset($_REQUEST['last_name'])){  ?>
   <?php   echo $_REQUEST["first_name"]; echo " ";echo $_REQUEST["last_name"] ?>
    <?php } ?>
</h3>

<form method="post" action="">
    <input name="first_name" type="text" placeholder="Enter First Name"/> <br>
    <input name="last_name" style="margin-top: 10px"  type="text" placeholder="Enter Last Name "/> <br>
    <input style="margin-top: 10px" type="submit" value="Submit"/>
</form>

</body>
</html>



<!-- jekono form ar method gulo get , post , Put,patch , delete -->

<!--get
get diye jekono data read kora hoy
input ar data gulo url a asbe -->

<!--post
post method diye jekono data save kora hoy
data dekha jay na internal vabe post hoy
-->
<!--koto method na dile se nijer kache submit korbe -->

<!--put
 put diye data update kora hoy
 but put diye data create o kora hay
  -->