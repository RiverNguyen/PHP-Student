<?php
function insert_teacher($name, $gender, $birth, $mail, $major, $phone, $address, $img)
{
    $sql = "insert into teacher (name, gender, birth, mail, id_major, phone, address, img) values ('$name', '$gender', '$birth', '$mail', '$major', '$phone', '$address', '$img')";
    pdo_execute($sql);
}

function loadall_teacher()
{
    $sql = "select teacher.*, major.name 'major' from teacher inner join major on teacher.id_major = major.id";
    return pdo_query($sql);
}

function loadone_teacher($id)
{
    $sql = "select * from teacher where id = $id";
    return pdo_query_one($sql);
}

function del_teacher($id)
{
    $sql = "delete from teacher where id = $id";
    pdo_execute($sql);
}

function update_teacher($id, $name, $gender, $birth, $mail, $major, $img, $address, $phone)
{
    if ($img != "") {
        $sql = "update teacher set name = '" . $name . "', gender = '" . $gender . "', birth = '" . $birth . "', mail = '" . $mail . "', id_major = '" . $major . "', img = '" . $img . "', address = '" . $address . "', phone = '" . $phone . "' where id = " . $id;

    } else {
        $sql = "update teacher set name = '" . $name . "', gender = '" . $gender . "', birth = '" . $birth . "', mail = '" . $mail . "', id_major = '" . $major . "', address = '" . $address . "', phone = '" . $phone . "' where id = " . $id;
    }

    pdo_execute($sql);
}
