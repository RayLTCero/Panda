<?php
    import('header');
?>

<main class="mt-md-5 mt-1 ">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 p-0 p-md-3">
                    <div class="wrap-form">
                        <div class="wrap-header text-center mb-4">
                            <h2 class="text-white">Register</h2>
                        </div>
                        <form action="" class="wrap-body" id="formRegister">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="inputName" id="inputName" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="inputSurname" id="inputSurname" class="form-control" placeholder="Surname">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="date" name="inputBirthdate" id="inputBirthdate" class="form-control" placeholder="Birthdate">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="d-inline ">
                                            <input class="" type="radio" name="radioGender" id="radioMale" value="male" checked>
                                            <label class=" text-white" >Male</label>
                                        </div>
            
                                        <div class="d-inline">
                                            <input class="" type="radio" name="radioGender" id="radioFemale" value="female" >
                                            <label class=" text-white" >Female</label>
                                        </div>
        
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="inputPasswordC"  id="inputPasswordC" class="form-control" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>
    
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </form>
                        <div class="wrap-footer mt-3 text-center">
                            <span class="text-white ">Have An Account? <a href="<?=MAIN_URL?>user/signin" class="font-weight-bold" >Sign In</a></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

<?php
    import('footer');
?>