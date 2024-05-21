
<!DOCTYPE html>
  <html lang="pt-br">
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href=""  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="UTF8">
       <!-- LINK CSS -->
      <link rel="stylesheet" href="">
      <!-- LINK JAVA -->
    <script src="https://kit.fontawesome.com/998c60ef77.js" crossorigin="anonymous"></script>
    <script src="./alljs/script.js"></script>
    <title>Cadastro de Cliente</title>
    </head>
    <body>
         <!-- LOGO -->
    <main id="container">
        <div class="img2"><img id="ceu" src="./icons/cegonha.png"></div>
        <div class="img"><img id="cegonha" src="./icons/céu.png"></div>
        <!-- FUNDO LOGIN -->
        <form id="login_form" action="cadastro_clientebd.php" method="POST">

            <!-- FORM HEADER -->
            <div id="form_header">
                <h1 style="font-size: 50px;">Cadastro</h1>
                <!--i id="mode_icon" class="luazinha"><img src="./icons/luazinha.png"></i!-->
                <!--i id="mode_icon" class="material-icons">brightness_2</i!-->
                
                <!-- ÍCONES -->
                <div class="wrapper">
            <div class="toggle">
                <input class="toggle-input" type="checkbox" id="mode_chk" />
            <div class="toggle-bg"></div>
            <div class="toggle-switch">
            <div class="toggle-switch-figure"></div>
            <div class="toggle-switch-figureAlt"></div>
            </div>  
        </div>
    </div>
      </label>
            </div>

             <!-- INPUTS -->
             <div class="nome">
                <label for="">Nome</label>
                <input type="text" name="nome" id="nome" class="validate">
             </div>

             <div class="cpf">
                <label for="">Cpf</label>
                <input type="text" name="cpf" id="cpf" class="validate">
             </div>

             <div class="data_nascimento">
                <label for="">Data de Nascimento</label>
                <input type="date" name="data_nascimento" id="data_nascimento" class="validate">
             </div>

             <div class="email">
                <label for="">Email</label>
                <input type="email" name="email" id="email">
             </div>

             <div class="senha">
                <label for="">Senha</label>
                <input type="password" name="senha" id="senha" class="validate">
             </div>

             <div class="telefone">
                <label for="">Telefone</label>
                <input type="text" name="telefone" id="telefone" class="validate">
             </div>

             <div class="bairro">
                <label for="">Bairro</label>
                <input type="text" name="bairro" id="bairro" class="validate">
             </div>

             <div class="cidade">
                <label for="">Cidade</label>
                <input type="text" name="cidade" id="cidade" class="validate">
             </div>

             <div class="rua">
                <label for="">Rua</label>
                <input type="text" name="rua" id="rua">
             </div>

             <div class="n_residencia">
                <label for="">Número da Residência</label>
                <input type="number" name="n_residencia" id="n_residencia" class="validate">
             </div>

             <div class="CEP">
                <label for="">CEP</label>
                <input type="text" name="CEP" id="CEP" class="validate">
        </div>

        <div class="sexo">
            <label for="">Masculino</label>
            <input type="radio" name="sexo" id="sexo" value="Masculino">
<p></p>
            <label for="">Femenino</label>
            <input type="radio" name="sexo" id="sexo" value="Femenino">
<p></p>
            <label for="">Outro</label>
            <input type="radio" name="sexo" id="sexo" value="Outro">
        </div>
<p></p>
        <input type="submit" value="Cadastrar">
        </form>
    </main>



      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>

  <script type="text/javascript">  
 const input = document.querySelector('#cpf1')
  input.addEventListener('keypress', ()=> {
    let inputlength = input.value.length

    console.log(inputlength)
    if(inputlength === 3 || inputlength === 7){
      input.value += '.'
    }else if(inputlength === 11){
      input.value += '-'
    }
  });
  
  const inputt = document.querySelector('#telefone1')
  inputt.addEventListener('keypress', ()=> {
    let inputlength = inputt.value.length

    console.log(inputtlength)
    if(inputlength === 3 || inputlength === 7){
      input.value += '.'
    }else if(inputlength === 11){
      input.value += '-'
    }
  });

</script>
    </body>
  </html>
        
