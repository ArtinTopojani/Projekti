

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/addproduct.css">

</head>
<body>


   
<div class="container">

   <div class="admin-product-form-container">

      <form action="<?php //$_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add a new user</h3>
         <input type="text" placeholder=" Email" name="user-email" class="box">
         <input type="password" placeholder=" Password" name="user-password" class="box">
         <div class="form-group">
        <select name="user_role" id="" class="box">
            <option value="subscriber">Select Options</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>
         <input type="submit" class="btn" name="add_user" value="add user">
      </form>

   </div>

   

</div>


</body>
</html>