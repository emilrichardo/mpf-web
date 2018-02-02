<section id="el-ministerio" class="el-ministerio padd-section bg-gris">
		<div class="container">
			<h2 class="sec">El Ministerio</h2>			
		</div>
		<section class="ca-mpf bg-primary">
			<div class="row">
				<div class="col-xs-12 col-md-7 links-about">
					<div class="row center-xs start-md">
						<div class="col-xs-12 col-md-6"></div>
						<div class="col-xs-12 col-md-6">
							<ul>
								<li><a href="<?php echo home_url('/'); ?>el-ministerio/"><i class="fa fa-balance-scale"></i>Funciones</a></li>
								<li><a href="<?php echo home_url('/'); ?>el-ministerio/"><i class="fa  fa-sitemap"></i>Organigrama</a></li>
								<li><a href="<?php echo home_url('/'); ?>el-ministerio/"><i class="fa fa-book"></i>Leyes de interes</a></li>
								<li><a href="<?php echo home_url('/'); ?>el-ministerio/"><i class="fa fa-bank"></i>Historia</a></li>
							</ul>
						</div>
					</div>
				</div><!-- links -->
				<div class="col-xs-12 col-md-5 ca-circunscripciones center-xs start-md">
					<div class="circ-cont">
						<h2>Circunscripciones <br>Judiciales</h2>
						<a href="<?php echo home_url('/'); ?>el-ministerio/circunscripciones" class="btn btn-default btn-lg"><i class="fa fa-map-marker"></i><span>Ver mapa <br>interactivo</span></a>
					</div>
				</div><!-- mapa -->
			</div>
		</section>

	</section> <!-- seccion el ministerio -->

	<section id="about" class="padd-section bg-gris">
		<div class="container">
			<div class="row middle-xs">
				<div class="col-xs-12 col-md-6 center-xs start-md">
					<h2>Un organismo a servicio de la sociedad </h2>
					<p class="lead">El Ministerio Público es un órgano con autonomía funcional y garantías de independencia, dentro del Poder Judicial, según lo establecido en el art. 202 de la Constitución Provincial, ratificado y ampliado en las reformas de los años 1997 y 1999. Su función es promover la actuación de la Justicia en defensa de la legalidad y de los intereses generales de la sociedad.
</p>
					<a href="<?php echo home_url('/'); ?>el-ministerio" class="btn btn-info btn-lg">
						sobre el ministerio público fiscal   <i class="fa fa-angle-right"></i>
					</a>
				</div>
				<div class="col-md-6">
					<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/delarua.jpg" alt="DELARUA">
				</div>
			</div>
		</div>
	</section>
	<section class="fturno bg-gris">
		<div class="container">
			<div class="bg-box">
				<div class="row middle-xs between-xs center-xs start-md">
					<div class="col-xs-12 col-md-6">
						<h3><i class="fa fa-calendar "></i> Fiscales de turno</h3>
					</div>
					<div class="col-xs-12 col-md-6">

						<a href="<?php echo home_url('/'); ?>el-minister/calendario-turnos-fiscales" class="btn btn-default btn-lg">
							Ver calendario completo
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>






	<section id="unidades" class="bg-tiles padd-section">
		<div class="container">
			<h2 class="sec color-white">Unidades, dependencias y oficinas</h2>
			<ul class="slider-unidades">
				<li>
					<div class="slide-u bg-blue color-white slide-lg">
						<div class="feature">
							<img src="<?php echo get_template_directory_uri(); ?>/static/vg.jpg" alt="">
						</div>
						<div class="caption">
							<h3>Unidad de Violencia de Género e Intrafamiliar</h3>
								<a class="btn btn-border-blue" data-toggle="modal" href="#uvg">
							  Ver más <i class="fa  fa-angle-right"></i>
							</a>
						</div>
					</div>
				</li>
				<li>
					<div class="slide-u bg-info slide-sm">
						<div class="feature">
							<img src="<?php echo get_template_directory_uri(); ?>/static/uil.jpg" alt="">
						</div>
						<div class="caption">
							<a data-toggle="modal" href="#uil">
							  <h3>Unidad de Investigación y Litigación</h3></a>
							
						</div>
					</div>
				</li>
				<li>
					<div class="slide-u bg-gris slide-sm">
						<div class="feature">
							<img src="<?php echo get_template_directory_uri(); ?>/static/laboratorio.jpg" alt="">
						</div>
						<div class="caption">
							<a href="<?php echo home_url('/'); ?>laboratorio"  ><h3>Laboratorio de Toxicología y Química Legal</h3></a>
							
						</div>
					</div>
				</li>
				
				<li>
					<div class="slide-u bg-info slide-sm">
						<div class="feature">
							<img src="<?php echo get_template_directory_uri(); ?>/static/image.jpg" alt="">
						</div>
						<div class="caption">
							<a data-toggle="modal" href="#otc"><h3>Oficina de Tramitación común</h3></a>
							
						</div>
					</div>
				</li>
				
			</ul>
		</div>
	</section>


	<!-- Modal -->
<div class="modal fade" id="uil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" >Unidad de Investigación y Litigación</h4>
      </div>
      <div class="modal-body">
        Es la unidad que dirige y define la estrategia de investigación en los casos sometidos a su intervención. Recolecta evidencias, prepara legajos, recepciona testimonios, entre otras funciones. 
      </div>
      
    </div>
  </div>
</div> <!-- modal -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      
    </div>
  </div>
</div> <!-- modal -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      
    </div>
  </div>
</div> <!-- modal -->
<!-- Modal -->
<div class="modal fade" id="otc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Oficina de Tramitación Común</h4>
      </div>
      <div class="modal-body">
        Su función primordial es la de ejecutar las diligencias de carácter administrativo durante el proceso de instrucción de una causa a solicitud de los Equipos Fiscales, y ejerciendo el control de los tiempos que insume el trámite de la diligencia. 
      </div>
      
    </div>
  </div>
</div> <!-- modal -->
<!-- Modal -->
<div class="modal fade" id="oce" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Oficina de Control de Efectos</h4>
      </div>
      <div class="modal-body">
        Tiene como función llevar un inventario de los efectos secuestrados en las diversas causas y también la de mantenerlos en correcto estado de conservación; como así también, de preservar la cadena de custodia en caso de que sea enviada a los expertos (o asistentes técnicos) para la realización de un peritaje.
      </div>
      
    </div>
  </div>
</div> <!-- modal -->
<!-- Modal -->
<div class="modal fade" id="uvg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Unidad de Violencia de Género e Intrafamiliar</h4>
      </div>
      <div class="modal-body">
        Tiene a su cargo la persecución penal de los casos que encuadren en esta particular modalidad delictiva; además de garantizar a la víctima medidas reales y concretas de protección.

      </div>
      
    </div>
  </div>
</div> <!-- modal violencia de genero -->