<?php
    $link = mysqli_connect("a372193.mysql.mchost.ru", "a372193_1", "qBCj5f62ls", "a372193_1");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$result = mysqli_query($link, "SELECT username FROM `users`");
             
if (!$result) {
    printf("Error message: %s\n", mysqli_error($link));
}

/* получение ассоциативного массива */
while ($row = mysqli_fetch_assoc($result)) {
var_dump($row);
}
$data_array = array();


?>