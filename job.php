<?php include_once 'config/init.php'; ?>

<?php


$job = new Job;

if(isset($_POST['del_id'])){
    $del_id = $_POST['del_id'];
    if($job->delete($del_id)){
        redirect('index.php', 'Job Deleted','success');
    }else{
        redirect('index.php', 'Job Not Deleted','error');
    }
}

$template = new Template('templates/job-single.php');

$job_id = isset($_GET['id']) ? $_GET['id'] : null;
//get category from url is there is one or set it to null


$template->job = $job->getJob($job_id);

echo $template;

error_reporting(E_ALL);
ini_set('display_errors', '1');
