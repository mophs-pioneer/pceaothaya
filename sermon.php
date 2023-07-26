<!DOCTYPE html>
<html>
<head>
    <title>User Side</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        h1{
            text-align:center;
        }
        body {
      overflow-x: hidden;
      overflow-y: scroll;
    }
        </style>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <?php include "header.php"; ?>
</head>
<body>

      <h1>This month Sermons</h1>
    
    <?php include "sermons.php"; ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>document.addEventListener("DOMContentLoaded", function() {
      var navbarToggler = document.querySelector(".navbar-toggler");
      var navbarCollapse = document.querySelector(".navbar-collapse");

      navbarToggler.addEventListener("click", function() {
        navbarCollapse.classList.toggle("show");
      });
    });
</script>
</body>
</html>
