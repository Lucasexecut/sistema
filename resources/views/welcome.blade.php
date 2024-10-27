<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 
    <style type="text/css">
    
    #tamanhodoformulario{
      width:500px; 
    }

    </style>

  </head>
 
  <body>
    
     <div class="container p-20" id="tamanhodoformulario" style="margin-top: 80px;" >
       <form action="/cadastrar_candidato" method="POST">
        @csrf
       <div class="col-md-8">
       <label for="">Nome:</label>
       <input class="form-control" placeholder="digite seu nome." name="nome_candidato">
        </div>
       <br/> <br/>
       <div class="col-md-8">
       <label for="">Sobrenome:</label>
       <input class="form-control" placeholder="digite seu sobrenome." name="sobrenome_candidato">
       </div>
       <br> <br />
       <div class="col-md-8">
       <label for="">Numero:</label>
       <input class="form-control" placeholder="digite seu numero."name="numero_candidato">
       </div>

       <br/> <br />
       <div class="col-md-8">
        <button>enviar cadastro</button>
      </div> 
       
      </div>
      
    
      
    </div>
  </div>
  </div>

    </form>
    </div>
    
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>

















