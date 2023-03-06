<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="css/style.css"> 
    <title>Welcome to Ostad Job Application</title>
</head>
<body>
    
</body>
</html>
 <?php
include_once 'includes/header.php';
include_once 'includes/nav.php';
include_once 'classes/Job.php';

$job_id = $_GET['id'];
$job = Job::getJobById( $job_id );
?>
<div class="container">
    <h1 class="job-title"><?php echo $job->getTitle(); ?></h1>
    <p class="job-location"><?php echo $job->getLocation(); ?></p>
    <p class="job-description"><?php echo $job->getDescription(); ?></p>
    <p class="job-requirements"><?php echo $job->getRequirements(); ?></p>
    <h2 class="apply-title">Apply for this Job</h2>
    <form class="apply-form" action="apply.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="job_id" value="<?php echo $job_id; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>
        <label for="resume">Resume:</label>
        <input type="file" id="resume" name="resume" required>
        <button class="apply-button" type="submit">Apply</button>
    </form>
</div>
<?php
include_once 'includes/footer.php';
?>
