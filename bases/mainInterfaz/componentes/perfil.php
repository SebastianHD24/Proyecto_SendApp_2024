<div class="main-container">
        <div class="login">
            <img src="../../Styles/Img/LogosSena-img/SendApp.png" alt="Logo" class="login__img">
            <h1 class="login__title">Bienvenido a tu perfil de usuario</h1>
            <form action="../php/login.php" method="POST" class="login__form">
                <div class="primera-seccion">
                    <p>Documento de identidad:</p>
                <input type="text" name="documento_identidad" class="login__input" disabled>
                <p>Nombre</p>
                <input type="text" name="nombres" class="login__input" disabled>
                <p>Apellidos:</p>
                <input type="text" name="apellidos" class="login__input" disabled>
                <p>Correo:</p>
                <input type="email" name="correo" class="login__input" disabled>
                <p>Celular:</p>
                <input type="text" name="celular" class="login__input" disabled>
                </div>
                <div class="segunda-seccion">
                    <p>Programa:</p>
                </div>
                <input type="submit" value="Iniciar Sesión" class="login__button">
            </form>
        </div>
    </div>

