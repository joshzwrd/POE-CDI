<!DOCTYPE html>
<html>

<style>
    form input{
        margin: 10px;
    }
</style>



<body>
    
    
    <?php
   
   
   $nameError = $ageError = $emailError = "";

   $name = $age = $email = "";
   
   
   if (isset($_POST['submit'])) {
       
       $name = $_POST['name'];
       $age = $_POST['age'];
       $email = $_POST['email'];

       if (!empty($name) && !empty($age) && !empty($email)) {
           
           echo "<span style=\"color:green; font-weight: bold;\">Les données ont bien été envoyées<br></span>";
           
        }else
        
        {
            $nameError = empty($name) ? "<b style='color:red'> Veuillez entrer un nom!</b>" : "";
            $ageError = empty($age) ? "<b style='color:red'> Veuillez entrer un age!</b>" : "";
            $emailError = empty($email) ? "<b style='color:red'> Veuillez entrer un email!</b>" : "";
        }
    }

    
    ?>

    <form method="post">
        <label for="name">Votre nom :</label>
        <input type="text" name="name"><?= $nameError; ?><br>

        <label for="age">Votre age :</label>
        <input type="text" name="age"><?= $ageError; ?> <br>

        <label for="email">Votre email :</label>
        <input type="email" name="email"><?= $emailError; ?> <br>

        <input type="submit" name="submit" value="Ajouter">
    </form>

</body>

</html