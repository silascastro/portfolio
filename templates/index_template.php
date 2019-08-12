<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/reset.css">
    <title>Silas Castro</title>
    <script src="../js/index.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.10.1/js/all.js" data-auto-replace-svg></script>
</head>
<body>
    <header id="header">
        <nav id="menu">
            <ul>
                <li><a href="#">Home</a></li>            
                <li><a href="#">Portifólio</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="#">Sobre</a></li>
            </ul>
        </nav>
	
    </header>
    <section id="inner"> 
	    <div id="container">
          <h1>Silas Castro</h1>
          <h2>Eu sou Desenvolvedor</h2>
          <p>
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere ipsa necessitatibus voluptate. Dolores sed neque, accusantium iusto inventore harum quibusdam, aspernatur, ullam vero ea eos ipsam tenetur dolore qui voluptatibus!
          </p>
       </div> 
   </section>
   <section id="about">
       <div id="aboutTitle">
        <h1>ABOUT ME</h1>
        <span id="span"></span>
       </div>
       <div id="aboutText">
        <p>Olá meu nome é Silas Castro. Trabalho há um ano e meio como <strong style="font-weight: 700">Desenvolvedor Full stack</strong>. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever 
        </p>
       </div>
       <div id="habilities">
           <div class="myHabilities">
            <i class="fab fa-android" style="color: green;width:50px;"></i>
            <p>Desenvolvimento mobile</p>
           </div>
           <div class="myHabilities">
            <i class="fas fa-laptop-code" style="color: blue; width:50px;"></i>
            <p>Desenvolvimento web</p>
            <br>
           </div>
       </div>
       
       <div id="formSite">
        <div id="formTitle">
            <h1>CONTACT ME</h1>
            <span id="span"></span>
        </div>
        <div id="formText"> 
         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
        </div>
        <div id="formulario">
            <form method="POST">
                <label>Nome</label>
                <input type="text" name="name" id="name" placeholder="Digite o seu nome" value="<?php echo $dados['name'];?>"/>
                <?php if($tem_erros):?>
                    <?php if($erros_validacao['name']!=''):?>
                        <span style="color: red;"><?php echo $erros_validacao['name']; ?></span>
                        <br>
                    <?php endif;?>
                <?php endif;?>
                <label>Email</label>
                <input type="email" name="email" id="email" placeholder="Digite o seu email" value="<?php echo $dados['email']; ?>"/>
                <?php if($tem_erros):?>
                    <?php if($erros_validacao['email']!=''):?>
                        <span style="color: red;"><?php echo $erros_validacao['email']; ?></span>
                        <br>
                    <?php endif;?>
                <?php endif;?>
                <label>Texto</label>
                <textarea name="text" id="text" cols="30" rows="10" placeholder="Digite o seu texto"><?php echo $dados['text'];?></textarea>
                <?php if($tem_erros):?>
                    <?php if($erros_validacao['text']!=''):?>
                        <span style="color: red;"><?php echo $erros_validacao['text']; ?></span>
                        <br>
                    <?php endif;?>
                <?php endif;?>
                <input type="submit" name="enviar" value="Confirmar" id="btn">
            </form>
        </div>
       </div>
   </section>


   <footer id="footer">

    <p>© Todos os direitos reservados</p>
   </footer>

   
</body>

</html>
