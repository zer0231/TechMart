<?php
    // require_once './classes/Route.php';
    // require_once './controllers/controller.php';
    Route::set('index.php', function(){
        IndexController::createView('home');
    });

    Route::set('list_products',function(){
        ProductController::showItem('list_products');
    });

    Route::set('about-us', function(){
        AboutUsController::createView('AboutUs');
    });

    Route::set('contact-us', function(){
        ContactUsController::createView('ContactUs');
    });
?>