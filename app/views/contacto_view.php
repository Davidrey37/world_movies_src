<div class="container-fluid" style="background: linear-gradient(217deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 48%, rgba(0,212,255,1) 100%);">
	<div class="row">
		<div class="text-light col-12 col-md-6 mt-4">
			<h4>Contáctenos</h4>
			<p><span class="icon-whatsapp" style="color: #66e600"></span> Whatsapp: (504) 3391-8247</p>
			<p><span class="icon-phone" style="color: #f3ff00"></span> Teléfono: 2662-1188</p>
			<p><span class="icon-facebook-rect"></span> Facebook: World Movies SRC</p>
			<p><span class="icon-yahoo"style="color: #cd00ff"></span>  Email: <a href="">creyesbarahona@yahoo.es</a></p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.024606493922!2d-88.7815442856407!3d14.76764388969627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f64095456960609%3A0xf1ab24a510a00aa2!2sWorld%20Movies%20Santa%20Rosa!5e0!3m2!1ses!2shn!4v1599313084143!5m2!1ses!2shn" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
		<div class="text-light col-12 col-md-6 mt-4">
			<h4>Envíenos su Comentario<span class="icon-chat text-warning"></span></h4>

			<div class="row my-3">
                <div class="col-12">
                  <form id="contact-form" class="contact" name="contact-form" method="post" action="<?php $url_sitio . "enviar.php" ?>">
                    <div class="form-group">
                      <label for="inputnombre">Tu Nombre (Requerido)</label>
                      <input type="text" name="nombre" class="form-control" required="required" id="inputnombre" placeholder="Nombre Apellido">
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputcorreo">Tu Correo (Requerido)</label>
                      <input type="email" name="correo" class="form-control" required="required" id="inputcorreo" placeholder="ejemplo@mail.com">
                      <small id="emailHelp" class="form-text text-muted">Su información personal no se comparte con nadie más.</small>
                    </div>
                    <div class="form-group">
                      <label for="inputasunto">Asunto:</label>
                      <input type="text" name="asunto" class="form-control" id="inputasunto" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="inputmensaje">Mensaje:</label>
                      <textarea class="form-control" name="mensaje" required="required" id="inputmensaje" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-outline-primary hvr-float-shadow" data-toggle="modal" data-target="#noti"><span class="icon-mail"></span> Enviar</button>
                      <button type="submit" class="btn btn-outline-warning hvr-float-shadow">Limpiar</button>
                    </div>

                    <div class="modal fade" id="noti">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color: #B7FFB0;">
                            <h5 class="modal-title text-success">Mensaje Enviado!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p class="text-success">Su mensaje ha sido enviado con <strong>éxito!</strong><br>En breve le responderemos.</p>
                          </div>                    
                        </div>
                      </div>
                    </div>
                         
                  </form>
                </div>
              </div>

		</div>
	</div>
</div>