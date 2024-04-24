<?php
function insert_user($mail, $pass, $user)
{
    $sql = "INSERT INTO account (mail, pass, user) VALUES ('$mail', '$pass', '$user')";
    return pdo_execute($sql);
}

function checkuser($user, $pass)
{
    $sql = "select * from account where user = '" . $user . "' and pass = '" . $pass . "'";
    $tk = pdo_query_one($sql);
    return $tk;
}

function checkemail($email)
{
    $sql = "select * from account where mail='" . $email . "'";
    $tk = pdo_query_one($sql);
    return $tk;
}

function forgot_pass($email, $pass)
{
    $sql = "update account set pass = '" . $pass . "' where mail = '" . $email . "'";
    pdo_execute($sql);
}

function change_pass($id, $pass)
{
    $sql = "update account set pass = '" . $pass . "' where id = " . $id;
    pdo_execute($sql);
}
