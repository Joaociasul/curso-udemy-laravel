{{-- <!DOCTYPE html>
<html lang="pt-BR">   
    <head>
        <title>Primeira Página</title>
        <meta charset="utf-8">
        <style>
            body {
                background: #f0f0f0;
                font: Arial, Sans-serif;
            }
        </style>
        <script>
            function escreverNome(){
                nome.innerHTML= "João Carlos"
                teste.innerHTML = "teste"
                teste.style.color = "red";
            }
            window.onload = escreverNome;
        </script>
    </head>
    <body>
        <p id="nome"></p>
        <h1 id="teste"></h1>        
    </body>
</html> --}}
{{-- 

<!DOCTYPE html>
<html lang="pt-BR">   
    <head>
        <title>Primeira Página</title>
        <meta charset="utf-8">
        <meta name="author"             content="João Carlos Royer">
        <meta name="generator"          content="vs code">
        <meta name="Keywords"           content="fazer o que da vida">
        <meta name="description"        content="primeira pagina html">
        <meta name="application-name"   content="Teste">
        <meta http-equiv="refresh"      content="0.8">

        <script>
            function sorteioNumero() {
                resultado.innerHTML = parseInt(Math.random() * 50);
            }
            window.onload = sorteioNumero
        </script>

    </head>
    <body>
        <p id="resultado"></p>
            
    </body>
</html> --}}

{{-- <!DOCTYPE html>
<html lang="pt-BR">   
    <head>
        <title>Primeira Página</title>
        <meta charset="utf-8">
        <meta http-equiv="refresh"      content="0.8"> 
        <style>
            .img-teste {
                float: left; 
                margin-right: 15px;
                border: 3px solid #000;
                border-radius: 15px;
                margin-bottom: 10px;
                width: 600px;

            }
            .texto {
                
                margin-left: 615px;
                padding-left: 10px;
                background: #f0f0f0;
                /* background: green; */
                font-size: 20px; 
                font-family: Arial, Helvetica, sans-serif;
                text-align: justify;
            }
            .texto p {
                
                max-width: 98%;
            }
        </style>
    </head>
    <body>
       <img src="{{asset('img/teste.jpg')}}"
       title="imagem de teste"
       alt="imagem de teste"
       class="img-teste"
       >  
       <div class="texto">
        <p>
            Lorem Ipsum is simply dummy text of the printing
            and typesetting industry. Lorem Ipsum has
            been the industry's standard dummy text ever
            since the 1500s, when an unknown printer took a
            galley of type and scrambled it to make a type 
            specimen book. It has survived not only five centuries, 
            but also the leap into electronic typesetting, remaining 
            essentially unchanged. It was popularised in the 
            1960s with the release of Letraset sheets containing 
            Lorem Ipsum passages, and more recently with 
            desktop publishing software like Aldus PageMaker 
            including versions of Lorem Ipsum.
        </p>

       </div>
      


    </body>
   
</html> --}}

{{-- <!DOCTYPE html>
<html lang="pt-BR">   
    <head>
        <title>Primeira Página</title>
        <meta charset="utf-8">
        <meta name="author"             content="João Carlos Royer">
        

        

    </head>
    <body>
     
            
    </body>
</html> --}}


<!DOCTYPE html>
<html lang="pt-BR">   
    <head>
        <title>Royer Soluções</title>
        <meta charset="utf-8">
        <meta name="author"             content="João Carlos Royer">
        {{-- <meta http-equiv="refresh"      content="0.8"> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            *{
                padding: 0;
                margin: 0;
            }
            .menu-j {
                /* background: #181717 !important;
                 */
                background: rgb(33 37 41);
                height: 100vh !important;
                position: fixed;
                /* float: left; */
                width: 220px !important;
                /* margin:10px; */
            }
            .menu-j .ul-j {
                /* background: #181717 !important; */
                background: rgb(33 37 41);
                width: 100% !important;
                align-items: center !important;
                margin: 55px 0px 0px 0px  !important;
                height: 90vh  !important;
            }
            .menu-j .ul-j .a-j .li-j {
                height: 15px !important;
                color: rgb(254, 255, 255) !important;
                font-weight: 600 !important;
                position: relative !important;
                top:0 !important;
                font-size: 20px !important;              
                padding-top: 15px !important;
                padding-bottom: 40px !important;
                padding-top: 15px !important;
                margin: 0px 5px 5px -25px !important;
                /* background: #2c2b2b !important; */
                background:  rgb(44 48 52);
                list-style-type: none !important; 
 

            }
            .menu-j .ul-j .a-j .li-j:hover {
                background: #252525 !important;
            }
            .menu-j .ul-j .a-j {
                text-decoration: none !important;
            }
            .header{
                /* background: #181717; */
                background: rgb(33 37 41);
                width: calc(100vw - 220px);
                height: 55px;
                align-items: center;
                color: white;
                z-index: 999;
                margin:auto;
                position: fixed;
                margin-left: 220px;
            }
            .header .conteudo {
                position: fixed;
                margin-left: 10px; 
                font-size: 18px;
                margin-top: 18px;
                
                background: rgb(33 37 41);
                width: calc(100vw - 230px);
                height: auto;

            }
            .conteudo-container {
                width: calc(100vw - 220px);
                height: calc(100vh - 45px);
                /* background: rgb(48, 47, 47); */
                background:  rgb(44 48 52);
                position: fixed;
                margin: 50px 0px 0px 220px;
                z-index: 999;
                overflow-x: auto;
            }

            .empresa {
                position: fixed;
                margin: 0px;
                width: 220px;
                height: 50px;
                color: #f1f1f1;
                z-index: 999;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                font-size: 22px;
                font-weight: 600;
            }
            .empresa .titulo {
                margin-top: 12px;
                margin-left: 5px;
            }
            .conteudo-container .titulo {
                /* background: red; */
                height: 40px;
                text-align: center;
                font-size: 25px;
                margin-top: 15px;
                font-weight: 800;
                color: #f1f1f1;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
            }
            .conteudo-container .acoes {
                /* background: red; */
                height: 50px;
            }
            .conteudo-container .acoes button {
                height: 40px ;
                width: 100px;
                font-weight: 600;
                border-radius: 5px;
                margin-left: 10px;
                background: #1d1c1c;
                color: #f1f1f1;
                font-size: 20px;
                margin-right: 20px;
                border: 2px solid #1b1a1a;
            }
            button:hover{
                cursor: pointer;
                background: #141414 !important;
            }
            .conteudo-container .listagem {
                background: rgb(73, 70, 70);
                margin-left: 10px;
                border-radius: 7px;
                /* width: 100vw; */
                height: calc(100vh - 165px);
                /* min-width: 1200px; */
                overflow-x: auto;

                margin-right: 10px;
            }
            .listagem .list {
                background: red !important;
                /* width: 1200px; */
                min-width: 1000px;
            }
            .preto{
                background: #000 !important;
            }

            
        </style>
    </head>
    <body>
        <div class="empresa">
            <div class="titulo">
                Royer Soluções
            </div>
           
        </div>
        <div class="menu-j bg-dark">
            <ul class="ul-j">
                <a class="a-j" href="site.index"><li class="li-j">Home</li></a>
                <a class="a-j" href="site.index"><li class="li-j">Clientes</li></a>
                <a class="a-j" href="site.index"><li class="li-j">Fornecedores</li></a>
                <a class="a-j" href="site.index"><li class="li-j">Produtos</li></a>
                <a class="a-j" href="site.index"><li class="li-j">Serviços</li></a>
            </ul>
        </div>

        <div class="header">
            <div class="conteudo">
                Clientes 
            </div>            
        </div>
        <div class="conteudo-container">
            <div class="titulo">
                Clientes
            </div>
            <div class="acoes">
                <button>
                    Novo
                </button>               
            </div>
            <div class="listagem">
                <div class="list">
                    <table class="table table-dark table-striped">
                        <thead class="preto">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= 50; $i++)
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
                            @endfor
                        </tbody>
                      </table>
                </div>
            </div>
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>