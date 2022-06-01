<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<title>Exercicis PHP</title>
		<meta name="description" content="">
		
		<meta name="description" content="Completa els exercicis descrits a continuació">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="css/libs/normalize.css">
		<link rel="stylesheet" href="css/libs/grid.css">
		<link rel="stylesheet" href="css/libs/main.css">
		<link rel="stylesheet" href="css/base.css">
		
		<script src="js/vendor/modernizr-2.8.3.min.js"></script>
	</head>
	<body>

		<header id="header">
			<div class="container_12">
				<div class="grid_12">
					<div class="page-header">
						<h1>Exercicis PHP
							<small>Completa els exercicis descrits a continuació</small>
						</h1>
					</div>
				</div>
			</div>
		</header>
		<div id="body">
			<div class="container_12">
			
				<div class="exercice">
					<div class="grid_12">
						<h2 class="exercice-title">Exercici #1</h2>
					</div>
					<div class="clearfix">
						<div class="grid_12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Objectiu</h3>
								</div>
								<div class="panel-body">
									
									<p>
										Genera un paràgraf html (<code>&lt;p&gt;</code>) per a cada element dins de l'array <code>$e1a</code>.
									</p>
									
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Exemple</h3>
								</div>
								<div class="panel-body">
									<div id="e1x" class="resultat">
										
										<p>
											Lorem ipsum dolor.
										</p>
										<p>
											Sit amet, consectetur.
										</p>
										<p>
											Adipisicing elit.
										</p>
										
									</div>
								</div>
							</div>
						</div>
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Resultat</h3>
								</div>
								<div class="panel-body">
									<div id="e1" class="resultat">
                                        <?php
                                            $e1a = ["Lorem ipsum dolor.", "Sit amet, consectetur.", "Adipisicing elit."];
                                            foreach($e1a as $value){
                                                echo "<p>".$value."</p>";
                                            }
                                        ?>
									</div>
								</div>
							</div>
						</div>
					
						<div class="grid_12">
							<hr/>
						</div>
					</div>
				</div>
				<!-- fi .exercice -->
				
				<div class="exercice">
					<div class="grid_12">
						<h2 class="exercice-title">Exercici #2</h2>
					</div>
					<div class="clearfix">
						<div class="grid_12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Objectiu</h3>
								</div>
								<div class="panel-body">
									
									<p>
										Similar a l'exercici anterior. Escriu una línia de text per a cada element dins de l'array <code>$e2a</code>. <br />
										Aquest cop fés servir una iteració que recorri els elements de l'array.
									</p>
									
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Exemple</h3>
								</div>
								<div class="panel-body">
									<div id="e2x" class="resultat">
										
										lorem<br>
										ipsum<br>
										dolor<br>	
										
									</div>
								</div>
							</div>
						</div>
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Resultat</h3>
								</div>
								<div class="panel-body">
									<div id="e2" class="resultat">
										<?php
                                            $e2a = ["lorem", "ipsum", "dolor"];
                                            foreach($e2a as $value){ ?>
                                                <p><?php echo $value ?></p>
                                        <?php } ?>
									</div>
								</div>
							</div>
						</div>
					
						<div class="grid_12">
							<hr/>
						</div>
					</div>
				</div>
				<!-- fi .exercice -->
				
				<div class="exercice">
					<div class="grid_12">
						<h2 class="exercice-title">Exercici #3</h2>
					</div>
					<div class="clearfix">
						<div class="grid_12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Objectiu</h3>
								</div>
								<div class="panel-body">
									
									<p>
										Donades les variables <code>$f=3</code> i <code>$c=4</code>. Genera una taula html igual que a l'exemple.
									</p>
									
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Exemple</h3>
								</div>
								<div class="panel-body">
									<div id="e3x" class="resultat">
										Files: 3 Columnes: 4
										<table class="table">
											<tr>
												<td>c1f1</td>
												<td>c2f1</td>
												<td>c3f1</td>
												<td>c4f1</td>
											</tr>
											<tr>
												<td>c1f2</td>
												<td>c2f2</td>
												<td>c3f2</td>
												<td>c4f2</td>
											</tr>
											<tr>
												<td>c1f3</td>
												<td>c2f3</td>
												<td>c3f3</td>
												<td>c4f3</td>
											</tr>
										</table>
										
									</div>
								</div>
							</div>
						</div>
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Resultat</h3>
								</div>
								<div class="panel-body">
									<div id="e3" class="resultat">
					                    <table class="table">
                                            <?php

                                                $f = 3;
                                                $c = 4;
                                                echo "Files: ".$f." Columnes: ".$c;
                                            for($nf=1;$nf<$f+1;$nf++){ ?>
                                                <tr><?php for($nc=1;$nc<$c+1;$nc++){?>
                                                        <td>c<?php echo$nc ?>f<?php echo $nf ?></td>
                                                    <?php } ?></tr>
                                            <?php } ?>
                                        </table>
									</div>
								</div>
							</div>
						</div>
					
						<div class="grid_12">
							<hr/>
						</div>
					</div>
				</div>
				<!-- fi .exercice -->
				
				<div class="exercice">
					<div class="grid_12">
						<h2 class="exercice-title">Exercici #4</h2>
					</div>
					<div class="clearfix">
						<div class="grid_12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Objectiu</h3>
								</div>
								<div class="panel-body">
									
									<p>
										Donat l'array <code>$e4a</code>. Troba la manera d'eliminar l'element amb la paraula "enciam" de tal manera que només quedin 3 elements a l'array.
									</p>

								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Exemple</h3>
								</div>
								<div class="panel-body">
									<div id="e4x" class="resultat">
										
										<pre>Array
(
    [0] =&gt; Pomes
    [1] =&gt; Taronges
    [2] =&gt; Enciam
    [3] =&gt; Peres
)
Array
(
    [0] =&gt; Pomes
    [1] =&gt; Taronges
    [3] =&gt; Peres
)</pre>
										
									</div>
								</div>
							</div>
						</div>
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Resultat</h3>
								</div>
								<div class="panel-body">
									<div id="e4" class="resultat">
										<pre><?php
											$e4a = ["Pomes", "Taronges", "Enciam", "Peres"];
											 print_r($e4a);
											 unset( $e4a[array_search("Enciam", $e4a)]);
                                             print_r($e4a)
										?></pre>
									</div>
								</div>
							</div>
						</div>
					
						<div class="grid_12">
							<hr/>
						</div>
					</div>
				</div>
				<!-- fi .exercice -->
				
				<div class="exercice">
					<div class="grid_12">
						<h2 class="exercice-title">Exercici #5</h2>
					</div>
					<div class="clearfix">
						<div class="grid_12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Objectiu</h3>
								</div>
								<div class="panel-body">
									
									<p>
										Donat l'array de nombres <code>$e5a</code> escriu el codi que substitueixi el valor de l'element pel simbol dòlar (<code>$</code>) en cas que aquest sigui divisible per 2. 
									</p>
									
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Exemple</h3>
								</div>
								<div class="panel-body">
									<div id="e5x" class="resultat">
										
										<pre>Array
(
    [0] =&gt; 44
    [1] =&gt; 87
    [2] =&gt; 12
    [3] =&gt; 2
    [4] =&gt; 32
    [5] =&gt; 9
    [6] =&gt; 6
    [7] =&gt; 42
    [8] =&gt; 13
    [9] =&gt; 67
)
Array
(
    [0] =&gt; 44
    [1] =&gt; $
    [2] =&gt; 12
    [3] =&gt; 2
    [4] =&gt; 32
    [5] =&gt; $
    [6] =&gt; 6
    [7] =&gt; 42
    [8] =&gt; $
    [9] =&gt; $
)</pre>
										
									</div>
								</div>
							</div>
						</div>
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Resultat</h3>
								</div>
								<div class="panel-body">
									<div id="e5" class="resultat">
					
										<pre><?php
											$e5a = [44, 87, 12, 2, 32, 9, 6, 42, 13, 67];

											print_r($e5a);

											foreach($e5a as $key => $value){
                                                if($value % 2){
                                                    $e5a[$key]="$";
                                                }
                                            }

											print_r($e5a);

										?></pre>
									</div>
								</div>
							</div>
						</div>
					
						<div class="grid_12">
							<hr/>
						</div>
					</div>
				</div>
				<!-- fi .exercice -->
				
				<div class="exercice">
					<div class="grid_12">
						<h2 class="exercice-title">Exercici #6</h2>
					</div>
					<div class="clearfix">
						<div class="grid_12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Objectiu</h3>
								</div>
								<div class="panel-body">
									
									Donat l'array de temperatures <code>$e6a</code>. Escriu el codi que calculi la mitjana anual
									
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Exemple</h3>
								</div>
								<div class="panel-body">
									<div id="e6x" class="resultat">
										
										<pre>Array
(
    [0] =&gt; 5.4
    [1] =&gt; 7.2
    [2] =&gt; 11.2
    [3] =&gt; 13.1
    [4] =&gt; 16.9
    [5] =&gt; 19.8
    [6] =&gt; 21.8
    [7] =&gt; 22.8
    [8] =&gt; 19.5
    [9] =&gt; 16.2
    [10] =&gt; 9.4
    [11] =&gt; 5.9
)
Mitjana anual: 14.1</pre>
										
									</div>
								</div>
							</div>
						</div>
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Resultat</h3>
								</div>
								<div class="panel-body">
									<div id="e6" class="resultat">
					
										<pre><?php

											$e6a = [5.4, 7.2, 11.2, 13.1, 16.9, 19.8, 21.8, 22.8, 19.5, 16.2, 9.4, 5.9];
											$e6n = 0;

											print_r($e6a);

											$e6n=array_sum($e6a)/count($e6a);

											echo "Mitjana anual: ".$e6n;

										?></pre>

									</div>
								</div>
							</div>
						</div>
					
						<div class="grid_12">
							<hr/>
						</div>
					</div>
				</div>
				<!-- fi .exercice -->
				
				<div class="exercice">
					<div class="grid_12">
						<h2 class="exercice-title">Exercici #7</h2>
					</div>
					<div class="clearfix">
						<div class="grid_12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Objectiu</h3>
								</div>
								<div class="panel-body">
									
									<p>
										Donat l'array <code>$e7a</code>. Escriu el codi que ordeni els seus elements de forma alfabètica.
									</p>
									
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Exemple</h3>
								</div>
								<div class="panel-body">
									<div id="e7x" class="resultat">
										
										<pre>Array
(
    [0] =&gt; ipsum
    [1] =&gt; lorem
    [2] =&gt; dolor
    [3] =&gt; amet
)
Array
(
    [0] =&gt; amet
    [1] =&gt; dolor
    [2] =&gt; ipsum
    [3] =&gt; lorem
)</pre>
										
									</div>
								</div>
							</div>
						</div>
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Resultat</h3>
								</div>
								<div class="panel-body">
									<div id="e7" class="resultat">
					
										<pre><?php

											$e7a = ["ipsum", "lorem", "dolor", "amet"];

											print_r($e7a);

											sort($e7a);

											print_r($e7a);

										?></pre>

									</div>
								</div>
							</div>
						</div>
					
						<div class="grid_12">
							<hr/>
						</div>
					</div>
				</div>
				<!-- fi .exercice -->
				
				<div class="exercice">
					<div class="grid_12">
						<h2 class="exercice-title">Exercici #8</h2>
					</div>
					<div class="clearfix">
						<div class="grid_12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Objectiu</h3>
								</div>
								<div class="panel-body">
									
									<p>
										Donat l'array <code>$e8a</code> escriu el codi que modifiqui el valor dels elements que hi ha en posicions divisibles per 2. <br />
										Fes que el valor d'aquest elements sigui en maúsquiles.
									</p>
									
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Exemple</h3>
								</div>
								<div class="panel-body">
									<div id="e8x" class="resultat">
										
										<pre>Array
(
    [0] =&gt; lorem
    [1] =&gt; ipsum
    [2] =&gt; dolor
    [3] =&gt; amet
    [4] =&gt; consentum
)
Array
(
    [0] =&gt; LOREM
    [1] =&gt; ipsum
    [2] =&gt; DOLOR
    [3] =&gt; amet
    [4] =&gt; CONSENTUM
)
</pre>
										
									</div>
								</div>
							</div>
						</div>
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Resultat</h3>
								</div>
								<div class="panel-body">
									<div id="e8" class="resultat">
					
										<pre><?php

											$e8a = ["lorem", "ipsum", "dolor", "amet", "consentum"];

											print_r($e8a);

                                            foreach($e8a as $key => $value){
                                                if(!($key % 2)){
                                                    $e8a[$key]=strtoupper($value);
                                                }
                                            }
											print_r($e8a);

										?></pre>
					
									</div>
								</div>
							</div>
						</div>
					
						<div class="grid_12">
							<hr/>
						</div>
					</div>
				</div>
				<!-- fi .exercice -->
				
				<div class="exercice">
					<div class="grid_12">
						<h2 class="exercice-title">Exercici #9</h2>
					</div>
					<div class="clearfix">
						<div class="grid_12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Objectiu</h3>
								</div>
								<div class="panel-body">
									
									<p>
										Donat l'array <code>$e9a</code>. Escriu el codi que ens retorni el valor i la llargada de la paraula més curta i la paraula més llarga.
									</p>
									
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Exemple</h3>
								</div>
								<div class="panel-body">
									<div id="e9x" class="resultat">
										
										<pre>Array
(
    [0] =&gt; lorem
    [1] =&gt; ipsum
    [2] =&gt; sit
    [3] =&gt; amet
    [4] =&gt; consentum
)
Paraula més curta: sit (3)<br>Paraula més llarga: consentum (9)</pre>
										
									</div>
								</div>
							</div>
						</div>
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Resultat</h3>
								</div>
								<div class="panel-body">
									<div id="e9" class="resultat">
					
										<pre><?php

											$e9a = ["lorem", "ipsum", "sit", "amet", "consentum"];
											print_r($e9a);

											$short = 1000000000;
											$wShort = "";
											$long = 0;
											$wLong = "";
											foreach($e9a as $value){
                                                  if(strlen($value)<$short){
                                                      $short=strlen($value);
                                                      $wShort=$value;
                                                  }
                                                  if(strlen($value)>$long){
                                                      $long=strlen($value);
                                                      $wLong=$value;
                                                  }
                                            }
											echo "Paraula més curta: ".$wShort." (".$short.")";
											echo "<br />";
											echo "Paraula més llarga: ".$wLong." (".$long.")";

										?></pre>
										
									</div>
								</div>
							</div>
						</div>
					
						<div class="grid_12">
							<hr/>
						</div>
					</div>
				</div>
				<!-- fi .exercice -->
				
				<div class="exercice">
					<div class="grid_12">
						<h2 class="exercice-title">Exercici #10</h2>
					</div>
					<div class="clearfix">
						<div class="grid_12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Objectiu</h3>
								</div>
								<div class="panel-body">
									
									<p>
										Completa la funció <code>cadena()</code> per tal que generi cadenes com les de l'exemple.
									</p>
									
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Exemple</h3>
								</div>
								<div class="panel-body">
									<div id="e10x" class="resultat">
										
										<pre>1-2-3-4-5-6-7-8-9-10<br>1-2-3-4-5-6-7-8-9-10-11-12-13-14-15<br>1-2-3-4-5-6-7-8-9-10-11-12-13-14-15-16-17-18-19-20<br></pre>
										
									</div>
								</div>
							</div>
						</div>
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Resultat</h3>
								</div>
								<div class="panel-body">
									<div id="e10" class="resultat">
					
										<pre><?php
											
											
											function cadena($n){
                                                $str="";
                                                for($i=0;$i<$n;++$i){
                                                    $str_i=(string)($i+1);
                                                    $str.=$str_i;
                                                    if($i+1!=$n) {
                                                        $str .= "-";
                                                    }

                                                }
                                                return $str;
											}
											
											echo cadena(10);
											echo "<br />";
											echo cadena(15);
											echo "<br />";
											echo cadena(20);
											echo "<br />";
											

										?></pre>
					
									</div>
								</div>
							</div>
						</div>
					
						<div class="grid_12">
							<hr/>
						</div>
					</div>
				</div>
				<!-- fi .exercice -->
				
				<div class="exercice">
					<div class="grid_12">
						<h2 class="exercice-title">Exercici #11</h2>
					</div>
					<div class="clearfix">
						<div class="grid_12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Objectiu</h3>
								</div>
								<div class="panel-body">
									
									Completa la funció <code>triangle()</code> per tal que dibuixi els triangles d'asteriscs  igual que a l'exemple.
									
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Exemple</h3>
								</div>
								<div class="panel-body">
									<div id="e11x" class="resultat">
										
										<pre>*<br>**<br>*<br><br>*<br>**<br>**<br>*<br><br>*<br>**<br>***<br>**<br>*<br><br>*<br>**<br>***<br>****<br>****<br>***<br>**<br>*<br></pre>
										
									</div>
								</div>
							</div>
						</div>
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Resultat</h3>
								</div>
								<div class="panel-body">
									<div id="e11" class="resultat">
					
										<pre><?php
											
											function triangle($n){
												$str="";
                                                $str2="";
                                                for($l=0;$l<(round($n/2));++$l){
                                                    for($p=0;$p<$l+1;++$p){
                                                        $str.='*';
                                                    }
                                                    $str.="<br />";
                                                }
                                                if($n%2==0){
                                                    $num=round($n/2);
                                                }else{
                                                    $num=round($n/2)-1;
                                                }
                                                for($l=$num;$l!=0;--$l){
                                                    for($p=$l;$p!=0;$p--){
                                                        $str2.='*';
                                                    }
                                                    $str2.="\n";
                                                }
                                                echo $str;
											    echo $str2;
                                            }

											triangle(3);
											echo "<br />";
											triangle(4);
											echo "<br />";
											triangle(5);
											echo "<br />";
											triangle(8);

										?></pre>
					
									</div>
								</div>
							</div>
						</div>
					
						<div class="grid_12">
							<hr/>
						</div>
					</div>
				</div>
				<!-- fi .exercice -->
				
				<div class="exercice">
					<div class="grid_12">
						<h2 class="exercice-title">Exercici #12</h2>
					</div>
					<div class="clearfix">
						<div class="grid_12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Objectiu</h3>
								</div>
								<div class="panel-body">
									
									Completa la funció <code>floyd()</code> que donat un enter N, aquesta dibuixa un triangle de Floyd de N files. <br />
									Per crear un triangle Floyd, es comença amb un 1 a la cantonada superior esquerra, i es continua escrivint la seqüència dels nombres naturals de manera que cada línia conté un nombre més que l'anterior.
									
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Exemple</h3>
								</div>
								<div class="panel-body">
									<div id="e12x" class="resultat">
										
										<pre>1 <br>2 3 <br>4 5 6 <br>7 8 9 10 <br>11 12 13 14 15 <br></pre>
										
									</div>
								</div>
							</div>
						</div>
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Resultat</h3>
								</div>
								<div class="panel-body">
									<div id="e12" class="resultat">
					
										<pre><?php
											
											function floyd($n){
												$num=1;
                                                for($l=0;$l<$n+1;++$l){
                                                    $srt="";
                                                    for($p=0;$p<$l;++$p) {
                                                        $srt .= (string)$num." ";
                                                        ++$num;
                                                    }
                                                    echo $srt;
                                                    echo "\n";
                                                }

											}
											
											floyd(5);	
											
										?></pre>
					
									</div>
								</div>
							</div>
						</div>
					
						<div class="grid_12">
							<hr/>
						</div>
					</div>
				</div>
				<!-- fi .exercice -->
				
				<div class="exercice">
					<div class="grid_12">
						<h2 class="exercice-title">Exercici #13</h2>
					</div>
					<div class="clearfix">
						<div class="grid_12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Objectiu</h3>
								</div>
								<div class="panel-body">
									
									Troba la manera d'invertir la cadena <code>$e13s</code>.
									
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Exemple</h3>
								</div>
								<div class="panel-body">
									<div id="e13x" class="resultat">
										
										<pre>lorem ipsum dolor<br>rolod muspi merol</pre>
										
									</div>
								</div>
							</div>
						</div>
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Resultat</h3>
								</div>
								<div class="panel-body">
									<div id="e13" class="resultat">
					
										<pre><?php
										
											$e13s = "lorem ipsum dolor";

											echo $e13s . "<br />";
                                            $len=strlen($e13s);
											$e13r=[];
                                            $e13r=str_split($e13s);
                                            $num=$len-1;
                                            $e13s="";
                                            for($i=$len-1;$i>-1;--$i){
                                                $e13s.=$e13r[$i];
                                                --$num;
                                            }
											echo $e13s;

										?></pre>
					
									</div>
								</div>
							</div>
						</div>
					
						<div class="grid_12">
							<hr/>
						</div>
					</div>
				</div>
				<!-- fi .exercice -->

				<div class="exercice">
					<div class="grid_12">
						<h2 class="exercice-title">Exercici #14</h2>
					</div>
					<div class="clearfix">
						<div class="grid_12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Objectiu</h3>
								</div>
								<div class="panel-body">
									
									<p>
										Donada la cadena <code>$e14s</code>. Completa la funció <code>manipula()</code>. Aquesta ha de:
										1. Girar les paraules que estan en posicions dvisibles per 2. <br />
										2. A la resta de paraules no divisibles per 2. <br /> 
										2.1 Si comencen per vocal, els hi ha d'afegir un coixinet "#" al principi i al final. <br />
										2.2 Sinó ha d'afegir un asterisc al principi i al final.
									</p>
									
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Exemple</h3>
								</div>
								<div class="panel-body">
									<div id="e14x" class="resultat">
										
										<pre>Lorem ipsum dolor sit amet consect adip elit<br>meroL #ipsum# rolod *sit* tema *consect* pida #elit#</pre>
										
									</div>
								</div>
							</div>
						</div>
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Resultat</h3>
								</div>
								<div class="panel-body">
									<div id="e14" class="resultat">
					
										<pre><?php
										
											$e14s = "Lorem ipsum dolor sit amet consect adip elit";
											
											echo $e14s."<br />";
											
											
											function manipula($s){
												//...

											}
											
											echo manipula($e14s);
											
										?></pre>
					
									</div>
								</div>
							</div>
						</div>
					
						<div class="grid_12">
							<hr/>
						</div>
					</div>
				</div>
				<!-- fi .exercice -->
				
				<div class="exercice">
					<div class="grid_12">
						<h2 class="exercice-title">Exercici #15</h2>
					</div>
					<div class="clearfix">
						<div class="grid_12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Objectiu</h3>
								</div>
								<div class="panel-body">
									
									<p>
										Crea una funció que detecti si una frase és un palíndrom (Frase que es llegeix igual indiferentment de la direcció). <br />
										La funció ens ha de retornar cert o fals i l'hem d'aplicar a les dues frases <code>$e15s1</code> i <code>$e15s2</code>
									</p>
									
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Exemple</h3>
								</div>
								<div class="panel-body">
									<div id="e15x" class="resultat">
										
										<pre>lorem ipsum no és palíndrom <br>lorem merol és palíndrom <br></pre>
										
									</div>
								</div>
							</div>
						</div>
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Resultat</h3>
								</div>
								<div class="panel-body">
									<div id="e15" class="resultat">
					
										<pre><?php
										
											
											$e15s1 = "lorem ipsum";
											$e15s2 = "lorem merol";

											function palindrom($string = ""){
												
												return false;
											}

											echo $e15s1;
											if(palindrom($e15s1)){
												echo " és palíndrom <br />";
											} else {
												echo " no és palíndrom <br />";
											}

											echo $e15s2;
											if(palindrom($e15s2)){
												echo " és palíndrom <br />";
											} else {
												echo " no és palíndrom <br />";
											}
										
										?></pre>
					
									</div>
								</div>
							</div>
						</div>
					
						<div class="grid_12">
							<hr/>
						</div>
					</div>
				</div>
				<!-- fi .exercice -->
				
				<div class="exercice">
					<div class="grid_12">
						<h2 class="exercice-title">Exercici #16</h2>
					</div>
					<div class="clearfix">
						<div class="grid_12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Objectiu</h3>
								</div>
								<div class="panel-body">
									
									<p>
										Escriu la funció freqCar() que donat una cadena de caracters retorna un array amb les freqüències dels caràcters que hi figuren.<br />
									</p>
									
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Exemple</h3>
								</div>
								<div class="panel-body">
									<div id="e16x" class="resultat">
										
										<pre>abbabcbdbabdbdbabababcbcbab<br>Array
(
    [a] =&gt; 7
    [b] =&gt; 14
    [c] =&gt; 3
    [d] =&gt; 3
)
</pre>
										
									</div>
								</div>
							</div>
						</div>
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Resultat</h3>
								</div>
								<div class="panel-body">
									<div id="e16" class="resultat">
					
										<pre><?php
											$e16s = "abbabcbdbabdbdbabababcbcbab";
											
											echo $e16s . "<br />";

											function freqCar($s = ""){
												//...
											}

											print_r(freqCar($e16s));
											
										
										?></pre>
					
									</div>
								</div>
							</div>
						</div>
					
						<div class="grid_12">
							<hr/>
						</div>
					</div>
				</div>
				<!-- fi .exercice -->
				
				<div class="exercice">
					<div class="grid_12">
						<h2 class="exercice-title">Exercici #17</h2>
					</div>
					<div class="clearfix">
						<div class="grid_12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Objectiu</h3>
								</div>
								<div class="panel-body">
									
									<p>
										Implementa la funció diccionari() per tal de traduir una frase del català al castellà. <br />
										Representar el diccionari bilingüe amb aquest array = 
										[
											"estic" 	=> "estoy",
											"aprenent" 	=> "aprendiendo",
											"llenguatge" => "lenguaje",
										]. 
										<br />
										En cas que una paraula no tingui traducció dins de l'array diccionai, aquesta s'ha de deixar en castellà.
									</p>
									
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Exemple</h3>
								</div>
								<div class="panel-body">
									<div id="e17x" class="resultat">
										
										<pre>estic aprenent a programar en llenguatge PHP<br>estoy aprendiendo a programar en lenguaje PHP</pre>
										
									</div>
								</div>
							</div>
						</div>
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Resultat</h3>
								</div>
								<div class="panel-body">
									<div id="e17" class="resultat">
					
										<pre><?php
										
											function diccionari($s = ""){
												
												$dic = [
													"estic" 	=> "estoy",
													"aprenent" 	=> "aprendiendo",
													"llenguatge" => "lenguaje",
												];

												//...

											}

											$e17s = "estic aprenent a programar en llenguatge PHP";
											echo $e17s . "<br />";
											echo diccionari($e17s);
										
										?></pre>
					
									</div>
								</div>
							</div>
						</div>
					
						<div class="grid_12">
							<hr/>
						</div>
					</div>
				</div>
				<!-- fi .exercice -->
				
				<div class="exercice">
					<div class="grid_12">
						<h2 class="exercice-title">Exercici #18</h2>
					</div>
					<div class="clearfix">
						<div class="grid_12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Objectiu</h3>
								</div>
								<div class="panel-body">
									
									<p>
										Escriu la funcio fizzBuzz() que donat un valor enter n retorna un array de 1 fins a n substituint els valors divisibles per 3 per "fizz" i els divisibles per 5 per "buzz". Si un valor es divisble per 3 i per 5 ha de retornar "fizzbuzz".
									</p>
									
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Exemple</h3>
								</div>
								<div class="panel-body">
									<div id="e18x" class="resultat">
										
										<pre>Array
(
    [0] =&gt; 1
    [1] =&gt; 2
    [2] =&gt; fizz
    [3] =&gt; 4
    [4] =&gt; buzz
    [5] =&gt; fizz
    [6] =&gt; 7
    [7] =&gt; 8
    [8] =&gt; fizz
    [9] =&gt; buzz
    [10] =&gt; 11
    [11] =&gt; fizz
    [12] =&gt; 13
    [13] =&gt; 14
    [14] =&gt; fizzbuzz
)
</pre>
										
									</div>
								</div>
							</div>
						</div>
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Resultat</h3>
								</div>
								<div class="panel-body">
									<div id="e18" class="resultat">
					
										<pre><?php
										
											function esDivisible($n,$d)
											{
												return $n % $d == 0;
											}

											function fizzBuzz($n = 1){
												
												//...

											}

											print_r(fizzBuzz(15));
										
										?></pre>
					
									</div>
								</div>
							</div>
						</div>
					
						<div class="grid_12">
							<hr/>
						</div>
					</div>
				</div>
				<!-- fi .exercice -->
				
				<div class="exercice">
					<div class="grid_12">
						<h2 class="exercice-title">Exercici #19</h2>
					</div>
					<div class="clearfix">
						<div class="grid_12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Objectiu</h3>
								</div>
								<div class="panel-body">
									
									<p>
										Escriu la funció <code>fibonacci()</code>, que donat un nombre N retorni una successió de fibonacci de N digits. <br />
										La successió de Fibonacci és una successió matemàtica de nombres naturals tal que cada un dels seus termes és igual a la suma dels dos anteriors.
										El 2 primers valors de la cadena no compleixen la successió ja que són els "inicialitzadors". Aquests tenen el valor de 1.
									</p>
										
									
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Exemple</h3>
								</div>
								<div class="panel-body">
									<div id="e19x" class="resultat">
										
										<pre>0<br>1<br>1,1<br>1,1,2<br>1,1,2,3<br>1,1,2,3,5<br>1,1,2,3,5,8,13,21,34,55</pre>

									</div>
								</div>
							</div>
						</div>
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Resultat</h3>
								</div>
								<div class="panel-body">
									<div id="e19" class="resultat">
					
										<pre><?php
										
											function fibonacci($n = 1){
												//...
											}

											print_r(fibonacci(0));
											echo "<br />";
											print_r(fibonacci(1));
											echo "<br />";
											print_r(fibonacci(2));
											echo "<br />";
											print_r(fibonacci(3));
											echo "<br />";
											print_r(fibonacci(4));
											echo "<br />";
											print_r(fibonacci(5));
											echo "<br />";
											print_r(fibonacci(10));

										?></pre>
					
									</div>
								</div>
							</div>
						</div>
					
						<div class="grid_12">
							<hr/>
						</div>
					</div>
				</div>
				<!-- fi .exercice -->
				
				<div class="exercice">
					<div class="grid_12">
						<h2 class="exercice-title">Exercici #20</h2>
					</div>
					<div class="clearfix">
						<div class="grid_12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Objectiu</h3>
								</div>
								<div class="panel-body">
									
									<p>
										Escriu la funció <code>sumador()</code>, que donat un nombre enter, suma els valors dels seus digits. <br />
										En cas que el valor resultant de la suma dels seus digits sigui superior a 9, s'ha de tornar a repetir l'opeació.
									</p>
									
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Exemple</h3>
								</div>
								<div class="panel-body">
									<div id="e20x" class="resultat">
										
										<pre>Array
(
    [0] =&gt; Nombre: 5
    [1] =&gt; Suma: 5
)
<br>Array
(
    [0] =&gt; Nombre: 25
    [1] =&gt; Suma: 7
)
<br>Array
(
    [0] =&gt; Nombre: 89
    [1] =&gt; Array
        (
            [0] =&gt; Nombre: 17
            [1] =&gt; Suma: 8
        )

)
<br>Array
(
    [0] =&gt; Nombre: 19945
    [1] =&gt; Array
        (
            [0] =&gt; Nombre: 28
            [1] =&gt; Array
                (
                    [0] =&gt; Nombre: 10
                    [1] =&gt; Suma: 1
                )

        )

)
</pre>
										
									</div>
								</div>
							</div>
						</div>
						<div class="grid_6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Resultat</h3>
								</div>
								<div class="panel-body">
									<div id="e20" class="resultat">
					
										<pre><?php
										
											function sumador($n = 0){
												//...

											}


											print_r(sumador(5));
											echo "<br />";
											print_r(sumador(25));
											echo "<br />";
											print_r(sumador(89));
											echo "<br />";
											print_r(sumador(19945));
											
										?></pre>
					
									</div>
								</div>
							</div>
						</div>
					
						<div class="grid_12">
							<hr/>
						</div>
					</div>
				</div>
				<!-- fi .exercice -->
				
				
				
				
			</div>
		</div>
		<footer id="footer">
			
		</footer>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
