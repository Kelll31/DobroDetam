<?php
        $link = mysqli_connect("a372193.mysql.mchost.ru", "a372193_1", "qBCj5f62ls", "a372193_1");
        
    
        if(isset($_POST['password']) && isset($_POST['username'])){
            echo $_POST['password'].'<br>';
            echo $_POST['username'];
           }


    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    } 
    $pass = mysqli_query($link, "SELECT `password` FROM `users` WHERE `username` = 'kelll31'");
    if (!$pass) {
        printf("Error message: %s\n", mysqli_error($link));
    }  
    /* получение ассоциативного массива */
    while ($row = mysqli_fetch_assoc($row)) {
    $result = print_r($row);
    }

    if($_POST['username'] == "kelll31"){
        print("Sucses");
        $new_url = 'http://dobrodetam.mcdir.me/lk.html';
        header('Location: '.$new_url);
        exit();
        $_POST['kelll31'] = 1;
    }
    if($_POST['username'] == "admin"){
        print("Sucses");
        $new_url = 'http://dobrodetam.mcdir.me/lk2.html';
        header('Location: '.$new_url);
        exit();
        $_POST['admin'] = 2;
    }
    if($_POST['username'] == "lar228"){
        print("Sucses");
        $new_url = 'http://dobrodetam.mcdir.me/lk3.html';
        header('Location: '.$new_url);
        exit();
        $_POST['lar228'] = 3;
        
     }

     

?>