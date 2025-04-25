<?php
include "functions.php";
$update=getInfoById($_GET['id']);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Форма редактирования</title> 
    </head>
    <body> 
        <div>
            <form action="updateController.php" method="POST" role='form'>
                <div>
                    <input id="IDclient" type="hidden" name="IDclient" value="<?php echo $update['IDclient'];?>"/>
                    <div>
                        <label for="fio">ФИО</label>
                        <div>
                            <input id="fio" type="text" name="fio" value="<?php echo $update['fio'];?>"/>
                        </div>
                    </div>
                    <div>
                        <label for="passport">Паспорт</label>
                        <div>
                            <input id="passport" type="text" name="passport" value="<?php echo $update['passport'];?>"/>
                        </div>
                    </div>
                    <div>
                        <label for="visa">Виза</label>
                        <div>
                            <input id="visa" type="text" name="visa" value="<?php echo $update['visa'];?>"/>
                        </div>
                    </div>
                    <div>
                        <label for="status">Статус визы</label>
                        <div>
                            <input id="status" type="text" name="status" value="<?php echo $update['status'];?>"/>
                        </div>
                    </div>
                    <div>
                        <label for="dateVisa">Дата визы</label>
                        <div>
                            <input id="dateVisa" type="text" name="dateVisa" value="<?php echo $update['dateVisa'];?>"/>
                        </div>
                    </div>
                    <button type="submit" name="add">Редактировать</button>
                </div>
            </form>
        </div>
    </body>
<html></html>