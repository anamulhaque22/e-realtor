<?php
session_start();
?>
<header>
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="header-top-left">
                        <a href="./index.php" class="logo">
                            <h2>
                                Real <br />
                                Home Dashboard
                            </h2>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 ml-auto">
                    <div class="header-top-left d-flex justify-content-end">
                        <p><i class="fa-regular fa-phone"></i> +880194698856</p>
                        <p><i class="fa-regular fa-envelope"></i> example@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <header>
            <!-- desktop menu -->
            <nav class="navbar navbar-expand-md">
                <div class="container">
                    <div class="menu-ham">
                        <i class="fa-sharp fa-regular fa-bars menu-hem-bar"></i>
                        <i class="fa-regular fa-x menu-close d-none"></i>
                    </div>

                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 main-menu">
                        <li>
                            <a href="./userList.php">User List</a>
                        </li>
                        <li>
                            <a href="./empList.php">Employee List</a>
                        </li>
                        <li>
                            <a href="./insertEmployee.php">Insert Employee</a>
                        </li>
                        
                    </ul>

                </div>
            </nav>
        </header>
    </div>
</header>