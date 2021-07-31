<?php
require 'views/layout/Functions.php';

getHeader();
getNavBar();

?>
<div class="container pt-5">
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Error 404!</h4>
        <p></p>
        <p class="mb-0">Oops! Looks like you found a glitch in the matrix</p>
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Active pill</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pill</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled pill</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Body</p>
            </div>
        </div>
    </div>
</div>


<?php
endHeader();
getFoorter();
?>
