<?php
include_once 'dbMySql.php';
$con = new DB_con();
$table = "users";

// data Add code starts here.
if(isset($_POST['btn-add']))
{
 $fname = $_POST['first_name'];
 $lname = $_POST['last_name'];
 $city = $_POST['city_name'];
 
 $res=$con->insert($table,$fname,$lname,$city);
 
 if($res)
 {
  ?>
  <script>
  alert('Record inserted...');
        window.location='index.php'
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error inserting record...');
        window.location='index.php'
        </script>
  <?php
 }
}
// data Add code ends here.

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Data Insert and Select Data Using OOP</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/JavaScript" src="jquery-validation.js" ></script>
<script type="text/JavaScript">
jQuery(document).ready(function() {  
    /*jQuery.validator.addMethod("phoneValidate", function(value, element) {
        return this.optional(element) || /^[0-9\-\+\,\.\)\(\s]+$/i.test(value);
    });*/
    // validate signup form on keyup and submit
    jQuery("#new_post").validate({
        rules: {
            first_name:"required",
            last_name:"required",
            city_name:"required",
            /*date:"required",
            time:"required",
            contact:{
                            required: true,
                            phoneValidate: true
                    },
            email: {
                required: true,
                email: true
            }*/
        }
    });
    
});
</script>
<style type="text/css">
#new_post .error{
color:red;
border-color: red;  
}
#new_post label.error {
display: none !important;   
    }
</style>
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>PHP Data Insert and Select Data Using OOP</label>
    </div>
</div>
<div id="body">
 <div id="content" method="post">
    <form method="post" id="new_post">
    <table align="center">
    <tr>
    <td><input type="text" name="first_name" placeholder="First Name" value=""  /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" value="" /></td>
    </tr>
    <tr>
    <td><input type="text" name="city_name" placeholder="City" value="" /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-add"><strong>Add</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>