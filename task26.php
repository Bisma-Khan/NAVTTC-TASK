<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 26</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Day of the Week</title>
</head>
<body>
    <h1>Today is <?php echo date("l"); ?></h1>
    <p>
        <?php
        $dayOfWeek = date("N"); // Get the numeric representation of the day of the week (1 for Monday, 2 for Tuesday, etc.)
        switch ($dayOfWeek) {
            case 1:
                echo "It's Monday!";
                break;
            case 2:
                echo "It's Tuesday!";
                break;
            case 3:
                echo "It's Wednesday!";
                break;
            case 4:
                echo "It's Thursday!";
                break;
            case 5:
                echo "It's Friday!";
                break;
            case 6:
                echo "It's Saturday!";
                break;
            case 7:
                echo "It's Sunday!";
                break;
            default:
                echo "Oops! Something went wrong.";
                break;
        }
        ?>
    </p>
</body>
</html>

</body>
</html>