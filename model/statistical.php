<?php
function count_student()
{
    $sql = "SELECT COUNT(*) FROM sinhvien";
    return pdo_query_value($sql);
}

function cout_teacher()
{
    $sql = "SELECT COUNT(*) FROM teacher";
    return pdo_query_value($sql);
}

function count_class()
{
    $sql = "SELECT COUNT(*) FROM class";
    return pdo_query_value($sql);
}

function count_good()
{
    $sql = "select count(*)  from score
        where (score1 + score2)/2 > 8";
    return pdo_query_value($sql);
}

function thongke_student()
{
    $sql = "select major.name 'name', COUNT(major.id) 'number' from sinhvien
        INNER JOIN major on major.id = sinhvien.id_major
        GROUP BY major.id";
    return pdo_query($sql);
}

function thongke_teacher()
{
    $sql = "select major.name 'name', COUNT(major.id) 'number' from teacher
        INNER JOIN major on major.id = teacher.id_major
        GROUP BY major.id";
    return pdo_query($sql);
}
