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
    <form action="" method="get">
        <h3>ფორმა</h3>
        <input type="text" placeholder="სახელი" name="user">
        <br>
        <br>
        <input type="text" placeholder="გვარი" name="lastname">
        <br>
        <br>
        <input type="text" placeholder="თანამდებობა" name="position">
        <br>
        <br>
        <input type="number" placeholder="ხელფასი" name="sallary">
        <br>
        <br>
        <p>20% დაკავებული საშემოსავლო</p>
        <input type="radio" name="check" value="yes" onclick="hideValues()"> <label>Yes</label>
        <input type="radio" name="check" value="no" onclick="showValues()"> <label>No</label>
        <br>
        <br>
        <div id="sallaries">
            <input type="number" placeholder="დაკავებული საშემოსავლო" name="percent">
            <br>
            <br>
            <input type="number" placeholder="დარიცხული ხელფასი" name="net">
            <br>
            <br>
        </div>
        <input type="submit" value="SEND" name="send">
    </form>
    <div>
        <?php
        class Person {
            public $user;
            public $lastname;
            public $position;
            public $sallary;
            public $percent;
            public $net;

            function __construct($user, $lastname, $position, $sallary, $percent, $net) {
                $this->user = $user;
                $this->lastname = $lastname;
                $this->position = $position;
                $this->sallary = $sallary;
                $this->percent = $percent;
                $this->net = $net;
            }

            function get_user() {
                return $this->user;
            }
            function get_lastname() {
                return $this->lastname;
            }
            function get_position() {
                return $this->position;
            }
            function get_sallary() {
                return $this->sallary;
            }
            function get_percent() {
                return $this->percent;
            }
            function get_net() {
                return $this->net;
            }
        }

        $a = array();
        if (isset($_GET["send"])) {
            $prcnt = $_GET["percent"];
            $nt = $_GET["net"];
            if($_GET["check"] == "yes") {
                $prcnt = 20;
                $nt = $_GET["sallary"] - ($_GET["sallary"] * 0.2);
            }

            $newObj = new Person($_GET["user"], $_GET["lastname"], $_GET["position"], $_GET["sallary"],  $prcnt, $nt);
            array_push($a, $newObj);
        }
        for ($x = 0; $x <= count($a); $x++) {
            if (isset($a[$x])) {
             echo "<table>
            <tr>
                <th>სახელი</th>
                <th>გვარი</th>
                <th>თანამდებობა</th>
                <th>ხელფასი</th>
                <th>საშემოსავლო</th>
                <th>დარიცხული</th>
            </tr>
            <tr>";
                echo "<td>".$a[$x]->get_user(); echo"</td>";
                echo "<td>".$a[$x]->get_lastname(); echo"</td>";
                echo "<td>".$a[$x]->get_position(); echo"</td>";
                echo "<td>".$a[$x]->get_sallary(); echo"</td>";
                echo "<td>".$a[$x]->get_percent(); echo"</td>";
                echo "<td>".$a[$x]->get_net(); echo "</td>
            </tr>
            </table>";
            }
          }
        ?>
    </div>
    <script src="script.js"></script>
</body>

</html>