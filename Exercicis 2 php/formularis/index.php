<!doctype html>
<!--[if lt IE 7]>	   <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>		   <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>		   <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Formularis PHP</title>
		<meta name="description" content="Exercicis de formularis amb PHP">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

		<link rel="stylesheet" href="css/main.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>

    <?php
        function es($exercici = ""){
            if (isset($_POST['exercici'])){
                if( $_POST['exercici'] == $exercici) return 1;
                }
                return 0;
        }

        function p($postId){
            if(!isset($_POST[$postId])) return "";

            return $_POST[$postId];
    }?>


		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="page-header">
							<h1>Formularis PHP <small>completa els exercicis</small></h1>
						</div>
					</div>
				</div>
			</div>	
		</header>
		<div id="body">
			<div class="container">
				
				<!-- exercici -->
				<div class="row" id="e1">
					<div class="col-xs-12">
						<div class="panel panel-default">
							
							<div class="panel-heading panel-buttons">
								<button type="button" class="pull-right btn btn-xs btn-primary" data-toggle="modal" data-target="#modelE1">Veure exemple</button>
								<h3 class="panel-title">Exercici #1</h3>
							</div>
							
							<div class="panel-body">
								
								<form class="form-horizontal" method="post" action="#e1">
									
									<input type="hidden" name="exercici" id="exercici" value="e1">

                                    <?php
                                    $success = false;
                                    $error = false;
                                    $warning = false;
                                    $username = p("username");
                                    $password = p("password");

                                    if(empty(!$password) && empty(!$username))
                                        $success =true;

                                    if(empty($password)){

                                    }
                                    if(empty($password) || empty($username))
                                        if(empty($password) && empty($username))
                                            $error = true;
                                        else
                                        $warning = true;
                                    ?>

                                    <?php if($success){?>
                                    <!-- alerta ok -->
                                    <div class="alert alert-success" role="alert">
                                        Dades correctes
                                    </div>
                                    <!-- alerta ok -->
                                    <?php }?>
                                    <?php if($warning) {?>
                                    <!-- alerta warning -->
                                    <div class="alert alert-warning" role="alert">
                                        Nom d'usuari o contrassenya incorrectes
                                    </div>
                                    <!-- alerta warning -->
                                    <?php }?>
                                    <?php if($error) {?>
                                    <!-- alerta error -->
                                    <div class="alert alert-danger" role="alert">
                                        <ul>
                                            <li>Falta nom usuari</li>
                                            <li>Falta contrassenya usuari</li>
                                        </ul>
                                    </div>
                                    <!-- alerta error -->
                                    <?php }?>
                                    <!-- input text -->
                                    <div class="form-group">
                                        <label for="inputText" class="col-xs-3 control-label">Usuari</label>
                                        <div class="col-xs-7">
                                            <input type="text" class="form-control" id="inputText" name="username" placeholder="user">
                                        </div>
                                    </div>
                                    <!-- input text -->

                                    <!-- input password -->
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-xs-3 control-label">Password</label>
                                        <div class="col-xs-7">
                                            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="password">
                                        </div>
                                    </div>
                                    <!-- input password -->

                                    <!-- button submit -->
                                    <div class="form-group">
                                        <div class="col-xs-offset-3 col-xs-7">
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </div>
                                    </div>
                                    <!-- button submit -->



                                </form>

							</div>
							<div class="panel-footer">
								
								<p>
									Crea un formulari com el de l'exemple. El formulari està format dels seüents camps d'entrada:
								</p>
								<ul>
									<li><code>input</code> de <code>text</code> per especificar el nom d'usuari</li>
									<li><code>input</code> tipus <code>password</code> per especificar la contrasenya.</li>
								</ul>
								<p>
									El formulari ha de revisar que ens han passat el nom d'usuari i la contrasenya. Si no és així s'han de marcar els camps que falten en vermell amb la classe <code>has-error</code> (mirar plantilla). <br />
									En cas de passar les dades, hem de verificar que sigui l'usauri <strong>root</strong> i la contrasenya <strong>root</strong>. <br> 
									Si les dades són correctes ha des sortir una alerta en verd (mirar plantilla), sinó ha de sortir una alerta en vermell indicant que ens hem equivocat de dades.
								</p>

							</div>
						</div>
					</div>
				</div>
				<!-- fi exercici -->

				<!-- exercici -->
				<div class="row" id="e2">
					<div class="col-xs-12">
						<div class="panel panel-default">
							
							<div class="panel-heading panel-buttons">
								<button type="button" class="pull-right btn btn-xs btn-primary" data-toggle="modal" data-target="#modelE2">Veure exemple</button>
								<h3 class="panel-title">Exercici #2</h3>
							</div>
							
							<div class="panel-body">
								
								<form class="form-horizontal" method="post" action="#e2">
                                <input type="hidden" name="exercici" value="e2">
                                    <?php
                                        $text="";
                                        $search="";
                                        $textError="";
                                        $searchError="";

                                    if(es("e2")) {
                                        $search = p("search");
                                        $text = p("text");
                                        if(!$search) {
                                            $searchError = "has-error";
                                        }
                                        if(!$text) $textError="has-error";
                                    }
                                    if($text || $search){
                                        $text=str_replace($search,"<strong>".$search."</strong>",$text);
                                    }

                                    ?>

                                    <?php if(!empty($text)){?>
                                    <p class="well">
                                        <?php echo $text ?>
                                    </p>
                                    <?php }?>


                                    <!-- input text -->
                                    <div class="form-group <?php echo $searchError ?>">
                                        <label for="inputText" class="col-xs-3 control-label">Cerca</label>
                                        <div class="col-xs-7">
                                            <input type="text" class="form-control" id="inputText" name="search" placeholder="Escriu paraula a cercar" value="<?php echo $search?>">
                                        </div>
                                    </div>
                                    <!-- input text -->

                                    <!-- input textarea -->
                                    <div class="form-group <?php echo $textError ?>">
                                        <label for="inputTextarea" class="col-xs-3 control-label">Text</label>
                                        <div class="col-xs-7">
                                            <textarea class="form-control" id="inputTextarea" name="text" rows="10">Crea un formulari per poder configurar la teva comanda al PizzaTeknos. Comença demanat el tipus. Un cop seleccionat el formulari ha de deixar seleccionar la mida. Així succesivament pels 4 conceptes (tipus, mida, base i beguda). Un cop tots els conceptes seleccionats, ens ha d'apareixer un missatge indicant el preu total de la comanda.</textarea>
                                        </div>
                                    </div>
                                    <!-- input textarea -->

                                    <!-- button submit -->
                                    <div class="form-group">
                                        <div class="col-xs-offset-3 col-xs-7">
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </div>
                                    </div>
                                    <!-- button submit -->

                                </form>

							</div>
							<div class="panel-footer">
								
								<p>
									Crea un formulari com el de l'exemple. El formulari està format dels seüents camps d'entrada:
								</p>
								<ul>
									<li><code>input</code> per especificar la paraula a cercar</li>
									<li><code>textarea</code> per escriure el text on cercar la paraula</li>
								</ul>
								<p>
									El formulari ha de verificar que s'han enviat els dos camps. Si no és així, els ha de marcar en vermell amnb la classe <code>has-error</code> (mirar plantilla).
									Si s'han enviat els dos camps, s'ha de substituir la paraula a cercar dins del text per ella mateixa en negreta, és a dir; en cas de buscar la paraula "web" dins el text "<code>pàgina web d'internet</code>". 
									s'ha de retornar "<code>pàgina &lt;strong&gt;web&lt;/strong&gt; d'internet</code>".
								</p>

							</div>
						</div>
					</div>
				</div>
				<!-- fi exercici -->

				<!-- exercici -->
				<div class="row" id="e3">
					<div class="col-xs-12">
						<div class="panel panel-default">
							
							<div class="panel-heading panel-buttons">
								<button type="button" class="pull-right btn btn-xs btn-primary" data-toggle="modal" data-target="#modelE3">Veure exemple</button>
								<h3 class="panel-title">Exercici #3</h3>
							</div>
							
							<div class="panel-body">
								
								<form class="form-horizontal" method="post" action="#e3">
                                <input type="hidden" name="exercici" value="e3">

                                    <div class="form-group">
                                        <label for="inputSelect" class="col-xs-3 control-label">Color</label>
                                        <div class="col-xs-7">
                                            <select class="form-control" id="inputSelect" name="inputSelect">
                                                <option value="sc">Sense color</option>
                                                <option value="verm">Vermell</option>
                                                <option value="verd">Verd</option>
                                                <option value="bl">Blau</option>
                                                <option value="gr">Groc</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- input checkbox -->
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Estil</label>
                                        <div class="col-xs-7">
                                            <div class="checkbox">
                                                <label for="inputCheckbox1">
                                                    <input id="inputCheckbox1" name="negreta" type="checkbox" checked="checked">
                                                    Text en negreta
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="inputCheckbox2">
                                                    <input id="inputCheckbox2" name="cursiva" type="checkbox">
                                                    Text encursiva
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- input checkbox -->
                                    <!-- input radio -->
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Subratllat</label>
                                        <div class="col-xs-7">
                                            <div class="radio">
                                                <label for="inputRadio1">
                                                    <input id="inputRadio1" name="inputRadio" type="radio" value="irb1" checked="">
                                                   No
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="inputRadio2">
                                                    <input id="inputRadio2" name="inputRadio" type="radio" value="irb2">
                                                    Sí
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- input radio -->


                                </form>

							</div>
							<div class="panel-footer">
								
								<p>
									Crea un formulari com el de l'exemple. Aquest ha de permetre estilitzar el paràgraf de text. EL formulari està format dels seüents camps d'entrada: <br />
								</p>
								<ul>
									<li><code>Select</code> de color, amb les opcions: sense color, vermell, verd, blau, i groc.</li>
									<li>Dos <code>Checkbox</code> per l'estil: un per text en negreta i un altre per text en cursiva.</li>
									<li>Un consunt de botons <code>radio</code> per definir si volem el text subratllat o no (per defecte no.</li>
								</ul>
								<p>
									Per tal de simplificar el procés, s'han creat uns estils css que apliquen els diferents formats. <br />
									Mireu l'arxiu <code>css/main.css</code> per a més informació.
								</p>
							</div>
						</div>
					</div>
				</div>
				<!-- fi exercici -->

				<!-- exercici -->
				<div class="row" id="e4">
					<div class="col-xs-12">
						<div class="panel panel-default">

							<div class="panel-heading panel-buttons">
								<!--								<button type="button" class="pull-right btn btn-xs btn-primary" data-toggle="modal" data-target="#modelE4">Veure exemple</button>-->
								<h3 class="panel-title">Exercici #4</h3>
							</div>

							<div class="panel-body">
								<?php
								$typePrize = [
										'F' => 5,
										'B' => 8,
										'I' => 12,
										'V' => 6
								];

								$sizePrize = [
										'S' => 1,
										'M' => 2,
										'L' => 3,
										'F' => 4,
								];

								$basePrize = [
										'C' => 2,
										'S' => 1,
										'D' => 1,
										'Z' => 5
								];

								$drinkPrize = [
										'W' => 1,
										'C' => 2,
								];

								?>


								<form class="form-horizontal" method="post" action="#e4">

									<input type="hidden" name="exercici" id="exercici" value="e4">




								</form>

							</div>
							<div class="panel-footer">

								<p>
									Crea un formulari per poder configurar la teva comanda al PizzaTeknos. Comença demanat el tipus. Un cop seleccionat el formulari ha de deixar seleccionar la mida. Així succesivament pels 4 conceptes (tipus, mida, base i beguda).
									Un cop tots els conceptes seleccionats, ens ha d'apareixer un missatge indicant el preu total de la comanda.
								</p>
							</div>
						</div>
					</div>
				</div>
				<!-- fi exercici -->
				
				<div class="row">
					<div class="col-xs-12">
						<hr />
						<br />
					</div>
				</div>

				<!-- ---------------------------------------- -->
				<!-- ----------   codi plantilla   ---------- -->
				<!-- ---------------------------------------- -->

				<div class="row" id="plantilla">
					<div class="col-xs-12">
						
						<div class="panel panel-default">
							
							<div class="panel-heading">
								<h3 class="panel-title">Plantilla amb codi d'exemple</h3>
							</div>
							
							<div class="panel-body">
								
								<p class="well">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
								</p>
								<!-- alerta ok -->
								<div class="alert alert-success" role="alert">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								</div>
								<!-- alerta ok -->
								
								<!-- alerta info -->
								<div class="alert alert-info" role="alert">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								</div>
								<!-- alerta info -->
								
								<!-- alerta warning -->
								<div class="alert alert-warning" role="alert">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								</div>
								<!-- alerta warning -->
								
								<!-- alerta error -->
								<div class="alert alert-danger" role="alert">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								</div>
								<!-- alerta error -->

								<form class="form-horizontal" method="post" action="#plantilla">
									
									<!-- input hidden -->
									<input type="hidden" name="inputHidden" id="inputHidden" value="secret">
									<!-- input hidden -->

									<!-- input text -->
									<div class="form-group">
										<label for="inputText" class="col-xs-3 control-label">Text</label>
										<div class="col-xs-7">
											<input type="text" class="form-control" id="inputText" name="inputText" placeholder="...">
										</div>
									</div>
									<!-- input text -->
									
									<!-- input password -->
									<div class="form-group">
										<label for="inputPassword" class="col-xs-3 control-label">Password</label>
										<div class="col-xs-7">
											<input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="...">
										</div>
									</div>
									<!-- input password -->
									
									<!-- input textarea -->
									<div class="form-group">
										<label for="inputTextarea" class="col-xs-3 control-label">Textarea</label>
										<div class="col-xs-7">
											<textarea class="form-control" id="inputTextarea" name="inputTextarea" rows="3"></textarea>
										</div>
									</div>
									<!-- input textarea -->
									
									<!-- input select -->
									<div class="form-group">
										<label for="inputSelect" class="col-xs-3 control-label">Select</label>
										<div class="col-xs-7">
											<select class="form-control" id="inputSelect" name="inputSelect">
												<option value="1">Un</option>
												<option value="2">Dos</option>
												<option value="3">Tres</option>
												<option value="4">Quatre</option>
												<option value="5">Cinc</option>
											</select>
										</div>
									</div>
									<!-- input select -->

									<!-- input checkbox -->
									<div class="form-group">
										<label class="col-xs-3 control-label">Checkbox</label>
										<div class="col-xs-7">
											<div class="checkbox">
												<label for="inputCheckbox1">
													<input id="inputCheckbox1" name="inputCheckbox1" type="checkbox" checked="checked">
													checkbox 1
												</label>
											</div>
											<div class="checkbox">
												<label for="inputCheckbox2">
													<input id="inputCheckbox2" name="inputCheckbox2" type="checkbox">
													checkbox 2
												</label>
											</div>
										</div>
									</div>
									<!-- input checkbox -->

									<!-- input radio -->
									<div class="form-group">
										<label class="col-xs-3 control-label">Radio</label>
										<div class="col-xs-7">
											<div class="radio">
												<label for="inputRadio1">
													<input id="inputRadio1" name="inputRadio" type="radio" value="irb1">
													radio 1
												</label>
											</div>
											<div class="radio">
												<label for="inputRadio2">
													<input id="inputRadio2" name="inputRadio" type="radio" value="irb2">
													radio 2
												</label>
											</div>
										</div>
									</div>
									<!-- input radio -->
									
									<!-- ---------- -->

									<!-- input text amb error -->
									<div class="form-group has-error">
										<label for="inputTextError" class="col-xs-3 control-label">Text</label>
										<div class="col-xs-7">
											<input type="text" class="form-control" id="inputTextError" name="inputTextError" placeholder="">
										</div>
									</div>
									<!-- input text amb error -->
									
									<!-- button submit -->
									<div class="form-group">
										<div class="col-xs-offset-3 col-xs-7">
											<button type="submit" class="btn btn-primary">Enviar</button>
										</div>
									</div>
									<!-- button submit -->
									
								</form>

							</div>
							<div class="panel-footer">
								
								<p>
									Copieu el codi HTML dels elements per construir els vostres formularis. 
									Si necessiteu saber quines dades s'han enviat, no us oblideu de consultar l'inspector de xarxa a les eines de desenvolupament del navegador. 
									En el chrome heu d'anar a la pestanya "Network". Un cop dins sel·leccioneu les peticions POST per tal de veure les capçaleres d'aquesta (secció Form Data).</p>

							</div>
						</div>
					</div>
				</div>

				<!-- ---------------------------------------- -->
				<!-- ---------- fi codi plantilla  ---------- -->
				<!-- ---------------------------------------- -->


			</div>
		</div>
		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<hr />
					</div>
					<div class="col-xs-4">
						<div class="text-left">
							<p>DAM – Teknos</p>
						</div>
					</div>
					<div class="col-xs-4">
						
					</div>
					<div class="col-xs-4">
						<div class="text-right">
							<p>
								Jaume Sala
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		

		<div class="modal fade" id="modelE1" tabindex="-1" role="dialog" aria-labelledby="modelE1Label" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Exemple de formulari exercici #1</h4>
					</div>
					<div class="modal-body">

						<div role="tabpanel">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#tabE1-1" aria-controls="tabE1-1" role="tab" data-toggle="tab">Inicial</a></li>
								<li role="presentation"><a href="#tabE1-2" aria-controls="tabE1-2" role="tab" data-toggle="tab">Falten dades</a></li>
								<li role="presentation"><a href="#tabE1-3" aria-controls="tabE1-3" role="tab" data-toggle="tab">Dades incorrectes</a></li>
								<li role="presentation"><a href="#tabE1-4" aria-controls="tabE1-4s" role="tab" data-toggle="tab">Dades validades</a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="tabE1-1">
									<div class="row">
										<div class="col-xs-12">
											<img class="img-responsive" src="img/e1-1.jpg" alt="">
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="tabE1-2">
									<div class="row">
										<div class="col-xs-12">
											<img class="img-responsive" src="img/e1-2.jpg" alt="">
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="tabE1-3">
									<div class="row">
										<div class="col-xs-12">
											<img class="img-responsive" src="img/e1-3.jpg" alt="">
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="tabE1-4">
									<div class="row">
										<div class="col-xs-12">
											<img class="img-responsive" src="img/e1-4.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Tancar</button>
					</div>
				</div>
			</div>
		</div>


		<div class="modal fade" id="modelE2" tabindex="-1" role="dialog" aria-labelledby="modelE2Label" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Exemple de formulari exercici #2</h4>
					</div>
					<div class="modal-body">

						<div role="tabpanel">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#tabE2-1" aria-controls="tabE2-1" role="tab" data-toggle="tab">Inicial</a></li>
								<li role="presentation"><a href="#tabE2-2" aria-controls="tabE2-2" role="tab" data-toggle="tab">Falten les dades</a></li>
								<li role="presentation"><a href="#tabE2-3" aria-controls="tabE2-3" role="tab" data-toggle="tab">Falta paraula cerca</a></li>
								<li role="presentation"><a href="#tabE2-4" aria-controls="tabE2-4" role="tab" data-toggle="tab">Text substituit</a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="tabE2-1">
									<div class="row">
										<div class="col-xs-12">
											<img class="img-responsive" src="img/e2-1.jpg" alt="">
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="tabE2-2">
									<div class="row">
										<div class="col-xs-12">
											<img class="img-responsive" src="img/e2-2.jpg" alt="">
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="tabE2-3">
									<div class="row">
										<div class="col-xs-12">
											<img class="img-responsive" src="img/e2-3.jpg" alt="">
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="tabE2-4">
									<div class="row">
										<div class="col-xs-12">
											<img class="img-responsive" src="img/e2-4.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Tancar</button>
					</div>
				</div>
			</div>
		</div>


		<div class="modal fade" id="modelE3" tabindex="-1" role="dialog" aria-labelledby="modelE3Label" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Exemple de formulari exercici #3</h4>
					</div>
					<div class="modal-body">

						<div role="tabpanel">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#tabE3-1" aria-controls="tabE3-1" role="tab" data-toggle="tab">Inicial</a></li>
								<li role="presentation"><a href="#tabE3-2" aria-controls="tabE3-2" role="tab" data-toggle="tab">Exemple de resultat</a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="tabE3-1">
									<div class="row">
										<div class="col-xs-12">
											<img class="img-responsive" src="img/e3-1.jpg" alt="">
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="tabE3-2">
									<div class="row">
										<div class="col-xs-12">
											<img class="img-responsive" src="img/e3-2.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Tancar</button>
					</div>
				</div>
			</div>
		</div>


		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

		<script src="js/main.js"></script>
	</body>
</html>
