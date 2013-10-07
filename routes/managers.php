<?php
$app->get('/managers/',function() use ($app){
    
    // AUTHENTICATION FIRST
    if (!Sentry::check())
    {
        // User is not logged in, or is not activated
        $app->flash('error','User is not logged in, or is not activated');
        $app->redirect('/managers/login');
    }
    $user = Sentry::getUser();
    if (!$user->isSuperUser())
    {
        $app->flash('error','Your are not administrator.');
        $app->redirect('/managers/login');
    }
    
    $app->redirect('/managers/draws');
    
});