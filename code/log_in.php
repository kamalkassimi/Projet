<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
   
    <title>valid log in </title>
</head>
<style>
 body{
      background-color: white;
    }
  .bg-image-vertical {
position: relative;
overflow: hidden;
background-repeat: no-repeat;
background-position: right center;
background-size: auto 100%;
}

@media (min-width: 1025px) {
.h-custom-2 {
height: 100%;
}
} </style>
<body>
<section class="vh-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 text-black">
          <div class="px-5 ms-xl-4">
            <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
            <span class="h1 fw-bold mb-0">Logo </span>
          </div>
          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
            <form style="width: 23rem;" method="post" action="">
              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>
              <div class="form-outline mb-4">
                <input type="email" id="form2Example18" class="form-control form-control-lg"  name="mail"  />
                <label class="form-label" for="form2Example18">Email address</label>
              </div>
              <div class="form-outline mb-4">
                <input type="password" id="form2Example28" class="form-control form-control-lg"  name="password" />
                <label class="form-label" for="form2Example28">Password</label>
              </div>
              <div class="pt-1 mb-4">
                <input class="btn btn-info btn-lg btn-block" type="submit" name="ok"></input>
              </div>
              <p class="small mb-5 pb-lg-2"><a class="text-muted " href="#!">Forgot password?</a></p>
              <p><a href="./BDS.html" class="link-info text-danger">create compte</a></p>
            </form>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="../image/photo-ofppt.png"
            alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>
      </div>
    </div>
  </section>   
</div>
<p he>
    <?php 
    $servore="localhost";
    $username="root";
    $pas="";   
            if (isset($_POST['ok'] )) {
                    function valid_donnees($donnes){
                    $donnes=trim($donnes);
                    $donnes=stripslashes($donnes);
                    $donnes=htmlspecialchars($donnes);
                    return $donnes;
                }
                $mail= valid_donnees($_POST['mail']);
                $pass= valid_donnees ( $_POST['password']);
            
        try {
          $connexion= new PDO("mysql:host=$servore;dbname=ntic_ofppt",$username,$pas);
          $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
          $requete=$connexion->prepare("SELECT mail, pass FROM stagire1  where pass='$pass' and mail='$mail'" ) ;
          $requete->execute();
          $res=$requete->fetchAll(PDO::FETCH_ASSOC);
          $var=$requete->rowCount();
           if ($var>0) {
            if ($res) {
              header("Location:about.html");
            }
            else {
              header("Location:log_in.php");
             
              
            }
           
           }


          // header("Location:tuotPage.html");
          

            
              //  $requete=$var->rowCount();
              //   echo $requete ."<br>";
              
             
           
          }
        
              // $requete->execute();
catch (PDOException $e ) {
            echo $e->getMessage();
        }
        finally{
            $connexion=NULL;
        }
   
      }
    
    ?>
</body>
</html>
