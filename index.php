<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema Web</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg bg-primary">
          <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">SISTEMA WEB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="#">Cadastrar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true">Consulta</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <br>
        <h3 class="text-start">Cadastrar - Agendamento de Potenciais Clientes</h3>
      </div>
    </div>
    <div class="text-start">
      <p>Sistema Utilizado para agendamento de serviços</p>
      <form>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nome</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite o seu nome">
          <br>
          <label for="exampleFormControlInput1" class="form-label">Telefone</label>
          <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Digite o seu número de telefone">
          <br>
          <label for="exampleFormControlInput1" class="form-label">Origem</label>
          <select class="form-select" aria-label="Default select example">
            <option selected>Selecione uma opção</option>
            <option value="celular">Celular</option>
            <option value="computador">Computador</option>
          </select>
          <br>
          <label for="exampleFormControlInput1" class="form-label">Data de Contato</label>
          <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Digite a data de contato">
          <br>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Observação</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Cadastrar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

</html>