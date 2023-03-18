<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Truth Table</title>
</head>
<body>
    <div class="container-main">
        <div class="container">
            <div class="box">
                <h3><?php echo 'Таблица истинности PHP'?></h3>
                <table  class="main-table">
                    <tr class="header">
                        <th class="colum"><?php echo "A";?></th>
                        <th class="colum"><?php echo "B"; ?></th>
                        <th class="colum"><?php echo "!A"; ?></th>
                        <th class="colum"><?php echo "A || B"; ?></th>
                        <th class="colum"><?php echo "A && B"; ?></th>
                        <th class="colum"><?php echo "A xor B"; ?></th>
                    </tr>
                    <tr class="table-row">
                        <td class="colum"><?php $a = 0; echo '0';?></td>
                        <td class="colum"><?php $b = 0; echo '0';?></td>
                        <td class="colum output"><?php $x = ($a != $b); var_export($x); ?></td>
                        <td class="colum output"><?php $x = ($a || $b); var_export($x); ?></td>
                        <td class="colum output"><?php $x = ($a && $b); var_export($x); ?></td>
                        <td class="colum output"><?php $x = ($a xor $b); var_export($x); ?></td>
                    </tr>
                    <tr class="table-row">
                        <td class="colum "><?php $a = 0; echo '0'?></td>
                        <td class="colum "><?php $b = 1; echo '1'?></td>
                        <td class="colum output"><?php $x = ($a != $b); var_export($x); ?></td>
                        <td class="colum output"><?php $x = ($a || $b); var_export($x); ?></td>
                        <td class="colum output"><?php $x = ($a && $b); var_export($x); ?></td>
                        <td class="colum output"><?php $x = ($a xor $b); var_export($x); ?></td>
                    </tr>
                    <tr class="table-row">
                        <td class="colum "><?php $a = 1; echo '1';?></td>
                        <td class="colum"><?php $b = 0; echo '0';?></td>
                        <td class="colum output"><?php $x = ($a != $b); var_export($x); ?></td>
                        <td class="colum output"><?php $x = ($a || $b); var_export($x); ?></td>
                        <td class="colum output"><?php $x = ($a && $b); var_export($x); ?></td>
                        <td class="colum output"><?php $x = ($a xor $b); var_export($x); ?></td>
                    </tr>
                    <tr class="table-row">
                        <td class="colum"><?php $a = 1; echo '1';?></td>
                        <td class="colum"><?php $b = 1; echo '1';?></td>
                        <td class="colum output"><?php $x = ($a != $b); var_export($x); ?></td>
                        <td class="colum output"><?php $x = ($a || $b); var_export($x); ?></td>
                        <td class="colum output"><?php $x = ($a && $b); var_export($x); ?></td>
                        <td class="colum output"><?php $x = ($a xor $b); var_export($x); ?></td>
                    </tr>
                </table>
            </div>
            <div class="box">
               <h3><?php echo "Гибкое сравнение в PHP ( == )" ?></h3>
                <table class="second-table">
                    <tr class="header">
                        <th class="colum colum-second"></th>
                        <th class="colum colum-second"><?php echo "true"; ?></th>
                        <th class="colum colum-second"><?php echo "false"; ?></th>
                        <th class="colum colum-second"><?php echo "1"; ?></th>
                        <th class="colum colum-second"><?php echo "0"; ?></th>
                        <th class="colum colum-second"><?php echo "-1"; ?></th>
                        <th class="colum colum-second"><?php echo "\"1\""; ?></th>
                        <th class="colum colum-second"><?php echo "null"; ?></th>
                        <th class="colum colum-second"><?php echo "\"php\""; ?></th>
                     </tr>
                    <tr class="table-row">
                        <td class="colum colum-second"><?php echo "true"; ?></td>
                        <td class="colum colum-second output"><?php $x = (true == true); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (true == false); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (true == 1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (true == 0); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (true == -1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (true == "1"); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (true == null); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (true == "php"); var_export ($x);?></td>
                    </tr>
                    <tr class="table-row">
                        <td class="colum colum-second"><?php echo "false"; ?></td>
                        <td class="colum colum-second output"><?php $x = (false == true); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (false == false); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (false == 1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (false == 0); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (false == -1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (false == "1"); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (false == null); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (false == "php"); var_export ($x);?></td>
                    </tr>
                    <tr class="table-row">
                        <td class="colum colum-second"><?php echo "1"; ?></td>
                        <td class="colum colum-second output"><?php $x = (1 == true); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (1 == false); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (1 == 1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (1 == 0); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (1 == -1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (1 == "1"); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (1 == null); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (1 == "php"); var_export ($x);?></td>
                    </tr>
                    <tr class="table-row">
                        <td class="colum colum-second"><?php echo "0"; ?></td>
                        <td class="colum colum-second output"><?php $x = (0 == true); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (0 == false); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (0 == 1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (0 == 0); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (0 == -1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (0 == "1"); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (0 == null); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (0 == "php"); var_export ($x);?></td>
                    </tr>
                    <tr class="table-row">
                        <td class="colum colum-second"><?php echo "-1"; ?></td>
                        <td class="colum colum-second output"><?php $x = (-1 == true); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (-1 == false); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (-1 == 1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (-1 == 0); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (-1 == -1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (-1 == "1"); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (-1 == null); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (-1 == "php"); var_export ($x);?></td>
                    </tr>
                    <tr class="table-row">
                        <td class="colum colum-second"><?php echo "\"1\""; ?></td>
                        <td class="colum colum-second output"><?php $x = ("1" == true); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("1" == false); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("1" == 1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("1" == 0); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("1" == -1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("1" == "1"); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("1" == null); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("1" == "php"); var_export ($x);?></td>
                    </tr>
                    <tr class="table-row">
                        <td class="colum colum-second"><?php echo "null"; ?></td>
                        <td class="colum colum-second output"><?php $x = (null == true); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (null == false); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (null == 1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (null == 0); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (null == -1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (null == "1"); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (null == null); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (null == "php"); var_export ($x);?></td>
                    </tr>
                    <tr class="table-row">
                        <td class="colum colum-second"><?php echo "\"php\""; ?></td>
                        <td class="colum colum-second output"><?php $x = ("php" == true); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("php" == false); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("php" == 1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("php" == 0); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("php" == -1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("php" == "1"); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("php" == null); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("php" == "php"); var_export ($x);?></td>
                    </tr>
                </table>
            </div>
            <div class="box">
               <h3><?php echo "Жёсткое сравнение в PHP ( === )"?></h3>
                <table class="second-table">
                <tr class="header">
                        <th class="colum colum-second"></th>
                        <th class="colum colum-second"><?php echo "true"; ?></th>
                        <th class="colum colum-second"><?php echo "false"; ?></th>
                        <th class="colum colum-second"><?php echo "1"; ?></th>
                        <th class="colum colum-second"><?php echo "0"; ?></th>
                        <th class="colum colum-second"><?php echo "-1"; ?></th>
                        <th class="colum colum-second"><?php echo "\"1\""; ?></th>
                        <th class="colum colum-second"><?php echo "null"; ?></th>
                        <th class="colum colum-second"><?php echo "\"php\""; ?></th>
                     </tr>
                    <tr class="table-row">
                        <td class="colum colum-second"><?php echo "true"; ?></td>
                        <td class="colum colum-second output"><?php $x = (true === true); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (true === false); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (true === 1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (true === 0); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (true === -1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (true === "1"); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (true === null); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (true === "php"); var_export ($x);?></td>
                    </tr>
                    <tr class="table-row">
                        <td class="colum colum-second"><?php echo "false"; ?></td>
                        <td class="colum colum-second output"><?php $x = (false === true); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (false === false); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (false === 1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (false === 0); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (false === -1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (false === "1"); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (false === null); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (false === "php"); var_export ($x);?></td>
                    </tr>
                    <tr class="table-row">
                        <td class="colum colum-second"><?php echo "1"; ?></td>
                        <td class="colum colum-second output"><?php $x = (1 === true); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (1 === false); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (1 === 1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (1 === 0); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (1 === -1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (1 === "1"); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (1 === null); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (1 === "php"); var_export ($x);?></td>
                    </tr>
                    <tr class="table-row">
                        <td class="colum colum-second"><?php echo "0"; ?></td>
                        <td class="colum colum-second output"><?php $x = (0 === true); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (0 ===false); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (0 === 1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (0 === 0); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (0 === -1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (0 === "1"); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (0 === null); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (0 === "php"); var_export ($x);?></td>
                    </tr>
                    <tr class="table-row">
                        <td class="colum colum-second"><?php echo "-1"; ?></td>
                        <td class="colum colum-second output"><?php $x = (-1 === true); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (-1 === false); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (-1 === 1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (-1 === 0); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (-1 === -1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (-1 === "1"); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (-1 === null); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (-1 === "php"); var_export ($x);?></td>
                    </tr>
                    <tr class="table-row">
                        <td class="colum colum-second"><?php echo "\"1\""; ?></td>
                        <td class="colum colum-second output"><?php $x = ("1" === true); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("1" === false); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("1" === 1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("1" === 0); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("1" === -1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("1" === "1"); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("1" === null); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("1" === "php"); var_export ($x);?></td>
                    </tr>
                    <tr class="table-row">
                        <td class="colum colum-second"><?php echo "null"; ?></td>
                        <td class="colum colum-second output"><?php $x = (null === true); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (null === false); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (null === 1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (null === 0); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (null === -1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (null === "1"); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (null === null); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = (null === "php"); var_export ($x);?></td>
                    </tr>
                    <tr class="table-row">
                        <td class="colum colum-second"><?php echo "\"php\""; ?></td>
                        <td class="colum colum-second output"><?php $x = ("php" === true); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("php" === false); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("php" === 1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("php" === 0); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("php" === -1); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("php" === "1"); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("php" === null); var_export ($x);?></td>
                        <td class="colum colum-second output"><?php $x = ("php" === "php"); var_export ($x);?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div> 
</body>
</html>