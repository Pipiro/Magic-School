<?php 
//securite
if (!isset($activeTab))header('Location: ../index.php'); 
?>

<div class="header">
    <ul class="nav nav-pills pull-right">
      <?php if ($activeTab == "index") { ?>
      <li class="active"><a href="index.php">Accueil</a></li>
      <?php } else { ?>
      <li><a href="index.php">Accueil</a></li>
      <?php } ?>
      <?php if ($activeTab == "mage") { ?>
      <li class="active"><a href="mages.php">Mes mages</a></li>
      <?php } else { ?>
      <li><a href="mages.php">Mes mages</a></li>
      <?php } ?>
      <?php if ($activeTab == "ecole") { ?>
      <li class="active"><a href="ecole.php">Ecole</a></li>
      <?php } else { ?>
      <li><a href="ecole.php">Ecole</a></li>
      <?php } ?>
      <li style="margin-top:6px;margin-left:50px;margin-right:-50px;">
          <form action="login.php" method="post">
            <input type="text" name="username" value="Pseudo" onclick="this.value='';" style="vertical-align: middle;">
            <input type="password" name="password" value="Mot de passe" onclick="this.value='';" style="vertical-align: middle;">
             <button type="submit" class="btn btn-primary">Se connecter</button>
           </form>
      </li>
      </ul>
      <a href="index.php" style="text-decoration:none;"><h3 class="text-muted">Magic School</h3></a>
</div>
<br />
