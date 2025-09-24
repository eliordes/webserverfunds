<!DOCTYPE html>
<html>
    <head>
        <title>Part 3.3</title>
    <head>
    <body>
        <div>GET: <?= var_dump($_GET) ?></div>
        <div>
            Hi <?= htmlspecialchars($_POST['firstname']); ?>. 
            You are <?= htmlspecialchars($_POST['age']); ?> years old. 
            You were born on <?= htmlspecialchars($_POST['dob']); ?>. 
            Your email is <?= htmlspecialchars($_POST['email']); ?>. 
        </div>
    </body>
</html>