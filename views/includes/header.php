<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Mine CSS -->
    <link rel="stylesheet" href="<?=MAIN_URL?>css/style.css">
    <!-- Alertify CSS -->
    <link rel="stylesheet" href="<?=MAIN_URL?>css/alertify.min.css">
    <!-- Alertify CSS THEME -->
    <link rel="stylesheet" href="<?=MAIN_URL?>css/theme/default.min.css">
    <!-- Alertify SCRIPT -->
    <script src="<?=MAIN_URL?>js/alertify.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/758a2cfb56.js" crossorigin="anonymous"></script>
    <!-- Propios Script -->
    <script src="<?=MAIN_URL?>js/main.js" type="module"></script>

    


    <title>Panda</title>
  </head>
  <body>
    <header class="header  d-none d-md-block <?=Auth::isAuthenticated() ? 'fixed-top': ''?>">
        <div class="container">
            <div class="row  align-items-center">
                <div class="col-5 col-md-4">
                    <div class="row align-items-end">
                        <div class="col-5 px-0 col-md-4 col-xl-3 px-md-1">
                            <div class="logo-container rounded-circle  p-2 bg-primary">
                                <img src="<?=MAIN_URL?>img/logo.PNG" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-7 px-2">
                            <a  <?=Auth::isAuthenticated() ? 'href="index.html"':''?>>
                                <h1 class="w-100">Panda</h1>
                            </a>
                        </div>
                    </div>
                </div><!--Logo y nombre-->
                <?php if(Auth::isAuthenticated()):?>
                <div class="d-none d-md-block col-md-4 ">
                    <div class="wrap-search d-flex justify-content-end">
                        <input type="text" name="" id="" class="input-search" placeholder="Looking for Someone?">
                        <div class="icon-search">
                            <i class="fas fa-search"></i>
                        </div>

                    </div>
                </div><!--Search-->

                <div class=" d-none d-md-block col-md-1 mr-md-2 px-2">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6 px-2 ">
                            <button class="btn-notifications   fas fa-inbox fa-lg"  id="aMessage"  paper="dropdown" data-target="#menuMessage">
                            </button>

                            <div class="dropdown-custom-menu m-0" id="menuMessage">
                                <ul>
                                    <li class="message-item dropdown-custom-item">
                                        <a href="message.html">
                                            <div class="row align-items-center justify-content-between">
                                                <div class="col-4 mb-2">
                                                    
                                                    <div class="img-container">
                                                        <img src="img/WhatsApp Image 2019-11-18 at 5.39.22 PM.jpeg" alt="" class="img-fluid">
                                                    </div>

                                                    
                                                </div>
                                                <div class="col-8 pl-0 text-left">
                                                    <p class=" mb-1 font-weight-bold">Miguelina Ovando</p>
                                                    <p class="">
                                                        Lorem ipsum dolor sit...
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="message-item dropdown-custom-item">
                                        <a href="message.html">
                                            <div class="row align-items-center justify-content-between">
                                                <div class="col-4 mb-2">
                                                    
                                                    <div class="img-container">
                                                        <img src="img/WhatsApp Image 2019-11-18 at 5.39.22 PM.jpeg" alt="" class="img-fluid">
                                                    </div>

                                                    
                                                </div>
                                                <div class="col-8 pl-0 text-left">
                                                    <p class=" mb-1 font-weight-bold">Miguelina Ovando</p>
                                                    <p class="">
                                                        Lorem ipsum dolor sit...
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>  
                                
                            </div>
                            
                        </div><!--Message-->
                        <div class="col-lg-5 col-md-6 px-2 ">
                            <button class="btn-notifications  fas fa-bell fa-lg"  id="aNotifications"  paper="dropdown" data-target="#menuNotifications">
                            </button>
                              <div class="dropdown-custom-menu m-0" id="menuNotifications">
                                <ul>
                                    <li class="message-item dropdown-custom-item">
                                        <a href="message.html">
                                            <div class="row align-items-center justify-content-between">
                                                <div class="col-4 mb-2">
                                                    
                                                    <div class="img-container">
                                                        <img src="img/WhatsApp Image 2019-11-18 at 5.39.22 PM.jpeg" alt="" class="img-fluid">
                                                    </div>

                                                    
                                                </div>
                                                <div class="col-8 pl-0 text-left">
                                                    <p class=" mb-1 font-weight-bold">Miguelina Ovando</p>
                                                    <p class="">
                                                        Liked your post!
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="message-item dropdown-custom-item">
                                        <a href="message.html">
                                            <div class="row align-items-center justify-content-between">
                                                <div class="col-4 mb-2">
                                                    
                                                    <div class="img-container">
                                                        <img src="img/WhatsApp Image 2019-11-18 at 5.39.22 PM.jpeg" alt="" class="img-fluid">
                                                    </div>

                                                    
                                                </div>
                                                <div class="col-8 pl-0 text-left">
                                                    <p class=" mb-1 font-weight-bold">Miguelina Ovando</p>
                                                    <p class="">
                                                        Commented your post.
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>  
                                
                            </div>
                        </div><!--Bell-->
                    </div>
                </div><!--Notifications-->

                <div class="d-none d-md-block col-md-1">
                    <div class="row align-items-center justify-content-md-center justify-content-lg-start">
                        <div class="col-md-8 col-lg-6 p-0 ">
                            <button class="btn-notifications p-0 "  id="aProfile"  paper="dropdown" data-target="#menuProfile" >
                                <div class="img-container">
                                    <img src="img/WhatsApp Image 2019-11-18 at 5.39.22 PM.jpeg" alt="" class="img-fluid">
                                </div>
                            </button>
                            <div class="dropdown-custom-menu" id="menuProfile">
                                <a class="dropdown-custom-item" href="#"><i class="fas fa-user "></i> <span class="ml-2 ">Me</span></a>
                                <a class="dropdown-custom-item" href="#"><i class="fas fa-cog "></i> <span class="ml-2 ">Config</span></a>
                                <a class="dropdown-custom-item" href="<?=MAIN_URL.'user/logout'?>"><i class="fas  fa-sign-out-alt"></i> <span class="ml-2 ">Log Out</span></a>
                            </div>
                        </div>
                    </div>
                    
                </div><!--Profile-->
                <?php endif;?>
            </div>

        </div>
    </header> 