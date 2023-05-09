<?php
    const title = "Cours php version 8";
    $_short_date = date("Y");
    /* $_date_fr = date("d-m-Y"); */
    $_version_php = phpversion();
    $_navigateur = $_SERVER["HTTP_USER_AGENT"];
    $_signature = $_SERVER["SERVER_SIGNATURE"];
    $_servername = $_SERVER["SERVER_NAME"];
    $_server_addr = $_SERVER["REMOTE_ADDR"];
    $_admin = $_SERVER["SERVER_ADMIN"];
  
    //class php

    class userController{
        public $_lang = ["fr","en","es"];
        static $_style = "./css/style.css";
            public function dates(){
                print date("d-m-Y");
            }

    }
    //instance
    $_user = new userController();
    
    

?> 