<?php
$result = [$_POST['name'] => 1];
if (strlen($_POST['value']) < 1 || !preg_match('/^[0-9]{2}[-][0-9]{3}$/', $_POST['value'])) {
    $result = 0;
}
echo json_encode($result);
