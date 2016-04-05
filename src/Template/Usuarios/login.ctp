<?php 
$this->layout = false;
 ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>.:CLINICA CAMPECHE:.</title>
<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<?= $this->Html->css(["boilerplate","index2"]) ?>
<?= $this->Html->script("respond.min.js") ?>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<?= $this->Html->css(["estilos"]) ?>
</head>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<body>
<div class="gridContainer clearfix">
  <div id="LayoutDiv1">
    <div align="center">
      <table width="100%" border="0">
        <tr>
          <td><div align="center"><img src="../img/Logo.png"></div></td>
        </tr>
        <tr>
          <td><table width="100%" border="0">   
            <tr>
              <td>
                <form id="form-logeo" method="post" accept-charset="utf-8" action="/usuarios/login" class="generic"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div>
                <?php /*<div id="login-pass" class="field">
                  <label>E-Mail</label>
                  <input  type="text" class="text" name="username" placeholder="email" tabindex="1" maxlength="32">
                </div> */ ?>
                <div id="login-pass" class="field">
                  <label>Contraseña</label>
                  <input  type="password" class="text" name="password" placeholder="Contrase&ntilde;a" tabindex="2" maxlength="32">
                </div> 
                <?= $this->Flash->render()  ?>
                <?= $this->Flash->render('auth') ?>
                <div class="btnlogeo">
                  <input type="submit" id="login-submit" value="Iniciar Sesión"></input>
                </div>
                </form>
              </td>
            </tr>
          </table></td>
        </tr>
      </table>
  </div>
</div>
</div>
</body>
</html>

