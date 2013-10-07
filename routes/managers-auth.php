<?php
$app->get('/managers/logout',function() use ($app){
    Sentry::logout(); 
    $app->flash('error','You have successfully logged out.');
    $app->redirect('/managers/login');
});

$app->get('/managers/login',function() use($app){
    
    if (Sentry::check())
    {
        // User is not logged in, or is not activated
        $app->redirect('/managers/draws');
    }
    $twig = Twig::get();
    $template = $twig->loadTemplate('managers-login.html');
    echo $template->render(array());
});

$app->post('/managers/login',function() use ($app){


    $gump = new GUMP(); 
    $_POST = $gump->sanitize($_POST); // You don't have to sanitize, but it's safest to do so.
    
    $gump->validation_rules(array(
        'password'    => 'required',
        'email'       => 'required|valid_email',
    ));
    
    $gump->filter_rules(array(
        'password'    => 'trim',
        'email'       => 'trim|sanitize_email',
    ));
    
    $validator = $gump->run($_POST);
    
    if($validator ===  false){
        $app->flash('error',$gump->get_readable_errors(true));
        $app->redirect('/managers/login');
    }else{
        
        try
        {
            // Set login credentials
            $credentials = array(
                'email'    => $_POST['email'],
                'password' => $_POST['password'],
            );
        
            // Try to authenticate the user
            $user = Sentry::authenticate($credentials, (isset($_POST['remember']))?true:false);
            $app->redirect('/managers/draws');
        }
        catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
        {
            $app->flash('error','Login field is required.');
            $app->redirect('/managers/login');
            
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            $app->flash('error','Password field is required.');
            $app->redirect('/managers/login');
        }
        catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
        {
            $app->flash('error','Wrong password, try again.');
            $app->redirect('/managers/login');
        }
        catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
        {
            $app->flash('error','User is not activated.');
            $app->redirect('/managers/login');
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            $app->flash('error','User was not found.');
            $app->redirect('/managers/login');
        }
    }

});