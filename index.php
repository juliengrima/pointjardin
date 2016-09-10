<?php   

include('includes/header.php');
//include('includes/body1.php');

?>
        
        <!--CORPS DE LA PAGE-->
       
<!-- REPERES DE COLONNES POUR IMPLEMENTATION -->
<div class="container center">
<div class="row">
<div class="col s1">1</div>
<div class="col s1">2</div>
<div class="col s1">3</div>
<div class="col s1">4</div>
<div class="col s1">5</div>
<div class="col s1">6</div>
<div class="col s1">7</div>
<div class="col s1">8</div>
<div class="col s1">9</div>
<div class="col s1">10</div>
<div class="col s1">11</div>
<div class="col s1">12</div>
</div>
</div>
     
<div class="container center">
    <div class="row center">
        <div class="col s12 m6 center">
            <center>
                <table>
                   <tr>
                       <td>
                           Bonjour et bienvenue, <br>
                           dans le monde du jardinage <br> professionnel et particulier.<br>
                           Chez nous vous découvrirez <br> les dernières tendances,<br>
                           les derniers outils et <br> surtout une large gamme de <br>
                           produits
                       </td>
                   </tr>
                </table> 
            </center>  
        </div>
        <div class="col s12 m6 center">
            <video controls poster="images/logo.jpg" height=100% width=100% class="center">
                <source src="videos/present.mp4">
                <source src="videos/present.mov">
                <source src="videos/present.flv">
                <a href="https://www.youtube.com/watch?v=szGkJgvt2-0">Alternative de la vidéo :</a> 
            </video>
        </div>
    </div>
</div>
      
<!-- Ligne de tuiles lien vers pages 1 -->      
<div class="container">
    <div class="row">
        <div class="col s12 m4">
            <a href="">
                <div class="zoomarticle2">
                    <div class="article_big_img2">
                        <img src="images/galets.jpg" alt="Mineral" height=100% width=100%>
                    </div>   
                </div>
            </a>
        </div>
        <div class="col s12 m4">
            <a href="">
                <div class="zoomarticle2">
                    <div class="article_big_img2">
                        <img src="images/chanvre.jpg" alt="vegetal" height=100% width=100%>
                    </div>   
                </div>
             </a>
        </div>
        <div class="col s12 m4">
            <a href="">
                <div class="zoomarticle2">
                    <div class="article_big_img2">
                        <img src="images/gazon" alt="Accessoires" height=100% width=100%>
                    </div>   
                </div>
             </a>
        </div>
    </div>
</div>

<!-- Ligne de tuiles lien vers pages 2 -->
<div class="container center">
    <div class="row">
        <div class="col s12 m6 center">
            <center>
                <a href="">
                    <div class="zoomarticle1">
                        <div class="article_big_img1">
                            <img src="images/livraison" alt="Services" height=70% width=70%>
                        </div>   
                    </div>
                </a>
            </center>
        </div>
        <div class="col s12 m6">
           <center>
                <a href="pages/concept.php">
                    <div class="zoomarticle1">
                        <div class="article_big_img1">
                            <img src="images/concept1" alt="Conceptions" height=70% width=70%>
                        </div>   
                    </div>
                </a>
            </center>
        </div>
    </div>
</div>


<?php include('includes/footer.php'); ?>
