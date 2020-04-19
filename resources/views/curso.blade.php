<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/home_style.css">
    <link rel="stylesheet" href="../css/professor_style.css">
    <link rel="stylesheet" href="../css/table_style.css">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <!-- NavBar-Menu-->
<nav class="navbar navbar-expand-lg navbar-dark" id="menus">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" >
      <li class="nav-item active">
        <a class="nav-link" href="/home" id="links">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/estudante" id="links">Estudante</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="/curso" id="links">Curso</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="/professor" id="links">Professor</a>
      </li>
    </ul>
  </div>
</nav>
<!-- Formulario  -->


           <a href ="/curso/add" class="btn btn-lg btn-primary">Crie Novo Curso</a>
         
           <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Duração</th>
      <th scope="col">Número de Disciplinas</th>
      <th scope="col">Preço</th>
      <th scope="col">Acção</th>
    </tr>
  </thead>
  <tbody>
    @foreach($curso as $curs)
        <tr>
            <td>{{$curs->id}}</td>
            <td>{{$curs->nome}}</td>
            <td>{{$curs->duracao}}</td>
            <td>{{$curs->numero_de_disciplinas}}</td>
            <td>{{$curs->preco}}</td>
            <td><a href="{{ route('curso.show',$curs->id) }}" class="btn btn-sm btn-success"><i class="far fa-eye"></i></a>
            <a href="{{ route('curso.edit',$curs->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></a>
            <a href="{{ route('curso.destroy', $curs->id)}}" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></a></td>
        </tr>
    @endforeach
  </tbody>
</table>




    <!-- Rodape -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-bottom" id="menus">
          <h6 id="header1">&copy; Team Fire | 2020 </h6>

</nav>
      
      </body>
      </html>
</body>
</html>