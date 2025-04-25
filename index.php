<?php
include "functions.php";
$info=getInfo();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Домашнее задание по базам данных</title> 
    </head>
    <body> 
        <div>
            <table>
                <thead><th>Код</th><th>ФИО</th><th>Номер паспорта</th><th>Номер визы</th><th>Активность визы</th><th>Дата визы</th><th>Редактировать</th></thead>
                <?php
                for($i=0; $i<count($info); $i++)
                {
                    $id=$info[$i]["IDclient"];
                    $fio=$info[$i]["fio"];
                    $passport=$info[$i]["passport"];
                    $visa=$info[$i]["visa"];
                    $status=$info[$i]["status"];
                    $date=$info[$i]["dateVisa"];
                    echo "<tr><td>$id</td><td>$fio</td><td>$passport</td><td>$visa</td><td>$status</td><td>$date</td><td><a href='updateForm.php?id=".$id."'>Редактировать</a></td></tr>";
                }
                ?>
            </table>
        </div>
    </body>
<html>