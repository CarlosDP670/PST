  <?php require("layouts/header.html"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<link rel="stylesheet" href="css/nuevo_usuario.css">
<link rel="stylesheet" href="css/nuevo_empleado.css">
<link rel="stylesheet" href="css/usuarios.css">
<title>Administrador De Usuarios</title>
</head>
<?php include("layouts/barra.html") ?>
<div class="contenido">
        <div class="buscar">
            <div class="buscar__buscador">
                <input type="text" class="buscar__buscador-input" name="input_buscar" id="input_buscar" placeholder="Buscar">
                <label for="input_buscar" class="formulario__label">Buscar</label>
                <button type="button" name="buscar" value="Buscar">Buscar</button>
            </div>
            <div class="buscar__botones">
                <button type="button" name="empleado" id="open2">Nuevo Empleado</a>
                <button type="button" name="usuario" id="open">Nuevo Usuario</a>
            </div>
        </div>
        <div class="tabla">
            <table class="table table-striped table-hover caption-top">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Usuario</th>
                        <th scope="col" class="text-center">Tipo de Usuario</th>
                        <th scope="col" class="text-center">Cédula</th>
                        <th scope="col" class="text-center"></th>
                    </tr>
                </thead>
                <tbody id="mostrar"></tbody>
            </table>
        </div>
        
    </div>
    
    <div class="modal" id="modal">
        <div class="modalBox" id="modalBox">
            <div class="header"><h2><strong>NUEVO USUARIO</strong></h2></div>
            <form action="backend/agregar_usuario.php" method="POST" class="Formulario" id="Formulario__Usuario">
                <div class="BoxFloat">
                    <select id="CI_E" name="CI_E">
                        <option hidden value="">Seleccionar empleado</option>
                      
                    </select>
                </div>

                <!-- Grupo: Usuario -->
                <div class="formulario__grupo" id="grupo__usuario">
                    
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="usuario" id="usuario" placeholder="Usuario">
                        <label for="usuario" class="formulario__label">Usuario</label>
                    </div>
                </div>
                
            <!-- Grupo: Contraseña -->
                <div class="formulario__grupo" id="grupo__password">
                    <div class="formulario__grupo-input">
                        <input type="password" class="formulario__input" name="password" id="password" placeholder="Contraseña">
                        <label for="password" class="formulario__label">Contraseña</label>
                    </div>
                </div>

                <!-- Grupo: Contraseña 2 -->
                <div class="formulario__grupo" id="grupo__password2">
                    <div class="formulario__grupo-input">
                        <input type="password" class="formulario__input" name="password2" id="password2" placeholder="Repetir Contraseña">
                        <label for="password2" class="formulario__label">Repetir Contraseña</label>
                    </div>
                </div>

                <div class="BoxFloat" >
                    <select id="U_Tipo" name="U_Tipo">
                        <option hidden value="">Tipo de usuario</option>
                        <option value="Empleado">Empleado</option>
                        <option value="Administrador">Administrador</option>
                    </select>
                </div>
                <div class="Submit">
                    <button class="bttn" type="submit" name="Agregar"><b>Agregar</b></button>
                    <button class="close" type="button" id="close"><b>Cerrar</b></button>
                </div>
            </form>
                
        </div>
    </div>

    <div class="modal" id="modal2">
    <div class="modalBox" id="modalBox">
        <div class="header">
            <h2><strong>NUEVO EMPLEADO</strong></h2>
        </div>
            <form action="backend/nuevo_empleado" method="POST" class="Formulario__Empleado" id="Formulario">
                        
                <div>

                    <p class="titulo"><strong>DATOS PERSONALES</strong></p>

                    <!-- Grupo: Cedula -->
                    <div class="formulario__grupo" id="cedula">
                    
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="CI" id="cedula" placeholder="Cedula">
                            <label for="cedula" class="formulario__label">Cedula</label>
                        </div>
                    </div>
                        
                    <!-- Grupo: Nombre -->
                    <div class="formulario__grupo" id="nombre">
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="Nombre" id="nombre" placeholder="Nombre">
                            <label for="nombre" class="formulario__label">Nombre</label>
                            
                        </div>
                    </div>
    
                    <!-- Grupo: Segundo Nombre -->
                    <div class="formulario__grupo" id="segundo__nombre">
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="S_Nombre" id="segundo__nombre" placeholder="Segundo Nombre">
                            <label for="Segundo Nombre" class="formulario__label">Segundo Nombre</label>
                        </div>
                    </div>

                    <!-- Grupo: Apellido -->
                    <div class="formulario__grupo" id="apellido">
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="Apellido" id="apellido" placeholder="Apellido">
                            <label for="apellido" class="formulario__label">Apellido</label>
                        </div>
                    </div>
    
                    <!-- Grupo: Segundo Apellido -->
                    <div class="formulario__grupo" id="segundo__apellido">
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="segundo__apellido" id="segundo__apellido" placeholder="Segundo Apellido">
                            <label for="apellido" class="formulario__label">Segundo Apellido</label>

                        </div>
                    </div>
                    
                    <div class="BoxFloat" >
                        <select id="sexo" name="sexo">
                            <option hidden value=""  >Sexo</option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                    </div>
                </div>

                    <div>
                        <p class="titulo"><strong>DIRECCIÓN</strong></p>

                <!-- Grupo: Estado -->
                <div class="formulario__grupo" id="estado">
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="estado" id="estado" placeholder="Estado">
                        <label for="apellido" class="formulario__label">Estado</label>

                    </div>
                </div>

                <!-- Grupo: Cuidad -->
                <div class="formulario__grupo" id="ciudad">
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="ciudad" id="ciudad" placeholder="Cuidad">
                        <label for="apellido" class="formulario__label">Cuidad</label>
                        
                    </div>
                </div>
            
                        <!-- Grupo: Municipio -->
                        <div class="formulario__grupo" id="municipio">
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="municipio" id="municipio" placeholder="Municipio">
                                <label for="apellido" class="formulario__label">Municipio</label>
                                
                            </div>
                        </div>
                        
                        <!-- Grupo: Parroquia -->
                        <div class="formulario__grupo" id="parroquia">
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="parroquia" id="parroquia" placeholder="Parroquia">
                                <label for="apellido" class="formulario__label">Parroquia</label>

                            </div>
                        </div>
                        
                        <!-- Grupo: Sector -->
                        <div class="formulario__grupo" id="sector">
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="sector" id="sector" placeholder="Sector">
                                <label for="apellido" class="formulario__label">Sector</label>
                                
                            </div>
                        </div>
            
                        <!-- Grupo: Calle o Carrera -->
                        <div class="formulario__grupo" id="Calle__Carrera">
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="Calle__Carrera" id="Calle__Carrera" placeholder="Calle o Carrera">
                                <label for="apellido" class="formulario__label">Calle o Carrera</label>

                            </div>
                        </div>

                        <!-- Grupo: # Casa -->
                        <div class="formulario__grupo" id="Num__Casa">
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="Num__Casa" id="Num__Casa" placeholder="#Casa">
                                <label for="apellido" class="formulario__label">#Casa</label>

                            </div>
                        </div>
                    </div>

                    <div>
                        <p class="titulo"><strong>EMPLEADO</strong></p>
                        
                        <!-- Grupo: Cargo -->
                        <div class="BoxFloat" >
                            <select id="cargo" name="cargo">
                                <option hidden value=""  >Cargo</option>
                                <option value="M">Empty</option>
                                <option value="F">Empty</option>
                                <option value="F">Empty</option>
                                <option value="F">Empty</option>
                            </select>
                        </div>
            
                        <!-- Grupo: Fecha_Ingreso -->
                        <div class="formulario__grupo" id="fec_ingreso">
                            <div class="formulario__grupo-input">
                                <input type="date" class="formulario__input" name="fec_ingreso" id="fec_ingreso" placeholder="Fecha de ingreso">
                                <label for="apellido" class="formulario__label">Fecha de ingreso</label>

                            </div>
                        </div>
            
                    </div>
                    
                    <div></div>
                    <div class="submit">
                        <div>
                        
                    
                        <button class="bttn" type="submit" name="Agregar"><b>Agregar</b></button>
                        <button class="bttn" type="button" id="close2" name="cerrar"><b>Cerrar</b></button>

                    
                        </div>
                    </div>
                </form>
    </div>
</div>
<script src="js/ajax.js"></script>
<?php
    require("layouts/footer.html");
?>