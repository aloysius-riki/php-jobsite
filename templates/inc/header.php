<!DOCTYPE html>
<html>
    


<head>
    <title>Job Site</title>
    
    <link href="https://bootswatch.com/5/flatly/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.css">  -->
    <!-- <link rel="stylesheet" href="https://bootswatch.com/5/flatly/_variables.scss">  -->
    <!-- <link rel="stylesheet" href="https://bootswatch.com/5/flatly/_bootswatch.scss">  -->

</head>
<body>

    
    <div class="container">
      <div class="header clearfix">

        <h3 class="text-muted"><?php echo SITE_TITLE; ?> </h3>
      </div>
     
      
      
      
      
      <div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="add.php" class="nav-link">Add Job</a></li>
      </ul>
    </header>
  </div>
  <?php displayMessage(); ?>