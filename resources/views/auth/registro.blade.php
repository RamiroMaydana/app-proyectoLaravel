<h1>Nuevo Usuario</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="/registro" method="post">
@csrf
<label for="">INGRESE NOMBRE</label>
<input type="text" name="name">
<br>

<label for="">INGRESE CORREO</label>
<input type="email" name="email">
<br>

<label for="">INGRESE CONTRASENIA</label>
<input type="password" name="password">
<br>

<label for="">REPETIR CONTRASENIA</label>
<input type="password" name="c_password">
<br>

<input type="submit" value="Registrarse">
</form>