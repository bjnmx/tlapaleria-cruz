<nav class="navbar " style="border-radius: 10px 10px 10px 10px;" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
            <img src="./img/logo6.png"  width="88" height="28" alt="">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
<!--        incio y gastos-->
        <div class="navbar-start " >

                    <div class="btnHome">
                        <a><span class="icon"><i class="fas fa-home"></i></span><span>Inicio</span></a>
                    </div>

                    <a class="navbar-item">Gastos / Proveedores</a>
<!--reportes-->
            <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">Reportes</a>

                <div class="navbar-dropdown">
                    <a class="navbar-item">Existencias</a>
                    <a class="navbar-item">Porductos</a>
                    <a class="navbar-item">Catalogos de productos</a>

                    <hr class="navbar-divider ">
                    <a class="navbar-item x-small">Sistema</a>

                    <hr class="navbar-divider">
                    <a class="navbar-item ">Usuarios</a>
                    <a class="navbar-item ">Permisos</a>
                    <a class="navbar-item">Parametros</a>

                </div>
            </div>


<!--            usuarios-->
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Usuarios</a>

                <div class="navbar-dropdown">
                    <a class="navbar-item">Alta / Nuevo</a>
                    <a class="navbar-item">Lista / Consultar Usuarios</a>
                    <a class="navbar-item">Buscar Usuarios</a>


                    <hr class="navbar-divider ">
                    <a class="navbar-item x-small">Sistema</a>
                    <hr class="navbar-divider">
                    <a class="navbar-item ">Logs de Usuarios</a>
                    <a class="navbar-item ">Permiso de Usuarios</a>
                    <a class="navbar-item">Parametros de Usuario</a>
                </div>
            </div>

<!--categorias-->
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Categorias</a>

                <div class="navbar-dropdown">
                    <a class="navbar-item">Alta / Nueva</a>
                    <a class="navbar-item">Lista / Consultar Categorias</a>
                    <a class="navbar-item">Buscar por Categoria</a>
                </div>
            </div>

<!--            productos-->
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Productos</a>

                <div class="navbar-dropdown">
                    <a class="navbar-item">Alta / Nuevo Productos</a>
                    <a class="navbar-item">Lista / Consultar Productos</a>
                    <a class="navbar-item">Buscar por Productos</a>
                    <a class="navbar-item catProd">Categoria de Productos</a>
                </div>
            </div>



        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <button class="button is-primary is-light">Mi Cuenta</button>

                        <a class="button is-primary"><strong>Usuario Nuevo</strong></a>
                        <a class="button is-light">Sistema</a>

                        <div class="btnExit">
                            <button class="delete is-large" title="exit" ></button>
                        </div>

                </div>
            </div>
        </div>
    </div>
</nav>