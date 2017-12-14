<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="calendar.php">Calendar</a></li>
    <li><a href="recipes.php">Recipes</a></li>
    
    <li>   
        <?php
            require_once 'resources/fragments/init.php';
            use classes\controller\Controller;
            $contr = Controller::getSavedController();
            if(!empty($contr))
            {
                $name = $contr->getNickname();
                if(trim($name) !== '')
                {
                    echo '
                        <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn">Logged in as: '.$name.'</a>
                        <div class="dropdown-content">
                        <a href="login.php">Log out</a>
                        </div>
                        </li>
                        ';
                }
                
                else
                    echo '<a href="login.php">Login</a>';
            }
            else
                echo '<a href="login.php">Login</a>';
        ?>
    </li>
</ul>

