<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scal=1.0">
    <title>Admin Anomic</title>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
  </head>
  <body>
      <div class="container">

          <div class="navigation">
              <ul>
                  <li>
                      <a href="index.php">
                      <span class="icon"><img src="public/image/Logo.svg"></span>
                      <span class="title"> Anomic</span></a>
                  </li>

                  <li>
                    <a href="#">
                    <span class="icon"><ion-icon name="grid"></ion-icon></span>
                    <span class="title">Vue d'ensemble</span>
                </li>

                  <li>
                    <a href="index.php?p=admin">
                    <span class="icon"><ion-icon name="person-add"></ion-icon></span>
                    <span class="title">Admin</span></a>
                </li>

                <li>
                    <a href="#">
                    <span class="icon"><ion-icon name="images"></ion-icon></span>
                    <span class="title">Évènement</span></a>
                </li>

                <li>
                    <a href="#">
                    <span class="icon"><ion-icon name="musical-notes"></ion-icon></span>
                    <span class="title">Artistes</span></a>
                </li>

                <li>
                    <a href="#">
                    <span class="icon"><ion-icon name="people"></ion-icon></span>
                    <span class="title">Membres</span></a>
                </li>

                <li>
                    <a href="#">
                    <span class="icon"><ion-icon name="book"></ion-icon></span>
                    <span class="title">Journal</span></a>
                </li>

                <li>
                    <a href="#">
                    <span class="icon"><ion-icon name="log-out"></ion-icon></span>
                    <span class="title">Deconnexion</span></a>
                </li>
              </ul>

          </div>


          <!-- main -->
          <?php 
          echo $contenu;
          ?>
      </div>
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

      <script>

          // MenuToggle
          let toggle = document.querySelector('.toggle');
          let navigation= document.querySelector('.navigation');
          let main = document.querySelector('.main');

          toggle.onclick=function(){
              navigation.classList.toggle('active');
              main.classList.toggle('active');
          }
          // ajouter la class hovered dans la select list 
          let list=document.querySelectorAll('.navigation li');
          function activeLink(){
              list.forEach((item)=>
              item.classList.remove('hovered'));
              this.classList.add('hovered');
          }
          list.forEach((item)=>
          item.addEventListener('mouseover',activeLink));
      </script>
  </body>
</html>
   
