<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="" method="post">
        <h3>ქვიზი</h3>
        <p>100+100</p>
        <input type="radio" name="first" value="true" onclick="hideValues()"> <label>200</label>
        <input type="radio" name="first" value="false" onclick="showValues()"> <label>150</label>
        <br>
        <br>
        <p>100+300</p>
        <input type="radio" name="second" value="false" onclick="hideValues()"> <label>200</label>
        <input type="radio" name="second" value="true" onclick="showValues()"> <label>400</label>
        <br>
        <br>
        <p>100+400</p>
        <input type="radio" name="third" value="false" onclick="hideValues()"> <label>200</label>
        <input type="radio" name="third" value="true" onclick="showValues()"> <label>500</label>
        <br>
        <br>
        <p>100+500</p>
        <input type="radio" name="fourth" value="true" onclick="hideValues()"> <label>600</label>
        <input type="radio" name="fourth" value="false" onclick="showValues()"> <label>150</label>
        <br>
        <br>
        <p>100+600</p>
        <input type="radio" name="fifth" value="false" onclick="hideValues()"> <label>200</label>
        <input type="radio" name="fifth" value="true" onclick="showValues()"> <label>700</label>
        <br>
        <br>
        <input type="submit" value="დასრულება" name="send">
    </form>
    <div>
        <?php


        $a = 0;
        if (isset($_POST["send"])) {
            if($_POST["first"] == "true") {
                $a++;
            }
            if($_POST["second"] == "true") {
                $a++;
            }
            if($_POST["third"] == "true") {
                $a++;
            }
            if($_POST["fourth"] == "true") {
                $a++;
            }
            if($_POST["fifth"] == "true") {
                $a++;
            }
        }
        echo "სწორი პასუხების რაოდენობაა: ".$a;
        ?>
    </div>
</body>
</html>