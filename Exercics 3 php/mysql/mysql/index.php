<?php

	/*

	Programa les accions de l'aplicació "Llista de tasques"

	Procediment:

	1. Importa la BBDD "todo_list" a partir de l'arxiu todo_list.sql
	2. Configura els paràmetres ($param) de connexió a la BBDD
	   Utilitza l'objecte $dbal per a realitzar les accions a la bbdd
		
		$table = 'tasks'

		2.1 SELECT
			$dbal->select('*', $table);

		2.2 INSERT
			$values = [
				['title', 'valor title'],
			];
			$dbal->insert($table, $values);
		
		2.3 UPDATE
			$values = [
				[ 'title', 'nou valor title' ],
			];
			$where = [
				[ 'id', 1 ]
			];
			$dbal->update($table, $values, $where);
		2.4 DELETE
			$where = [
				[ 'id', 1 ]
			];
			$dbal->delete($table, $where);

	3. Implementa les següents accions:
		
		3.1 getIndex
			Mostra la llista de tasques i el formulari de nova tasca
		
		3.2 postCreate
			Afegir dades de la nova tasca a la BBDD.
			S'ha de verificar que ens passen el títol i la descripció.
			Per defecte, una nova tasca no està completada (completed = 0)
			Un cop completada l'acció s'ha de tornar a mostrar la llista de tasques
		
		3.3 getCompleted
			Actualitza el valor del camp completat.
			Si la tasca està completada, el nou valor ha de ser 0.
			Si la tasca no està completada, el nou valor ha de ser 1
			Un cop completada l'acció s'ha de tornar a mostrar la llista de tasques
		
		3.4 getEdit
			Mostrem el formulari d'edició amb les dades actuals de la la tasca.
		
		3.5 postEdit
			Actualitzem els valors de la tasca.
			S'ha de verificar que ens passen el títol i la descripció (i la Id de la tasca a modificar).
			Un cop completada l'acció s'ha de tornar a mostrar la llista de tasques
		
		3.6 getDelete
			Eliminem la tasca. Verifiquem que ens passen l'Id de la tasca a eliminar.
			Un cop completada l'acció s'ha de tornar a mostrar la llista de tasques
	*/




	// Importem funcions i classes
	include_once "includes/helpers.php";
	include_once "includes/database.php";
	
	// Parametres de connecxió a la BBDD
	$params = [
		'host'		=> "localhost",
		'dbname'	=> "todo_list",
		'user'		=> "root",
		'pass'		=> ""
		];

	// Creem instància de connexió a bbdd
	$dbal = new DBAL(new PDOwrapper($params));
	
	// Definim la taula amb que treballarem
	$table = 'tasks';

	// Inicialitzem variables generals
	$file = basename(__FILE__);
	$action = "";
	$status = [
		'type' 		=> '',
		'message'	=> ''
	];

    $errors=["taskTitle"=>false,"taskDescription"=>false];
    $editing=false;
	// Comprovem quina acció s'ha d'executar
	switch(g('action')){
		
		// Obtenir la llista de tasques
		default:
		case "getIndex":
			
			$action = "getIndex";
			
			// Obtenim llista de tasques
            $res = $dbal->select('*', $table);


        break;
		
		// Crear una tasca nova
		case "postCreate":

			$action = "postCreate";
			
			// Obtenim llista de tasques
            $title=p("taskTitle");
            $description=p("taskDescription");
            if ($title!="" || $description!="") {
                $values = [
                    ["title", $title],
                    ["description", $description],
                    ["completed", 0]
                ];
                $dbal->insert($table, $values);

                $res = $dbal->select('*', $table);
            }
            if($title==""){
                $errors["taskTitle"]=true;
            }
            if($description==""){
                $errors["taskDescription"]=true;
            }

			break;
		
		// Actualitzar l'estat d'una tasca
		case "getCompleted":

			$action = "getCompleted";

			// Obtenim llista de tasques

            $id=g("id");
            $completed=g("completed");
            $values = [
                [ 'completed', $completed==1 ? 0 : 1],
            ];
            $where = [
                [ 'id', $id ]
            ];
            $dbal->update($table, $values, $where);


            $res =$dbal->select('*', $table);
			
			break;
		
		// Mostrar formulari d'edició de tasca
		case "getEdit":
			
			$action = "getEdit";
            $res =$dbal->select('*', $table);
            $editing=true;
            //has de pasar la id en la url de  getEdit i ferla servir per aconseguir el titol i descr de la taska actual i colocarles al questionari d'editar
            break;
		
		// Guardar dades del formulari d'edició
		case "postEdit":
			
			$action = "postEdit";
			
			// Obtenim llista de tasques
			$res = [];

			break;

		// Eliminiar tasca
		case "getDelete":
			
			$action = "getDelete";

			// Obtenim llista de tasques
			$res = [];

			break;
	}


?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Interacció CLient-Servidor</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="page-header">
							<h1>Interacció Client-Servidor <small>llista de tasques</small></h1>
						</div>
					</div>
				</div>
			</div>	
		</header>
		<div id="body">
			<div class="container">

				<div class="row">
					
					<div class="col-xs-12">

						<?php if($errors["taskDescription"]==false && $errors["taskTitle"]==false){ ?>
						<div class="alert alert-success" role="alert">
							<p>Tot ha anat correctament</p>
						</div>
						<?php } ?>

                        <?php if($errors["taskDescription"]==true || $errors["taskTitle"]==true){ ?>
                        <div class="alert alert-warning" role="alert">
							<p>Hi han algunes dades que no s'han omplert</p>
						</div>
                        <?php } ?>




                    </div>
					
					
					<!-- Llista tasques -->
					<div class="col-xs-12">
						
						<div class="page-header">
							<h1>Llista de tasques <small></small></h1>
						</div>
							
						<table class="table table-striped table-hover" id="taskList">
							<thead>
								<tr>
									<th class="col-num text-center">#</th>
									<th class="col-status text-center"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></th>
									<th class="col-title">Títol</th>
									<th class="col-desc">Descripció</th>
									<th class="col-action text-center">Acció</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($res as $fila){?>
								<!-- Tasca completada -->
                                    <?php
                                    $class="";
                                    $fila["completed"]==0 ? $class="danger" : $class="success"; ?>
                                    <tr class="<?php echo $class ?>">

                                        <td class="text-center"><?php echo $fila["id"] ?></td>
                                        <td class="text-center">
                                            <a href="index.php?action=getCompleted&id=<?php echo $fila["id"]?>&completed=<?php echo $fila["completed"]?>" type="button" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
                                        </td>
                                        <td><?php echo $fila["title"] ?></td>
                                        <td><?php echo $fila["description"] ?></td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs" role="group">
                                                <a href="index.php?action=getEdit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                                <a href="index.php?action=getDelete" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
								<tr class="success">
									<td class="text-center">1</td>
									<td class="text-center">
										<a href="index.php?action=getCompleted" type="button" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
									</td>
									<td>Títol tasca</td>
									<td>Descripció de la tasca</td>
									<td class="text-center">
										<div class="btn-group btn-group-xs" role="group">
											<a href="index.php?action=getEdit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
											<a href="index.php?action=getDelete" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
										</div>
									</td>
								</tr>
								<!-- Tasca completada -->
								
								<!-- Tasca no completada -->
								<tr class="danger">
									<td class="text-center">2</td>
									<td class="text-center">
										<a href="index.php?action=getCompleted" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></a>
									</td>
									<td>Títol tasca</td>
									<td>Descripció de la tasca</td>
									<td class="text-center">
										<div class="btn-group btn-group-xs" role="group">
											<a href="index.php?action=getEdit&id=<?php echo $fila["id"]?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
											<a href="index.php?action=getDelete" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
										</div>
									</td>
								</tr>
								<!-- Tasca no completada -->

								
							</tbody>
						</table>

					</div>
					<!-- Fi llista tasques -->
					
					<!-- Nova tasca -->
					<div class="col-xs-12">
						
						<div class="page-header">
							<h2>Nova tasca <small></small></h2>
						</div>
						<form class="form-horizontal" method="post" action="<?php echo $file ?>?action=postCreate">
							<div class="form-group <?php if($errors['taskTitle']) echo "has-error" ?>">
								<label for="taskTitle" class="col-sm-2 control-label">Títol</label>
								<div class="col-sm-10">
									<input type="text" name="taskTitle" class="form-control" id="taskTitle" placeholder="Títol de la tasca" value="">
								</div>
							</div>
							<div class="form-group <?php if($errors['taskDescription']) echo "has-error" ?>">
								<label for="taskDescription" class="col-sm-2 control-label">Descripció</label>
								<div class="col-sm-10">
									<textarea id="taskDescription" name="taskDescription" class="form-control" rows="3" placeholder="Descripció de la tasca"></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-primary">Guardar</button>
								</div>
							</div>
						</form>
						
					</div>
					<!-- fi nova tasca -->
					
                    <?php if($editing) { ?>
					<!-- Edita tasca -->
					<div class="col-xs-12">
						<div class="page-header">
							<h2>Editar tasca <small></small></h2>
						</div>
						<form class="form-horizontal" method="post" action="index.php?action=postEdit">
							
							<input type="hidden" name="currentTaskId" value="">

							<div class="form-group">
								<label for="currentTaskTitle" class="col-sm-2 control-label">Títol</label>
								<div class="col-sm-10">
									<input type="text" name="currentTaskTitle" class="form-control" id="currentTaskTitle" placeholder="Títol de la tasca" value="">
								</div>
							</div>
							<div class="form-group">
								<label for="currentTaskDescription" class="col-sm-2 control-label">Descripció</label>
								<div class="col-sm-10">
									<textarea id="currentTaskDescription" name="currentTaskDescription" class="form-control" rows="3" placeholder="Descripció de la tasca"></textarea>
								</div>
							</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-primary">Actualitzar</button>
								</div>
							</div>
						</form>
					</div>
					<!-- fi edita tasca -->
                    <?php } ?>
				</div>

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
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>		
		<script src="js/main.js"></script>
	</body>
</html>
