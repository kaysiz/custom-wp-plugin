<?php
/*
Plugin Name: Automate Emails
Plugin URI: 

Description: Automate sending of emails to users who have subscribed for a job post daily
Author: Kudakwashe Siziva
Author URI: http://kaysiz.co.za
Version: 1.0
*/

add_action('wp', 'automateJobsEmail');

function automateJobsEmail() {
    if(!wp_next_scheduled('daily_check')) {
        wp_schedule_event(strtotime('16:20:00'), 'daily', 'daily_jobs_emails');
    }
}

add_action('daily_jobs_emails', 'sendEmails');

function sendEmails() {
    // get all the users that are subscribed
    
    // get all the jobs added the previous day
    // send emails to users who have subscribed to a particular department
}

function get_users() {
    //return an array of subscribed users
}

function get_jobs() {
    // return an array of jobs created since the last cron
}

?>