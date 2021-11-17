<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="col-md-12">
            <div class="result my-5"></div>
        </div>
    </div>
    <!-- jQuery CDN -->
    <script src="assets/jquery-3.6.0.min.js"></script>
    <!-- JavaScript Ajax -->
    <script>
        $(document).ready(function(){
            load_data(); 
           function load_data() {
               $.ajax({
                   url: "load_data.php",
                   method: "POST",
                   success: function(data) {
                       $(".result").html(data);
                   }
               })
           } 
        });
    </script>
</body>
</html>