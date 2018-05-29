
<!DOCTYPE html>
<html>
    <head>
        <title>Click to Eat</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="Home.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    </head>
    <body style="background-color:#cc0000">

        <div id="topBut">
            <div id="ButLogin">REGISTE-SE</div>
            <div id="ButRegist">INICIAR SESSÃO</div>
        </div>

        <img id="logo" src="logo.jpg">

        <div>
            <div id="Ofertas" onclick="RestaurantPage()"><p id="OfertasText">Ver Ofertas</p></div>
            <div id="Cidade">
                <p id="CidadeText">Selecione a sua cidade</p>
                <p id="City1">Porto</p>
                <p id="City2">Lisboa</p>
            
            </div>
            
        </div> 

        <div id="CidadeMenu">
            <div id="Porto" onclick="PageSelection1()"><p id="PortoText">Porto</p></div>
            <div id="Lisboa" onclick="PageSelection2()"><p id="LisboaText">Lisboa</p></div>
        </div>

        <script>
            function PageSelection1(){
                 document.getElementById("CidadeText").style.display = "none";
                 document.getElementById("City1").style.display = "block";
                 document.getElementById("City2").style.display = "none";
                 $(document).ready(function() {
                     $("#CidadeMenu").animate({
                        height:'toggle'
                    });             
                });
                 
            }
            function PageSelection2(){
                 document.getElementById("CidadeText").style.display = "none";
                 document.getElementById("City1").style.display = "none";
                 document.getElementById("City2").style.display = "block";
                 $(document).ready(function() {
                     $("#CidadeMenu").animate({
                       height:'toggle'
                    });
                });
               }
            function RestaurantPage(){
                 if (document.getElementById("City1").style.display === "block"){
                window.location = "Restaurantes.php";
                 }
        }

       </script>


        <script>
           

            $(document).ready(function() {
            $("#Cidade").click(function() {

            $("#CidadeMenu").animate({
                height:'toggle'
                });
              });
            });
        </script>


    </body>
</html>