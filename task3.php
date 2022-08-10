<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<?php
include 'menu.inc';
// define variables and set to empty values
$nameErr = $emailErr = $roleErr = $dietErr = "";
$name = $email = $role = $diet = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
      }

    if (empty($_POST["role"])) {
        $genderErr = "At lest one role is required";
    } else {
        $role = test_input($_POST["role"]);
    }

    if (empty($_POST["diet"])) {
        $genderErr = "At lest one diet is required";
    } else {
        $diet = test_input($_POST["diet"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

echo "<h2>Your have entered the following information:</h2>";
echo "Full name <b>{$name}</b>";
echo "<br>";
echo "email address <b>{$email}</b>";
echo "<br>";
echo "Your role is <b>{$role}</b>";
echo "<br>";
echo "with dietary requirements <b>{$diet}</b>";
echo "<br>";
?>

<h2>Registration for hackathon</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Name: <input type="text" name="name">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        Role:
        <input type="checkbox" name="role" value="Project Leader">Project Leader
        <input type="checkbox" name="role" value="Programmer">Programmer
        <input type="checkbox" name="role" value="other">Tester
        <span class="error">* <?php echo roleErr;?></span>
        <br><br>
        Dietary Requirements:
        <select name="diet">
            <option value="Select">Select</option>
            <option value="None">None</option>
            <option value="Vegetarian">Vegetarian</option>
            <option value="Banting">Banting</option>
        </select>
        <span class="error">* <?php echo $dietErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<iframe src="task3.txt" height="400" width="1200">
    Your browser does not support iframes.
</iframe>
