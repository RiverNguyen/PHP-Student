<?php
function insert_class($name, $subject, $teacher)
{
    $sql = "INSERT INTO class(name, id_subject, id_teacher) VALUES ('$name', '$subject', '$teacher')";
    pdo_execute($sql);
}

function loadall_class()
{
    $sql = "SELECT class.id 'id', class.name 'name' , subject.name 'subject', teacher.name 'teacher'  FROM class
    inner join teacher on class.id_teacher = teacher.id 
    inner join subject on class.id_subject = subject.id";
    return pdo_query($sql);
}

function loadone_class($id)
{
    $sql = "SELECT class.id 'id', class.name 'name' , subject.name 'subject', teacher.name 'teacher'  FROM class
    inner join teacher on class.id_teacher = teacher.id 
    inner join subject on class.id_subject = subject.id where class.id = $id";
    return pdo_query_one($sql);
}

function insert_student_class($id_class, $student)
{
    $sql = "INSERT INTO classstudent(id_class, id_student) VALUES ('$id_class', '$student')";
    pdo_execute($sql);
}

function load_class_detail($id)
{
    $sql = "SELECT cs.id 'id_all', cs.id_class, sv.* FROM `classstudent` cs INNER JOIN sinhvien sv on sv.id = cs.id_student
    WHERE cs.id_class = $id";
    return pdo_query($sql);
}

function del_class($id)
{
    $sql = "DELETE FROM class WHERE id = $id";
    $sql1 = "DELETE FROM classstudent WHERE id_class = $id";
    pdo_execute($sql);
    pdo_execute($sql1);
}

function del_student_class($id)
{
    $sql = "DELETE FROM classstudent WHERE id = $id";
    pdo_execute($sql);
}

function update_name_class($id, $name)
{
    $sql = "UPDATE class SET name = '$name' WHERE id = $id";
    pdo_execute($sql);
}
