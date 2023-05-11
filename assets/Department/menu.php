<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="menu.css"> <!--CSS Stylesheet-->
   <!---title logo--->
   <link rel="shortcut icon" type="image/png" href="N.png" style="border-radius: 50%;" />
	  <!------end----->

      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <nav>
         <div class="menu-icon">
            <span class="fas fa-bars"></span>
         </div>
         <div class="logo">
            No-Dues
         </div>
         <div class="nav-items">
            <li><a href="Department_main.php">HOME</a></li>
            <li><a href="Dept_app.php">APPLIED FORMS</a></li>
            <li><a href='contact.php'>CONTACT</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
         </div>
         <div class="search-icon">
            <span class="fas fa-search"></span>
         </div>
         <div class="cancel-icon">
            <span class="fas fa-times"></span>
         </div>
         <form action="#">
            <input type="search" class="search-data" placeholder="Search" required>
            <button type="submit" class="fas fa-search"></button>
         </form>
      </nav>
   </body>
</html>
<script src="menu.js"></script>