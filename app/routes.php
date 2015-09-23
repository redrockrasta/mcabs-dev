<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/




$template = 'web';

/*HOME*/
Route::get('/', function() use ($template)
{
    View::name($template, 'pages.home');
    $layout = View::of('pages.home',array('pageTitle' => "Home - MC", 'activenav' => 'home'));
    return $layout->nest('content', 'pages.home');
});

/*About Us*/
Route::get('aboutus', function() use ($template)
{
    View::name($template, 'pages.aboutus');
    $layout = View::of('pages.aboutus',array('pageTitle' => "Home - MC", 'activenav' => 'aboutus'));
    return $layout->nest('content', 'pages.aboutus');
});

/*Services*/
Route::get('services', function() use ($template)
{
    View::name($template, 'pages.services');
    $layout = View::of('pages.services',array('pageTitle' => "Home - MC", 'activenav' => 'services'));
    return $layout->nest('content', 'pages.services');
});

/*Job Openings*/
Route::get('jobopening', function() use ($template)
{
    View::name($template, 'pages.jobopening');
    $layout = View::of('pages.jobopening',array('pageTitle' => "Home - MC", 'activenav' => 'jobopening'));
    return $layout->nest('content', 'pages.jobopening');
});

/*Contact Us*/
Route::get('manpowerrequest', function() use ($template)
{
    View::name($template, 'pages.manpowerrequest');
    $layout = View::of('pages.manpowerrequest',array('pageTitle' => "Home - MC", 'activenav' => 'manpowerrequest'));
    return $layout->nest('content', 'pages.manpowerrequest');
});

/*Contact Us*/
Route::get('contactus', function() use ($template)
{
    View::name($template, 'pages.contactus');
    $layout = View::of('pages.contactus',array('pageTitle' => "Home - MC", 'activenav' => 'contactus'));
    return $layout->nest('content', 'pages.contactus');
});


Route::get('testingpage', function() use ($template)
{
    View::name($template, 'pages.testingpage');
    $layout = View::of('pages.testingpage',array('pageTitle' => "Home - MC", 'activenav' => 'testingpage'));
    return $layout->nest('content', 'pages.testingpage');
});