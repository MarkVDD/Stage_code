<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include("bootstrap.php");?>
    <script>
        function yesnoCheck(that) {
            if (that.value == "other") {
                document.getElementById("ifYes").style.display = "block";
            } else {
                document.getElementById("ifYes").style.display = "none";
            }
        }
    </script>
</head>
<body onload="startTime()">
    <?php include("header.php");?><br>
    <form method="post" action="mailto:" enctype="text/plain" id="ContactForm">
        <div class="container bg-light">
        <h1 class="text-center">Contact formulier</h1>
        <label for="name">Naam</label>
        <input type="text" class="form-control" name="Name: ">
        <label for="email">E-Mail</label>
        <input type="email" class="form-control" name="E-Mail: ">
        <label for="onderwerp">Onderwerp</label><br>
        <select onchange="yesnoCheck(this);" class="form-control">
            <option value="Twitch">Lorem, ipsum dolor.</option>
            <option value="Programming">Lorem ipsum dolor sit.</option>
            <option value="other">Andere optie</option>
        </select>
        <div id="ifYes" style="display: none;">
            <label>Ander Onderwerp:</label><br><input type="text" class="form-control" name="optie: ">
        </div>
        <br>
        <label for="bericht">Bericht</label>
        <textarea cols="10" rows="10" class="form-control"></textarea>
        <br>
        <button type="submit" class="btn btn-primary">Verstuur e-mail</button>  
        </div>
    </form>
    <?php include("footer.php");?>
</body>
</html>