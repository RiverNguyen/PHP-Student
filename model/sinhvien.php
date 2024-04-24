<?php
function insert_student($name, $gender, $birth, $mail, $major, $img, $address, $phone)
{
    $sql = "insert into sinhvien(name, gender, birth, mail, id_major, img, address, phone) values('$name', '$gender', '$birth', '$mail', '$major', '$img', '$address', '$phone')";
    pdo_execute($sql);
}

function loadall_student()
{
    $sql = "SELECT sinhvien.*, major.name AS 'major'
    FROM sinhvien
    LEFT JOIN major ON sinhvien.id_major = major.id
    WHERE sinhvien.id_major IS NOT NULL;
    ";
    return pdo_query($sql);
}

function del_student($id)
{
    $sql = "delete from sinhvien where id = $id";
    $sql1 = "delete from classstudent where id_student = $id";
    $sql2 = "delete from score where id_student = $id";
    pdo_execute($sql);
    pdo_execute($sql1);
    pdo_execute($sql2);
}

function loadone_student($id)
{
    $sql = "select * from sinhvien where id = $id";
    return pdo_query_one($sql);
}

function update_student($id, $name, $gender, $birth, $mail, $major, $img, $address, $phone)
{
    if ($img != "") {
        $sql = "update sinhvien set name = '" . $name . "', gender = '" . $gender . "', birth = '" . $birth . "', mail = '" . $mail . "', id_major = '" . $major . "', img = '" . $img . "', address = '" . $address . "', phone = '" . $phone . "' where id = " . $id;
    } else {
        $sql = "update sinhvien set name = '" . $name . "', gender = '" . $gender . "', birth = '" . $birth . "', mail = '" . $mail . "', id_major = '" . $major . "', address = '" . $address . "', phone = '" . $phone . "' where id = " . $id;
    }
    pdo_execute($sql);
}
