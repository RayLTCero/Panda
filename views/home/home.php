<?php
    import('header');
?>

<main class="mt-md-5 mt-1 ">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6 my-3 my-md-5">
                    <div class="row">
                        <div class="col-12 mb-5">
                        <!--Post Creator--> 
                            <form  id="formPostCreator" >
                                <div class="card border-0">
                                    <div class="card-header p-2 ">
                                        <h3 class="card-title">Create Post</h3>
                                    </div>
                                    
                                    <div class="card-body p-2 p-md-3">
                                        <div class="row">
                                            <div class="col-3 col-md-3 col-lg-2 p-0 pl-3">
                                                <div  class="img-container ">
                                                    <a href="profile.html">
                                                        <img  src="img/WhatsApp Image 2019-11-18 at 5.39.22 PM.jpeg" alt="" class="img-fluid">
                                                    </a>
            
                                                </div>
                                            </div>
                                            <div class="col-9 col-md-9 col-lg-10">
                                                <textarea  class="form-control border-0  p-0 float-right mt-2 mr-2 mb-3 ml-md-0 " name="postArea" id='postArea'  placeholder="Post Something..."></textarea>
                                            </div>
                                        </div>    
                                        
                                                                                    
                                    </div>
                                    
                                    <div class="card-footer clearfix ">
        
                                        <button  class=" btn-post-creator float-right ml-2" id='postBtn' type="submit">Post</button>
                                        <button class=" btn-post-creator float-right fa fa-camera-retro fa-md" id="picBtn" type="button" ></button>

                                        <input type="file" name="photoBtn" id="photoBtn" class="d-none ">
                                    </div>
                            </form>
                        </div><!--Post Creator(col-12)--> 

                        <!--post 0-->
                        <div class="col-12 mt-5 post p-0">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-2 p-0 pl-2 ">
                                            
                                            <div class="img-container">
                                                <a href="profile.html">
                                                    <img  src="img/WhatsApp Image 2019-11-18 at 5.39.22 PM.jpeg" alt="" class="img-fluid">
                                                </a>
                                            </div>
                                            
                                        </div>
                                        <div class="col-8 col-sm-6 pl-1 pl-lg-2 col-md-8 pt-2">
                                            
                                            <p class="username">German Rosario</p>
                                           
                                        </div>
                                        <div class="col-2 offset-sm-2 p-0 pr-2 offset-md-0 d-flex justify-content-end">
                                            <div class="dropdown">
                                                <button class="btn-ellipsis fas fa-ellipsis-h" type="button" id="btnMenuPost" paper="dropdown" data-target="#menuDownPost">
                                                    
                                                </button>
                                                <div class="dropdown-custom-menu text-center" id="menuDownPost">
                                                    <a style="cursor:pointer;" class="dropdown-custom-item"  data-toggle="modal" data-target="#editPostModal">Edit</a>
                                                    <a style="cursor:pointer;" class="dropdown-custom-item" data-toggle="modal" data-target="#deletePostModal">Delete</a>
                                                  
                                                </div>
                                              </div>
                                              
    
                                        </div>
                                        
                                        <!-- Modal Edit -->
                                        <div class="modal fade" id="editPostModal" tabindex="-1" role="dialog" aria-labelledby="editPostTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered .modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="editPostTitle">Edit Post</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <form action="">
                                                    <div class="modal-body">
                                                    <textarea name="editPostArea" id="" >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum distinctio a, odit voluptate sapiente omnis, ut perspiciatis eos explicabo odio magnam quia ipsa mollitia possimus debitis praesentium rem! Voluptas ullam, neque reprehenderit dolorem molestiae corrupti sapiente rerum expedita. Non doloribus deleniti magnam quas suscipit, vero earum exercitationem fuga error quis.</textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success">Save changes</button>
                                                    </div>

                                                </form>
                                            </div>
                                            </div>
                                        </div><!-- Modal Edit -->
                                        <!-- Modal Delete -->
                                        <div class="modal fade" id="deletePostModal" tabindex="-1" role="dialog" aria-labelledby="deletePostTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered .modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deletePostTitle">Delete Post</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    
                                                    <div class="modal-body">
                                                        Are you sure?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                                                        <a href="#" class="btn btn-danger">Delete</a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div><!-- Modal Delete -->
                                        
                                        <div class="col-12 text-right">
                                            <time>10/09/2020 5:00</time>
                                        </div>
                                        <div class="col-md-12 px-3">
                                            <div class="card border-0">
                                                <img src="img/WhatsApp Image 2019-11-18 at 5.39.22 PM.jpeg" class="card-img-top img-fluid mt-2" alt="">
                                                <div class="card-body p-0 pt-2">
                                                    <p class="post-text m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum distinctio a, odit voluptate sapiente omnis, ut perspiciatis eos explicabo odio magnam quia ipsa mollitia possimus debitis praesentium rem! Voluptas ullam, neque reprehenderit dolorem molestiae corrupti sapiente rerum expedita. Non doloribus deleniti magnam quas suscipit, vero earum exercitationem fuga error quis.</p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div><!--.card-body-->
                                
                                <div class="card-footer pt-1 clearfix">
                                    <div class="row mb-2">
                                        <div class="col-12 clearfix mb-1">
                                            <div class="float-left">
                                                <span class="pl-1 reaction-numbers liked">10 likes</span>
                                                <span class="text-light font-weight-light">|</span><span class="pl-1 reaction-numbers disliked">99+ Dislikes</span>
                                            </div>
                                            <div class="float-right mr-2">
                                                <a href="post.html"><span style="font-size: .9rem;color:#e1e1e1;" class=" font-weight-light">20+ Comments</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="float-left">
                                        <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-paw fa-lg px-1 px-md-2 " aria-hidden="true"></i></button>
                                        <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-paw fa-lg px-1 px-md-2 fa-rotate-180" aria-hidden="true"></i></button>
                                    </div>
                                    
                                    <div class="float-right">
                                        <button type="button" class="btn btn-primary btn-sm" paper="comment-box" data-target="#post"><i class="fa fa-commenting fa-lg px-1 " aria-hidden="true" ></i>Comment</button>
                                    </div>
                                </div><!--.card-footer-->
                                <div class="comment-section  py-2 px-3" id="post">
                                    <div class="row ">
                                        <div class="col-12 pr-lg-0  ">
                                            
                                            <div class="row align-items-center ">
                                                <div class="col-2  pr-0 col-md-2 col-lg-2">
                                                    <div class="img-container ">
                                                        <a href="profile.html">
                                                            <img  src="img/WhatsApp Image 2019-11-18 at 5.39.22 PM.jpeg" alt="" class="img-fluid">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="col-10   pl-0 col-md-10 col-lg-10 pl-md-0 p-lg-0">
                                                    <form action="" class=" pl-2 d-flex ">
                                                            
                                                        <textarea name="commentArea" id="commentArea" placeholder="Comment..." class="d-inline-block" ></textarea>
        
                                                        <button type="submit"  class="ml-2"><i class="fas fa-paper-plane"></i></button>
        
                                                    </form>

                                                </div>
                                            </div>       
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--post 0-->

                       

                    </div><!--.row-->
                </div>
            </div>
        </div>
    </main>

    <div class="container-fluid d-md-none">
        <div class="row">
            <div class="col-12 p-0">
                <!-- Screen User -->
                <div class="mb-5 full-screen" id="userScreen" >
                    <div class="wrapper" >
                        <div class="">
                            <div class="full-screen-header p-2">
                                <div class="row align-items-center justify-content-start">
                                    <div class="col-2 pl-2 pr-0">
                                        <div class="img-container">
                                            <img src="img/WhatsApp Image 2019-11-18 at 5.39.22 PM.jpeg" alt="" class="img-fluid">
                                        </div>

                                    </div>
                                    <div class="col-10 p-0">
                                        <h3 class="title pl-2">Miguelina Ovando</h3>
    
                                    </div>
                                </div>
                                    
                                
                            </div>
                            <div class="full-screen-body p-1 text-center">
                                <ul>
                                    <li>
                                        <a href="profile.html" >
                                            <i class="fas fa-user fa-lg"></i> <span class="ml-2 h5">Me</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="profile.html" >
                                            <i class="fas fa-cog fa-lg"></i> <span class="ml-2 h5">Config</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="profile.html" >
                                            <i class="fas  fa-sign-out-alt fa-lg"></i> <span class="ml-2 h5">Log Out</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div><!-- Screen User -->
            </div><!--Col 12 para screen User-->
            
            <div class="col-12 p-0">
                <!-- Screen Search -->
                <div class="mb-5 full-screen " id="searchScreen" >
                    <div class="wrapper" >
                        <div class="">
                            <div class="full-screen-header p-2">
                                <div class="row align-items-center justify-content-start">
                                
                                    <div class="col-12 p-0">
                                        <h3 class="title pl-2 pb-3 pt-0" style="border-bottom:1px solid #e1e1e1;">Search</h3>
                                        
                                    </div>
                                    
                                    <div class="col-12">
                                        <div class="wrap-search d-flex justify-content-center">
                                            <input type="text" name="" id="inputSearchMobile" class="input-search" placeholder="Looking for Someone?">
                                            <div class="icon-search">
                                                <i class="fas fa-search"></i>
                                            </div>
                    
                                        </div>
                                    </div>
                                </div>
                                    
                                
                            </div>
                            <div class="full-screen-body p-1 text-center">
                                <ul>
                                    <li class="p-0 mb-2">
                                        <a href="profile.html">
                                            <div class="row align-items-center justify-content-between">
                                                <div class="col-3 col-sm-2 mb-2 pr-0">
                                                    
                                                    <div class="img-container">
                                                        <img src="img/WhatsApp Image 2019-11-18 at 5.39.22 PM.jpeg" alt="" class="img-fluid">
                                                    </div>

                                                    
                                                </div>
                                                <div class="col-9 col-sm-10 pl-0 text-left">
                                                    <p class=" mb-1 font-weight-bold">Miguelina Ovando</p>
                                            
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="p-0 mb-2">
                                        <a href="profile.html">
                                            <div class="row align-items-center justify-content-between">
                                                <div class="col-3 col-sm-2 mb-2 pr-0">
                                                    
                                                    <div class="img-container">
                                                        <img src="img/WhatsApp Image 2019-11-18 at 5.39.22 PM.jpeg" alt="" class="img-fluid">
                                                    </div>

                                                    
                                                </div>
                                                <div class="col-9 col-sm-10 pl-0 text-left">
                                                    <p class=" mb-1 font-weight-bold">Miguelina Ovando</p>
                                            
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    
                                    
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div><!-- Screen Search -->
            </div><!--Col 12 para screen search-->

            <div class="col-12 p-0">
                <!-- Screen message -->
                <div class="mb-5 full-screen " id="messagesScreen" >
                    <div class="wrapper" >
                        <div class="">
                            <div class="full-screen-header p-2">
                                <div class="row align-items-center justify-content-start">
                                
                                    <div class="col-12 p-0">
                                        <h3 class="title pl-2 pb-3 pt-0" style="border-bottom:1px solid #e1e1e1;">Messages</h3>
                                        
                                    </div>
                                    
                                </div>
                                <div class="wrap-search mb-3 d-flex justify-content-center ">
                                    <input type="text" name="" id="" class="input-search" placeholder="Looking for Someone?">
                                    <div class="icon-search">
                                        <i class="fas fa-search"></i>
                                    </div>
            
                                </div>    
                                
                            </div>
                            <div class="full-screen-body p-1 mt-2 text-center">
                                <ul>
                                    <li class="p-0 mb-2">
                                        <a href="profile.html">
                                            <div class="row align-items-center justify-content-between">
                                                <div class="col-3 col-sm-2 mb-2 pr-0">
                                                    
                                                    <div class="img-container">
                                                        <img src="img/WhatsApp Image 2019-11-18 at 5.39.22 PM.jpeg" alt="" class="img-fluid">
                                                    </div>

                                                    
                                                </div>
                                                <div class="col-9 col-sm-10 pl-0 text-left pl-2">
                                                    <p class=" mb-1 font-weight-bold">Miguelina Ovando</p>
                                                    <p class="">
                                                        Lorem ipsum dolor sit...
                                                    </p>
                                            
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="p-0 mb-2">
                                        <a href="profile.html">
                                            <div class="row align-items-center justify-content-between">
                                                <div class="col-3 col-sm-2 mb-2 pr-0">
                                                    
                                                    <div class="img-container">
                                                        <img src="img/WhatsApp Image 2019-11-18 at 5.39.22 PM.jpeg" alt="" class="img-fluid">
                                                    </div>

                                                    
                                                </div>
                                                <div class="col-9 col-sm-10 pl-0 text-left pl-2">
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
                            
                        </div>
                    </div>
                </div><!-- Screen Message -->
            </div><!--Col 12 para screen message-->

        </div>
    </div>

<?php
    import('footer');
?>