
<?php
 function mostrarPerfil(){
  $Email = $_SESSION['Email'];

  $objetoConsulta = new ConsultasCliente();

  $result = $objetoConsulta->verPerfil($Email);

  foreach($result as $f){
    echo '
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../'.$f["Foto"].'" width="79px" class="img-circle elevation-4" alt="User Image">
        </div>
        <div class="info">
          <a href="editarPerfil.php?id_user='.$f["Identificacion"].'" class="d-block">'.$f["Nombres"].' '.$f["Apellidos"].'<i class="fas fa-user-edit"></i></a>
          <p><a href="../../Controller/cerrarsesion.php" class="nav-link">Cerrar sesion</a></p>
        </div>
      </div>
     ';
  }
 }
?>