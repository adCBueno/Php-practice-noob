<html lang="es">
<head>
  <title></title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="css/login.css">

<style>
    .campo{
        margin: 5px;
    }

    form{
        margin: 30px;
    }
    #formContent{
        text-align: center;
    }
    .con{
        text-align: center;
        position: absolute;
    }
    
</style>

</head>
    <body>
        <div class="position-absolute top-0 start-50 translate-middle" style="margin-top: 20%; text-align: center; padding-left: 10%; padding-right: 10%;">
            
            <div id="formContent" class="card shadow-lg p-3 mb-5 bg-body rounded" style="width: 25rem;">
                <!-- Tabs Titles -->
                <!-- Icon -->
                <h2 class="card-title" style="text-align: center; margin-top: 15px; padding-right: 25px; padding-left: 25px; color: grey;">Login</h2>
                <!-- Login Form -->
                    <div class="cardbody">
                        <form action="includes/login.php" method="POST">
                        <input class="form-control" type="text" id="nick" class="fadeIn second" name="nick" placeholder="Nick"><br>
                        <input class="form-control" type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
                        <input type="submit" class="btn btn-primary" value="Log In" style="margin-top: 20px; padding-right: 25px; padding-left: 25px;">
                        </form>
                    </div>
                    
            </div>
              
        </div>
    </body>
</html>