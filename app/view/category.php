<?php
session_start();
require_once ('../config/config.php');
$today = date("Y-m-d");

if(isset($_SESSION['online']) && $_SESSION['online'] == "yes") {

if ($_SESSION['type_session']==0){
    header('location: main_client.php');

}


?>

<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<title>Click - Lublin - Obsługa</title>

<link rel="icon" href="images/cropped-icon-32x32.png" sizes="32x32" />
<link href="../css/css_main_all.css" rel="stylesheet">


<!-- javascript -->
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/bootbox.min.js"></script>
<script src="../js/jquery.timepicker.min.js"></script>
<!--  scripts -->
  <script>
    $( function() {
        $( "#selectdate1" ).datepicker({ dateFormat: 'yy-mm-dd' });
    } );

    $( function() {
        $( "#selectdate2" ).datepicker({ dateFormat: 'yy-mm-dd' });
    } );
</script>
</head>
<body>



  <nav class="navbar navbar-expand-lg">
      <div class="container">

        <a class="" href="../../index.php" style="color: silver">
              Strona domowa
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mx-auto">



                  <li class="nav-item">
                      <a href="main.php" class="nav-link smoothScroll" >Rezerwacje</a>
                  </li>

                  <li class="nav-item">
                      <a href="services.php" class="nav-link smoothScroll">Usługi</a>
                  </li>

                  <li class="nav-item">
                      <a href="users.php" class="nav-link smoothScroll" >Administracja</a>
                  </li>

                  <li class="nav-item">
                      <a href="category.php" class="nav-link smoothScroll" style="color: white">Kategorie</a>
                  </li>

                  <li class="nav-item">
                             <a href="password.php" class="nav-link smoothScroll">Zmiana hasła</a>
                         </li>

                         <li class="nav-item">
                                    <a href="../action/log_out.php" class="nav-link smoothScroll">Wyloguj</a>
                                </li>
              </ul>

          </div>

      </div>
  </nav>

  <section class="hero d-flex flex-column justify-content-center align-items-center" id="intro">
  <img src="../images/tlo7.jpg" width="100%" height="100%" >
  </section>

<div class="container">
  <?php


  if (isset($_SESSION['alert']))
  {
    echo $_SESSION['alert'];
    unset($_SESSION['alert']);
  }
  ?>


<br>

<!--Pola wyszukiwania -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">

<!--Nr zamówienia -->
<div class="form-row">





<br>
<a class="btn btn-secondary form-control col-md-4 offset-md-4" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 20px; margin-top: 20px; color: white">Dodaj</a>












    <table class="table  table-striped" cellspacing='0' style='text-align: center; margin-top: 30px'>


	<tr class="table-secondary">

        <th style="text-align: center">ID</th>
		<th style="text-align: center">Nazwa</th>
		<th style="text-align: center">Usuń</th>




    </tr>




	<?php

		$query = "SELECT * FROM category where disabled like 0";




$result = $db->query($query);



                     $row = $result->num_rows;

                       for ($x=0; $x < $row; $x++)
                         {
                             $table = $result->fetch_assoc();




                             echo "
                                 <tr>
                                 <td>" . $table['id'] . "</td>
								 <td>" . $table['name'] . "</td>";




								 echo "<td><a class=\"btn btn-outline-secondary \" href='../action/del_category.php?id=".$table['id']."' \">Usuń</a></td>";




	  }










?>





</table>

</div></div>
</div>
</div>





    <!-- TESTIMONIAL -->
     <section class="testimonials section-padding" id="testimonials" style="margin-top: 100px">
          <div class="container">
               <div class="row">
                 <div class="mx-auto col-lg-12 col-md-12 col-12">
                 <p class="mb-1">Serwis Komputerowy "Click" - Lublin</p>
                    <p class="mb-1">ul. Bohdana Dobrzańskiego 1</p>
                    <p class="mb-1">20-262 Lublin</p>
                    <p class="mb-1">+48-123-456-789</p>
                    <p class="mb-1">kontakt@click-lublin.pl</p>


                 </div>
                    </div>

               </div>
          </div>
     </section>






<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/custom.js"></script>









<?php
  echo "<div class=\"modal fade\" id=\"exampleModal\" tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'><div class=\"modal-dialog\" role=\"document\"><div class=\"modal-content\"><div class=\"modal-header\">
        <h4 id='exampleModalLabel' >Nowa kategoria</b></h4></div><div class='modal-body'>
        <form action='..\action\add_category.php' method='post' name='add' data-toggle='validator' role='form'>";

  ?>

  <!--Formularz dodawania zamówienia-->
  <div class="form-group col-md-12">
  <label for="inputEmail4">Nazwa</label>
  <input type="text" class="form-control"  placeholder="Nazwa" name="name"  required>
  </div>



                    <div class='modal-footer'>
                         <button type='button' class='btn btn-secondary' data-dismiss='modal'>Anuluj</button>
                         <button type='submi' class='btn btn-success'>Dodaj</button>
                         </form>
                    </div>
              </div>
         </div>
     </div>

    <?php
    unset($_SESSION['search']);
    ?>
    <script src="js/classie.js"></script>

    <!-- Okno dodawawania zamówienia -->
    <script>
        $('#exampleModal').on('show.bs.modal', function (event) {
           var button = $(event.relatedTarget)
           var recipient = button.data('whatever')
           var modal = $(this)
           modal.find('.modal-title').text('New message to ' + recipient)
           modal.find('.modal-body input').val(recipient)
       })
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
        $(function() {
            if (!String.prototype.trim) {
                (function() {
                    var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                    String.prototype.trim = function() {
                        return this.replace(rtrim, '');
                    };
                })();
            }
            [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
                if( inputEl.value.trim() !== '' ) {
                    classie.add( inputEl.parentNode, 'input--filled' );
                }
                inputEl.addEventListener( 'focus', onInputFocus );
            } );
            function onInputFocus( ev ) {
                classie.add( ev.target.parentNode, 'input--filled' );
            }
            function onInputBlur( ev ) {
                if( ev.target.value.trim() === '' ) {
                    classie.remove( ev.target.parentNode, 'input--filled' );
                }
            }
        })();
    </script>







</body>

<?php
}
else
{
    $_SESSION['notification'] = '<script type="text/javascript">swal("Brak uprawnień", "Nie masz uprawnień do przeglądania wybranej strony.", "error");</script>';
		header('location: ../action/log_out.php');
		exit();
}
?>
</html>
