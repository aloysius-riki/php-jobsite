<?php include_once 'config/init.php'; ?>

<?php


$job = new Job;

$template = new Template('templates/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;
//get category from url is there is one or set it to null

if($category){
    $template->jobs = $job->getByCategory($category);
    $template->title = 'Jobs In ' . $job->getCategory($category)->name;
} else{
    $template->title = 'Latest Jobs';
    $template->jobs= $job->getAllJobs();
}


$template->categories = $job->getCategories();

echo $template;

error_reporting(E_ALL);
ini_set('display_errors', '1');
