<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body>
        <p>What is 2+2?</p>

        <p style="margin-left: 40px">
        <?php
$total = 0;
echo "  You answered: " . $_POST["q1"] . "<br>";
echo "  Correct answer: 4<br>";
if ($_POST["q1"] == "4") $total++;
        ?>
        </p>

        <p>What is the 47th digit of pi?</p>
        <p style="margin-left: 40px">
        <?php
echo "  You answered: " . $_POST["q2"] . "<br>";
echo "  Correct answer: 3<br>";
if ($_POST["q2"] == "3") $total++;
        ?>
        </p>

        <p>What is 47 * 23?</p>
        <p style="margin-left: 40px">
        <?php
echo "  You answered: " . $_POST["q3"] . "<br>";
echo "  Correct answer: 1081<br>";
if ($_POST["q3"] == "1081") $total++;
        ?>
        </p>

        <p>What question number is this?</p>
        <p style="margin-left: 40px">
        <?php
echo "  You answered: " . $_POST["q4"] . "<br>";
echo "  Correct answer: 4<br>";
if ($_POST["q4"] == "4") $total++;
        ?>
        </p>

        <p>In the game Magic: The Gathering, under what conditions is a Saga sacrificed as a state based action?</p>
        <p style="margin-left: 40px">
        <?php
echo "  You answered: " . $_POST["q5"] . "<br>";
echo "  Correct answer: It has a number of lore counters greater than or equal to its final chapter number, and it is not the source of a chapter ability on the stack<br>";
if ($_POST["q5"] == "It has a number of lore counters greater than or equal to its final chapter number, and it is not the source of a chapter ability on the stack") $total++;
        ?>
        </p>

        <?php
        echo "You answered ".$total." questions correctly, earning a score of ".($total * 20)."%.";
        ?>
</body>
</html>