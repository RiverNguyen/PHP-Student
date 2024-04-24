<?php
function insert_subject($name, $credits)
{
    $sql = "INSERT INTO `subject` (`name`, `credits`) VALUES ('$name', '$credits')";
    pdo_execute($sql);
}

function loadall_subject()
{
    $sql = "SELECT * FROM `subject`";
    return pdo_query($sql);
}

function del_subject($id)
{
    $sql = "DELETE FROM `subject` WHERE `subject`.`id` = $id";
    pdo_execute($sql);
}

function loadone_subject($id)
{
    $sql = "SELECT * FROM `subject` WHERE `subject`.`id` = $id";
    return pdo_query_one($sql);
}

function update_subject($id, $name, $credits)
{
    $sql = "UPDATE `subject` SET `name` = '$name', `credits` = '$credits' WHERE `subject`.`id` = $id";
    pdo_execute($sql);
}
