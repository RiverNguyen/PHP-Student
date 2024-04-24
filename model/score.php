<?php
function load_score_detail($id)
{
    $sql = "SELECT score.id 'id_score', cs.id_class, sv.*, score1, score2 FROM `classstudent` cs 
    INNER JOIN sinhvien sv on sv.id = cs.id_student
    INNER join score on score.id_student = sv.id
    WHERE cs.id_class = $id";
    return pdo_query($sql);
}

function load_student_score($id)
{
    $sql = "select classstudent.*, sinhvien.name from classstudent
    INNER JOIN sinhvien on classstudent.id_student = sinhvien.id
    where id_class = $id";
    return pdo_query($sql);
}

function insert_score($id_class, $id_student, $score1, $score2)
{
    $sql = "INSERT INTO `score`(`id_class`, `id_student`, `score1`, `score2`) 
    VALUES ($id_class, $id_student, $score1, $score2)";
    pdo_execute($sql);
}

function update_score($id, $score1, $score2)
{
    $sql = "UPDATE `score` SET `score1`=$score1,`score2`=$score2 WHERE id = $id";
    pdo_execute($sql);
}

function loadone_score($id)
{
    $sql = "SELECT * FROM `score` WHERE id = $id";
    return pdo_query_one($sql);
}
