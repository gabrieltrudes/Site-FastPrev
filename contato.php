<!DOCTYPE html>
<html>

    <head>
		<meta charset="UTF-8">
		<!-- Título -->
		<title>FastPrev - Arquitetura & Engenharia</title>
		<!-- Ícone -->
		<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon"/>
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins|Raleway|Roboto&display=swap" rel="stylesheet">
		<!-- Ícones -->
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<!-- Bootstrap 4 -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<!-- Normalize -->
		<link rel="stylesheet" href="css/normalize.css">
		<!-- Styles -->
		<link rel="stylesheet" href="css/style.css">

	</head>
	
		<body>

		<header>

			<!-- Top-bar -->

				<div class="container-fluid topbar sticky-top">
				<div class="row">
					<div class="col tb-fonte">
					<p><a href="https://api.whatsapp.com/send?phone=5513974106538">
						<svg class="bi bi-chat-dots-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 01-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 11-2 0 1 1 0 012 0zm4 0a1 1 0 11-2 0 1 1 0 012 0zm3 1a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
					</svg> Clique aqui para contato via WhatsApp!</a></p>
					</div>
					<div class="col-md-auto tb-fonte">
					<p><a href="mailto:fastprev@hotmail.com">
						<svg class="bi bi-envelope-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path d="M.05 3.555L8 8.414l7.95-4.859A2 2 0 0014 2H2A2 2 0 00.05 3.555zM16 4.697l-5.875 3.59L16 11.743V4.697zm-.168 8.108L9.157 8.879 8 9.586l-1.157-.707-6.675 3.926A2 2 0 002 14h12a2 2 0 001.832-1.195zM0 11.743l5.875-3.456L0 4.697v7.046z"/>
					</svg> fastprev@hotmail.com</a></p>
					</div>
					<div class="col col-lg-2 tb-fonte">
					<p><a href="#">
						<svg class="bi bi-geo-alt" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 002 6c0 4.314 6 10 6 10zm0-7a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
					</svg> São Vicente, SP</a></p>
					</div>
				</div>
				</div>

			<!-- Navbar -->
			
			<nav class="navbar navbar-expand-lg navbar-light">

				<a class="navbar-brand" href="index.html">
					<img src="/img/logo.png" class="img-responsive" alt="logo">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
					<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link nav-fonte" href="index.html">Início<span class="sr-only">(current)</span></a>
					</li>

					<li class="nav-item">
						<a class="nav-link nav-fonte" href="quem somos.html">Quem somos</a>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link nav-fonte dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Nossos serviços
						</a>
					
					<!-- Dropdown Menu -->
					
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item nav-fonte" href="servicos-1-projetos.html">projetos</a>
						<div class="dropdown-divider"></div>

							<a class="dropdown-item nav-fonte" href="servicos-2-laudos.html">laudos</a>
						<div class="dropdown-divider"></div>

							<a class="dropdown-item nav-fonte" href="servicos-3-documentacoes.html">documentações</a>
						<div class="dropdown-divider"></div>

							<a class="dropdown-item nav-fonte" href="servicos-4-treinamentos.html">treinamentos</a>
						<div class="dropdown-divider"></div>

							<a class="dropdown-item nav-fonte" href="servicos-5-estudos.html">estudos</a>

						</div>
						</li>

						<li class="nav-item">
							<a class="nav-link nav-fonte" href="../fastprev/formulario/contato.php">Contato</a>
						</li>

					</ul>
				</div>
				</nav>

		</header>

		<!-- Formulário -->

			<div class="container">

				<h1 class="display-4 pt-3 fonte-h1">Entre em contato conosco!</h1>
				<small class="text-muted">Você pode enviar seu pedido de orçamento ou tirar sua dúvidas através do formulário de contato, telefone ou whatsapp.</small>
				<hr>

					<form method="POST" action="processa.php">
						<div class="form-group">
							<label for="validationServer01">Nome Completo</label>
							<input class="form-control" type="text" name="nome" placeholder="Insira seu nome completo">
						</div>	

						<div class="form-group">
							<label for="exampleFormControlInput1">E-mail</label>
							<input class="form-control" type="email" id="exampleFormControlInput1" name="emailenviado" placeholder="Insira seu e-mail">
						</div>

						<div class="form-group">
							<label for="exampleFormControlTextarea1">Mensagem</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" name="mensagem" rows="3" placeholder="Digite sua mensagem"></textarea>
						</div>
						
						<input type="submit" value="Enviar"><br>
					</div>
				</form>
			

			<!-- Endereços de Contato -->

				<!-- <div class="row">

					<div class="col">
						<h2>Telefones:</h2>
							<p>WhatsApp: </p>
							<a href="https://api.whatsapp.com/send?phone=5513974106538">13 97410-6538</a>
					</div>
					<hr>
					<div class="col">
						<h2>E-mail:</h2>
							<p><a href="mailto:fastprev@hotmail.com">fastprev@hotmail.com</a></p>
					</div>

				</div> -->




			<!-- Rodapé -->

					<footer class="p-3 text-center rodape">
                      
                      <div class="row justify-content-center">
                            <a href="https://www.facebook.com/pages/category/Company/Fastprev-Consultoria-e-Assessoria-1391432994479460/"><i class="fab fa-facebook icones" id="facebook"></a></i>
                            <a href="https://www.instagram.com/fastprev/"><i class="fab fa-instagram icones" id="instagram"></i></a>
                      </div>
                          <p class="text-light text-center">REDES SOCIAIS</p>
                        <hr>
                          <p class="text-light text-center">Copyright © 2020 FastPrev - Todos os Direitos Reservados</p>
                        <hr>
						  <p class="text-light text-center">Desenvolvido por <a class="tf-fonte" href="mailto:gabrieltrudes@hotmail.com">Gabriel Trudes</a></p>
						
                    
					</footer>
					


			<!-- Scripts -->
				
				<!-- Scripts FontAwesome -->
				<script src="https://kit.fontawesome.com/2b3d0aec19.js" crossorigin="anonymous"></script>
				<!-- Scripts Bootstrap 4 -->
				<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
				<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		
</body>

</html>