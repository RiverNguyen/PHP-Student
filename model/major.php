<?php
function insert_major($name)
{
    $sql = "INSERT INTO major(name) VALUES ('$name')";
    pdo_execute($sql);
}

function loadall_major()
{
    $sql = "SELECT * FROM major";
    return pdo_query($sql);
}

function loadone_major($id)
{
    $sql = "SELECT * FROM major WHERE id=$id";
    return pdo_query_one($sql);
}

function del_major($id)
{
    $sql = "DELETE FROM major WHERE id=$id";
    pdo_execute($sql);
}

function update_major($id, $name)
{
    $sql = "UPDATE major SET name='$name' WHERE id=$id";
    pdo_execute($sql);
}

function load_major_detail($id)
{
    $sql = "SELECT sv.* FROM `sinhvien` sv INNER JOIN major on sv.id_major = major.id
        WHERE major.id = $id";
    return pdo_query($sql);
}
