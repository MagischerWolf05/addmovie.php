
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Reservieren</title>
</head>
<body>
<form action="sitze.php" method="post">
    <label for="fname">Name</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="wor">Reihe</label><br>
    <input type="number" id="rows" name="rows"><br>
    <label for="sit">Sitz nummer</label><br>
    <input type="number" id="sitnr" name="sitnr">
    <input type="submit" value="Send Request">
</form>
    <?php
        require_once 'sits.class.php' ;
        $name = $_REQUEST['name'];
        $rows = $_REQUEST['rows'];
        $nummbers = $_REQUEST['sitnr'];

        $sit = new sit($name,$rows,$nummbers);
        $sit->IsitOccupied();
        $sit->IsitOccupied();
    ?>
<style>
    table.GeneratedTable {
        background-color: #ffffff;
        border-collapse: collapse;
        border-width: 1px;
        border-color: #ffcc00;
        border-style: solid;
        color: #000000;
    }
    td{background-color: green}
    table.GeneratedTable td, table.GeneratedTable th {
        border-width: 2px;
        border-style: solid;
        padding: 3px;
    }
    <?php $sit->Markposition();?>

</style>
<table class="GeneratedTable">
    <thead>
    <tr>
        <th></th>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
        <th>6</th>
        <th>7</th>
        <th>8</th>
        <th>9</th>
        <th>10</th>
        <th>11</th>
        <th>12</th>
        <th>13</th>
        <th>14</th>
        <th>15</th>
    </tr>
    </thead>
    <tr>
        <th>1</th>
        <td id="td1-1"></td>
        <td id="td1-2"></td>
        <td id="td1-3"></td>
        <td id="td1-4"></td>
        <td id="td1-5"></td>
        <td id="td1-6"></td>
        <td id="td1-7"></td>
        <td id="td1-8"></td>
        <td id="td1-9"></td>
        <td id="td1-10"></td>
        <td id="td1-11"></td>
        <td id="td1-12"></td>
        <td id="td1-13"></td>
        <td id="td1-14"></td>
        <td id="td1-15"></td>
    </tr>

    <tbody>
    <tr>
        <th>2</th>
        <td id="td2-1"></td>
        <td id="td2-2"></td>

        <td id="td2-3"></td>
        <td id="td2-4"></td>
        <td id="td2-5"></td>
        <td id="td2-6"></td>
        <td id="td2-7"></td>
        <td id="td2-8"></td>
        <td id="td2-9"></td>
        <td id="td2-10"></td>
        <td id="td2-11"></td>
        <td id="td2-12"></td>
        <td id="td2-13"></td>
        <td id="td2-14"></td>
        <td id="td2-15"></td>
    </tr>
    <tr>
        <th>3</th>
        <td id="td3-1"></td>
        <td id="td3-2"></td>
        <td id="td3-3"></td>
        <td id="td3-4"></td>
        <td id="td3-5"></td>
        <td id="td3-6"></td>
        <td id="td3-7"></td>
        <td id="td3-8"></td>
        <td id="td3-9"></td>
        <td id="td3-10"></td>
        <td id="td3-11"></td>
        <td id="td3-12"></td>
        <td id="td3-13"></td>
        <td id="td3-14"></td>
        <td id="td3-15"></td>
    </tr>
    <tr>
        <th>4</th>
        <td id="td4-1"></td>
        <td id="td4-2"></td>
        <td id="td4-3"></td>
        <td id="td4-4"></td>
        <td id="td4-5"></td>
        <td id="td4-6"></td>
        <td id="td4-7"></td>
        <td id="td4-8"></td>
        <td id="td4-9"></td>
        <td id="td4-10"></td>
        <td id="td4-11"></td>
        <td id="td4-12"></td>
        <td id="td4-13"></td>
        <td id="td4-14"></td>
        <td id="td4-15"></td>
    </tr>
    <tr>
    </tr>
    </tbody>
</table>





</table>
</table>
</body>
</html>


