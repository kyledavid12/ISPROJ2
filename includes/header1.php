        <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    <a class="navbar-brand" href="#"> Silicon Valley - Portal </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <?php 
                        if(isset($_SESSION['userid']))
                        {
                            echo "
                            <ul class='nav navbar-nav navbar-right' toggleUser();>
                            <li id='user' class='dropdown' visible='false'>
                            <a class='dropdown-toggle' data-toggle='dropdown' href='#''>
                            <b>$userName ($userType)</b>
                            <span class='caret'></span>                                    
                            </a>
                            <ul class='dropdown-menu'>
                            <li><a href='". app_path."viewprofile.php'><i class='material-icons'>account_circle</i> &nbsp;View Profile</a></li>
                            <li class='divider'></li>
                            <li><a href='". app_path."logout.php'><i class='material-icons'>exit_to_app</i> &nbsp;Logout</a></li>
                            </ul>
                            </li>
                            </ul>";
                        }?>
                            
                    </div>
                </div>
            </nav>