<?php
session_start();
header('Content-type: text/html; charset=utf-8');
echo \Classes\ClassLayout::setHeaderCarrinho();

if (!isset($_POST['plano']) && !isset($_SESSION['selectPlan'])) {
	header("Location: " . DIRPAGE . "#planos");
}else{
	if (!isset($_SESSION['login'])) {
		$_SESSION['selectPlan'] = $_POST['plano'];
		sleep(0.01);
		header("Location: " . DIRPAGE . "login");
	}
}



use Classes\ClassPlano;

$dPlano = new ClassPlano;
if (isset($_SESSION['selectPlan'])){
	$p = $dPlano->getPlan($_SESSION['selectPlan']);
}else{
	$_SESSION['selectPlan'] = $_POST['plano'];
	$p = $dPlano->getPlan($_SESSION['selectPlan']);
}
$discount = 0;
?>

<script type="text/javascript">
    // Material Select Initialization
    $(document).ready(function () {
        $('.mdb-select').material_select();
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

<div class="container mt-5">


	<div class="card">
		<div class="card-body">

			<!--Grid row-->
			<div class="row">

				<div class="col-lg-3 d-none d-md-none d-sm-none d-lg-block">
					<img src="<?php echo DIRIMG . 'cart.jpg' ?>" class="img-fluid">
				</div>

				<!--Grid column-->
				<div class="col-lg-9 mb-12">

					<!--Card-->
					<div class="card z-depth-0 border border-light rounded-0">

						<!--Card content-->
						<div class="card-body">
							<h4 class="mb-4 mt-1 h5 text-center font-weight-bold">Itens no Carrinho</h4>

							<hr>

							<dl class="row">
								<dd class="col-sm-8">
									<?php echo $p['titulo']; ?>
								</dd>
								<dd class="col-sm-4">
									R$ <?php echo number_format($p['preco'], 2, ",", "") ?>
								</dd>
							</dl>

							<hr>

							<form>
								<div class="form-group row">
									<input type="text" class="form-control col-sm-7" id="cupom" placeholder="Cupom de Desconto">
									<div class="col-sm-5">
										<button type="submit" class="col-sm-12 btn btn-primary mb-2">Aplicar</button>
									</div>
								</div>


							</form>

							<div class=" mt-5">
								<form method="post" action="<?php echo DIRPAGE . 'controllers/controllerAssinatura' ?>">
									<input type="hidden" name="idUsuario" value="<?php echo $_SESSION['idUser']; ?>">
									<input type="hidden" name="idPlano" value="<?php echo $p['id']; ?>">
									<input type="hidden" name="desconto" value="<?php echo $discount; ?>">
									<input type="hidden" name="valor" value="<?php echo $p['preco']; ?>">
									<input type="hidden" name="nomePlano" value="<?php echo $p['titulo']; ?>">
									<button class="btn btn-primary btn-lg btn-block">Realizar Compra</button>
								</form>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
