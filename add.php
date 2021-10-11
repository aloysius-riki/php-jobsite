<?php include_once 'config/init.php'; ?>

<?php

$job = new Job;

if(isset($_POST['submit'])){
    //Create Data Array
    $data = array();
    $data['job_title']= $_POST['job_title'];
    $data['company']= $_POST['company'];
    $data['category_id']= $_POST['category'];
    $data['description']= $_POST['description'];
    $data['location']= $_POST['location'];
    $data['salary']= $_POST['salary'];
    $data['contact_email']= $_POST['contact_email'];
    $data['contact_user']= $_POST['contact_user'];

    if($job->add($data)){
        redirect('index.php', 'The job has been added', 'success');
    }else{
        redirect('index.php', 'Something went wrong', 'error');
    }
}

$template = new Template('templates/job-add.php');

$template->categories = $job->getCategories();

echo $template;

error_reporting(E_ALL);
ini_set('display_errors', '1');
