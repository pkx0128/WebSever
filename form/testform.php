<?php
            $nameErr = $emailErr = $websiteErr = $genderErr ="";
            $name = $email = $website = $commint = $gender = "";

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["name"])){
                    $nameErr = "名字不能为空！";
                }else{
                    $name = test_input($_POST['name']);
                }

                if (empty($_POST["email"])){
                    $emailErr = "邮箱为空或格式错误!";
                }else{
                    $email = test_input($_POST["email"]);
                }

                if(empty($_POST["website"])){
                    $websiteErr="网址为空或格式错误";
                }else{
                    $website = test_input($_POST["website"]);
                }

                if(empty($_POST["commint"])){
                    $commint = "";
                }else{
                    $commint = test_input($_POST["commint"]);
                }

                if(empty($_POST["gender"])){
                    $genderErr = "必须选择性别！";
                }else{                    
                    $gender = test_input($_POST["gender"]);
                }
            }



            function test_input($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }


        ?>