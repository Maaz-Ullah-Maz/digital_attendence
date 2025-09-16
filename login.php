<?php
if ($_POST['email'] == "teacher@gmail.com" && $_POST['password'] == "123") {
    header("Location: entry_form.html"); // go to entry form
    exit();
} else {
    echo "Wrong Email or Password!";
}
?>
