<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/header.inc.php'; ?>
</head>
    <?php
        $a  = "apple";
        $currentHour = date("H");
    
        if ($currentHour > 6 && $currentHour < 18) {
           echo "<body class='day'><h2>Its Day!</h2>"; 
        } else {
            echo "<body class='day'><h2>ItsNight</h2>"; 
        }
        
    ?>
</body>
</html>