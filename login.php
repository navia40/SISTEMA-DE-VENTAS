<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Vista Login</title>
</head>

<body class="grid-container">

    <header class="header">HEADER</header>
<!--login -->
    <aside class="login">
        <div class="login-box">
            <h2 class="titulo">ACCEDE</h2>
            <form>
                <div class="form-group">
                    <label">Nombre de usuario o correo electrónico *</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo electrónico">
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Recuérdame</label>
                </div>
                <button type="submit" class="btn btn-dark w-100">Acceder</button>
            </form>
            <!-- logeo con paginas sociales -->
            <div class="social-login">
                <h3>O continua con:</h3>
                <div class="social-login-buttons">
                    <a class="btn btn-link-1 btn-link-1-facebook" href="#">
                        <i class="login-facebook"></i> Facebook
                    </a>
                    <a class="btn btn-link-1 btn-link-1-twitter" href="#">
                        <i class="login-twitter"></i> Twitter
                    </a>
                    <a class="btn btn-link-1 btn-link-1-google-plus" href="#">
                        <i class="login-google-plus"></i> Google Plus
                    </a>
                </div>
            </div>
        </div>

    </aside>
    
<!--registro-->
    <aside class="registro">
        <div class="register-box">
            <h2 class="titulo">REGISTRARSE</h2>
            <p>
Registrarse en este sitio le permite acceder al estado y al historial de su pedido. Simplemente complete los campos a continuación y obtendrá una nueva cuenta configurada para usted en poco tiempo. Solo te pediremos la información necesaria para que el proceso de compra sea más rápido y sencillo.
            </p>
            <button type="submit" class="btn btn-dark w-100">Registrate</button>
        </div>

    </aside>
    <footer class="footer">FOOTER</footer>
</body>

</html>