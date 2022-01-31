<?php
 include('includes/topo.php');
 include('includes/navbar1.php');
?>
<br><br>
<!-- TXT -->
<div class="container">
	<hr style="border-color:#a0a0a0;">
	<div class="row">
		<div class="col-md-12 col-sm-12 ">
			<center>
				<label class="h1 text-light" style="font-size: 60px; font-family: TimesNewRoman">Olá, eu sou Douglas Toffetti</label>
			</center><br>

			<center>
			<label class="h6" style="font-size: 25px; font-family: arial; color: gray">Designer gráfico e desenvolvedor, moro em São Paulo.</label>
			</center>

			<center>
			<label class="h6" style="font-size: 20px; font-family: arial; color: gray;">Bem-vindo ao meu portfólio online!</label>
			</center>

		</div>
	</div>
</div>
<!-- TXT -->

<br><br><br>

<!-- IMAGENS -->
<div class="container">

	<div class="row">

		<div class="col-md-4 col-sm-12">
			<button type="button" data-toggle="modal" data-target="#modal1">
			<img src="img/consorcio.jpg" style="width: 100%; height: 100%;">
			</button>
		</div>

		<div class="col-md-4 col-sm-12">
			<button type="button" data-toggle="modal" data-target="#modal2">
			<img src="img/saude1.jpg" style="width: 100%; height: 100%;">
			</button>
		</div>

		<div class="col-md-4 col-sm-12">
			<button type="button" data-toggle="modal" data-target="#modal3">
			<img src="img/banner_edit.jpg" style="width: 100%; height: 100%;">
			</button>
		</div>

	</div>
	<br>
	<div class="row">
		
		<div class="col-md-4 col-sm-12">
			<button type="button" data-toggle="modal" data-target="#modal4">
			<img src="img/covid.jpg" style="width: 50%; height: 50%;">
			</button>
		</div>

		<div class="col-md-4 col-sm-12">
			<button type="button" data-toggle="modal" data-target="#modal5">
			<img src="img/pub.jpg" style="width: 100%; height: 100%;">
			</button>
		</div>

		<div class="col-md-4 col-sm-12">
			<button type="button" data-toggle="modal" data-target="#modal6">
			<img src="img/RESIDENCIA.jpg" style="width: 100%; height: 100%;">
			</button>
			<br><br>
			<button type="button" data-toggle="modal" data-target="#modal7">
			<img src="img/bannersobre.jpg" style="width: 100%; height: 100%;">
			</button>
		</div>

	</div>

</div>
<!-- IMAGENS -->

<br><br>

<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<center>
			<p class="text-light" style="font-size: 50px; font-family: TimesNewRoman">Você procura por um designer</p> 
			<p class="text-light" style="font-size: 50px; font-family: TimesNewRoman">gráfico experiente?</p>
			</center>
			<br>

			<center>
				<a href="contato.php">
					<button class="btn btn-outline-light" style="height: 70px; width: 200px;">Contate-me!</button>
				</a>
			</center>

		</div>
	</div>
</div>

<?php
   include('includes/modal.php');
   include('includes/footer.php');
?>