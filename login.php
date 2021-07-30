<?php
include "views/layout/Functions.php";

getHeader();
getNavBar();
?>
    <div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">
                    <form id="login" method="post" action="/views/layout/Utils.php">
                        <!--Form with header-->
                        <div class="card wow fadeIn" data-wow-delay="0.3s">
                            <div class="card-body">

                                <!--Header-->
                                <div class="form-header purple-gradient">
                                    <h3><i class="fas fa-user mt-2 mb-2"></i> Log in:</h3>
                                </div>
                                <div class="md-form">
                                    <i class="fas fa-envelope prefix white-text"></i>
                                    <input type="text" id="orangeForm-email" name="email" class="form-control">
                                    <label for="orangeForm-email">Your email</label>
                                </div>

                                <div class="md-form">
                                    <i class="fas fa-lock prefix white-text"></i>
                                    <input type="password" id="orangeForm-pass" name="password" class="form-control">
                                    <label for="orangeForm-pass">Your password</label>
                                </div>

                                <div class="text-center">
                                    <button class="btn purple-gradient btn-lg" name='login' type='submit'
                                            value='submit'>Log In</button>
                                    <hr>
                                    <div class="inline-ul text-center d-flex justify-content-center">
                                        <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter white-text"></i></a>
                                        <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in white-text"> </i></a>
                                        <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram white-text"> </i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--/Form with header-->
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
getFoorter();