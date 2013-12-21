<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'formatohv-form',
	'enableAjaxValidation'=>false,
	'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

<div class="row">
	<div class="col-md-12">
		<span class="badge" style="background-color: #222;">1</span><i class="fa fa-minus" style="color: #bce8f1;"></i><span class="badge" style="background-color: #222;">DATOS PERSONALES</span>
		<br>
		<div class="panel panel-info" style="-webkit-box-shadow: 4px 6px 12px rgba(0,0,0,0.175); margin-top: 15px;">
			<div class="panel-body" style="padding-bottom: 0px;">
				<table class="table" style="margin-bottom: 0px;">
					<tr>
						<td rowspan="2" style="border-top: 0px; width:30%;">
							<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/escudo.png', 'DORE', array('width'=> '89px','height'=> '114px')); ?>
						</td>
						<td style="border-top: 0px; width:35%;">
							<h4 style="text-align:center; margin-top: 0px; margin-bottom: 0px;">FORMATO ÚNICO</h4>
							<h3 style="text-align:center; font-weight: bold; margin-top: 0px; margin-bottom: 0px;">HOJA DE VIDA</h3>
							<h6 style="text-align:center; font-weight: bold; margin-top: 0px; margin-bottom: 0px;">Persona Natural</h6>
							<h6 style="text-align:center; margin-top: 0px; margin-bottom: 0px;">(Leyes 190 de 1995, 489 y 443 de 1998)</h6>
						</td> 
						<td style="border-top: 0px;  width:30%;">
							<div class="form-group">
							<?php echo $form->labelEx($model,'entidadReceptora'); ?>
							<div class="col-sm-10" style="padding-left:0px;">
								<?php echo $form->textField($model,'entidadReceptora',array('class'=>'form-control','maxlength'=>45)); ?>
								<?php echo $form->error($model,'entidadReceptora'); ?>
							</div>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<span class="badge" style="background-color: #222;">1</span><i class="fa fa-minus" style="color: #bce8f1;"></i><span class="badge" style="background-color: #222;">DATOS PERSONALES</span>
		<br>
		<div class="panel panel-info" style="-webkit-box-shadow: 4px 6px 12px rgba(0,0,0,0.175); margin-top: 15px;">
			<div class="panel-body">
				
				<table class="table" style="margin-bottom: 0px;">
					<tr>
						<td style="border-top: 0px; padding: 0px !important; width:33%;">
							<?php echo $form->labelEx($datosPersonales,'primerApellido',array('style'=>'margin-bottom: 0px;')); ?>
						</td>
						<td style="border-top: 0px; padding: 0px !important; width:33%;">
							<?php echo $form->labelEx($datosPersonales,'segundoApellido',array('style'=>'margin-bottom: 0px;')); ?>
						</td>
						<td style="border-top: 0px; padding: 0px !important; width:33%;">
							<?php echo $form->labelEx($datosPersonales,'nombres',array('style'=>'margin-bottom: 0px;')); ?>
						</td>
					</tr>
					<tr>
						<td style="border-top: 0px; padding: 0px !important; width:33%;">
							<div class="form-group" style="margin-bottom: 0px;">
								<div class="col-md-12">
									<?php echo $form->textField($datosPersonales,'primerApellido',array('class'=>'form-control inpmobile','maxlength'=>45,'style'=>'padding: 0px 12px;')); ?>
									<?php echo $form->error($datosPersonales,'primerApellido'); ?>
								</div>
							</div>
						</td>
						<td style="border-top: 0px; padding: 0px !important; width:33%;">
							<div class="form-group" style="margin-bottom: 0px;">
								<div class="col-md-12">
								<?php echo $form->textField($datosPersonales,'segundoApellido',array('class'=>'form-control inpmobile','maxlength'=>45,'style'=>'padding: 0px 12px;')); ?>
								<?php echo $form->error($datosPersonales,'segundoApellido'); ?>
								</div>
							</div>
						</td>
						<td style="border-top: 0px; padding: 0px !important; width:33%;">
							<div class="form-group" style="margin-bottom: 0px;">
								<div class="col-md-12">
								<?php echo $form->textField($datosPersonales,'nombres',array('class'=>'form-control inpmobile','maxlength'=>45,'style'=>'padding: 0px 12px;')); ?>
								<?php echo $form->error($datosPersonales,'nombres'); ?>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="3" style="border-top: 0px; padding: 0px !important; width:99%;">
							<table class="table" style="margin-bottom: 0px;">
								<tr>
									<td style="border-top: 0px; padding: 0px !important; width:25%;">
										<?php echo $form->labelEx($datosPersonales,'tipoDocumento',array('style'=>'margin-bottom: 0px;')); ?>
									</td>
									<td style="border-top: 0px; padding: 0px !important; width:15%;">
										&nbsp;
									</td>
									<td style="border-top: 0px; padding: 0px !important; width:10%;">
										<?php echo $form->labelEx($datosPersonales,'sexo',array('style'=>'margin-bottom: 0px;')); ?>
									</td>
									<td style="border-top: 0px; padding: 0px !important; width:20%;">
										<?php echo $form->labelEx($datosPersonales,'nacionalidad',array('style'=>'margin-bottom: 0px;')); ?>
									</td>
									<td style="border-top: 0px; padding: 0px !important; width:25%;">
										<?php echo $form->labelEx($datosPersonales,'idPais',array('style'=>'margin-bottom: 0px;')); ?>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td colspan="3" style="border-top: 0px; padding: 0px !important; width:99%;">
							<table class="table" style="margin-bottom: 0px;">
								<tr>
									<td style="border-top: 0px; padding: 0px !important; width:25%;">
										<div class="form-group" style="margin-bottom: 0px;">
											<div class="col-md-12">
												<div class="btn-group btnsTipoDoc">
													<?php echo $form->hiddenField($datosPersonales,'tipoDocumento',array('value'=>'')); ?>
													C.C&nbsp;<i val="C.C" select="" class="fa fa-circle-o fa-lg cursito type1"></i>
													C.E&nbsp;<i val="C.E" select="" class="fa fa-circle-o fa-lg cursito type2"></i>
													PAS&nbsp;<i val="PAS" select="" class="fa fa-circle-o fa-lg cursito type3"></i>	
													<?php echo $form->error($datosPersonales,'tipoDocumento'); ?>
												</div>
												<div class="btn-group" style="float: right; padding-right: 10px;">
													<?php echo $form->labelEx($datosPersonales,'documento',array('class'=>'control-label','style'=>'padding-top: 0px;')); ?>
												</div>
											</div>
										</div>
									</td>
									<td style="border-top: 0px; padding: 0px !important; width:15%;">
										<div class="form-group" style="margin-bottom: 0px;">
											<div class="col-md-12">
												<?php echo $form->textField($datosPersonales,'documento',array('class'=>'form-control inpmobile','maxlength'=>45,'style'=>'padding: 0px 12px;')); ?>
												<?php echo $form->error($datosPersonales,'documento'); ?>
											</div>
										</div>
									</td>
									<td style="border-top: 0px; padding: 0px !important; width:10%;">
										<div class="form-group" style="margin-bottom: 0px; margin-left: -6px;">
											<div class="col-md-12">
												<div class="btn-group btnsTipoSex">
													<?php echo $form->hiddenField($datosPersonales,'sexo',array('value'=>'')); ?>
													F&nbsp;<i val="F" select="" class="fa fa-circle-o fa-lg cursito sex1"></i>
													M&nbsp;<i val="M" select="" class="fa fa-circle-o fa-lg cursito sex2"></i>
													<?php echo $form->error($datosPersonales,'sexo'); ?>
												</div>
											</div>
										</div>
									</td>
									<td style="border-top: 0px; padding: 0px !important; width:20%;">
										<div class="form-group" style="margin-bottom: 0px; margin-left: -6px;">
											<div class="col-md-12">
												<div class="btn-group btnsTipoNac">
													<?php echo $form->hiddenField($datosPersonales,'nacionalidad',array('value'=>'')); ?>
													COL&nbsp;<i val="COL" select="" class="fa fa-circle-o fa-lg cursito nac1"></i>
													EXTRANJERO&nbsp;<i val="EXTRANJERO" select="" class="fa fa-circle-o fa-lg cursito nac2"></i>
													<?php echo $form->error($datosPersonales,'nacionalidad'); ?>
												</div>
											</div>
										</div>
									</td>
									<td style="border-top: 0px; padding: 0px !important; width:25%;">
										<div class="form-group" style="margin-bottom: 0px;">
											<div class="col-md-12">
												<?php echo $form->dropDownList($datosPersonales,'idPais',Pais::getListPaises(),array('class'=>'chosen-select-deselect form-control')); ?>
												<?php echo $form->error($datosPersonales,'idPais'); ?>
											</div>
										</div>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td colspan="3" style="border-top: 0px; padding: 0px !important; width:99%;">
							<?php echo $form->labelEx($datosPersonales,'tipoLibretaMilitar'); ?>
						</td>
					</tr>
					<tr>
						<td style="border-top: 0px; padding: 0px !important; width:30%;">
							<div class="form-group" style="margin-bottom: 0px;">
								<div class="col-md-12">
									<div class="btn-group btnsTipoLib">
										<?php echo $form->hiddenField($datosPersonales,'tipoLibretaMilitar',array('value'=>'')); ?>
										PRIMERA CLASE&nbsp;<i val="PRIMERA" select="" class="fa fa-circle-o fa-lg cursito lib1"></i>
										&nbsp;&nbsp;&nbsp;SEGUNDA CLASE&nbsp;<i val="SEGUNDA" select="" class="fa fa-circle-o fa-lg cursito lib2"></i>
										<?php echo $form->error($datosPersonales,'tipoLibretaMilitar'); ?>
									</div>
									<div class="btn-group" style="float: right; padding-right: 10px;">
										<?php echo $form->labelEx($datosPersonales,'numeroLibreta',array('class'=>'control-label','style'=>'padding-top: 0px;')); ?>
									</div>
								</div>
							</div>
						</td>
						<td style="border-top: 0px; padding: 0px !important; width:33%;">
							<div class="form-group" style="margin-bottom: 0px;">
								<div class="col-md-8">
								<?php echo $form->textField($datosPersonales,'numeroLibreta',array('class'=>'form-control inpmobile','maxlength'=>45,'style'=>'padding: 0px 12px;')); ?>
								<?php echo $form->error($datosPersonales,'numeroLibreta'); ?>
									
								</div>
								<div class="col-md-3">
									<div class="btn-group" style="float: right; padding-right: 10px;">
										<?php echo $form->labelEx($datosPersonales,'distritoMilitar',array('class'=>'control-label','style'=>'padding-top: 0px;')); ?>
									</div>
								</div>
							</div>
						</td>
						<td style="border-top: 0px; padding: 0px !important; width:33%;">
							<div class="form-group" style="margin-bottom: 0px;">
								<div class="col-md-10">
								<?php echo $form->textField($datosPersonales,'distritoMilitar',array('class'=>'form-control inpmobile','maxlength'=>45,'style'=>'padding: 0px 12px;')); ?>
								<?php echo $form->error($datosPersonales,'distritoMilitar'); ?>
								</div>
							</div>
						</td>
					</tr>
					
				</table>
				
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<span class="badge" style="background-color: #222;">2</span><i class="fa fa-minus" style="color: #bce8f1;"></i><span class="badge" style="background-color: #222;">FORMACI&Oacute;N ACAD&Eacute;MICA</span>
		<br>
		<div class="panel panel-info" style="-webkit-box-shadow: 4px 6px 12px rgba(0,0,0,0.175); margin-top: 15px;">
			<div class="panel-body">
				<table class="table table-bordered" style="margin-bottom: 0px;">
					<tr>
						<td style="padding: 0px !important;">
							<h5><b><i>EDUCACI&Oacute;N B&Aacute;SICA Y MEDIA</i></b></h5>
							MARQUE CON UNA X EL &Uacute;LTIMO GRADO APROBADO ( LOS GRADOS DE 1o. A 6o. DE BACHILLERATO EQUIVALEN A LOS GRADOS 6o. A 11o. DE
							EDUCACIÓN B&Aacute;SICA SECUNDARIA Y MEDIA )
							<div class="row">
								<div class="col-md-12">
									<div class="panel panel-info" style="-webkit-box-shadow: 4px 6px 12px rgba(0,0,0,0.175); margin: 15px 50px;">
										<div class="panel-heading">
											<table class="table table-bordered" style="margin-bottom: 0px; background-color: #d9edf7; color: #222;">
												<tr>
													<td colspan="11" style="padding: 0px !important;">
														<i>EDUCACIÓN BÁSICA</i>
													</td>
													<td colspan="4" style="padding: 0px !important; background-color: #fff;">
														<i><?php echo $form->labelEx($formacionAcademica,'tituloObtenido',array('style'=>'margin-bottom: 0px;')); ?>:</i>
													</td>
													<td style="padding: 0px !important; background-color: #fff;">
														<div class="form-group" style="margin-bottom: 0px;">
															<div class="col-md-8">
															<?php echo $form->textField($formacionAcademica,'tituloObtenido',array('class'=>'form-control inpmobile','maxlength'=>45,'style'=>'padding: 0px 12px;')); ?>
															<?php echo $form->error($formacionAcademica,'tituloObtenido'); ?>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td colspan="5" style="padding: 0px !important;">
														<i>PRIMARIA</i>
													</td>
													<td colspan="4" style="padding: 0px !important;">
														<i>SECUNDARIA</i>
													</td>
													<td colspan="2" style="padding: 0px !important;">
														<i>MEDIA</i>
													</td>
													<td colspan="5" style="padding: 0px !important;">
														<i>FECHA DE GRADO</i>
													</td>
												</tr>
												<tr>
													<td style="padding: 0px !important; background-color: #fff;">
														1o.
													</td>
													<td style="padding: 0px !important; background-color: #fff;">
														2o.
													</td>
													<td style="padding: 0px !important; background-color: #fff;">
														3o.
													</td>
													<td style="padding: 0px !important; background-color: #fff;">
														4o.
													</td>
													<td style="padding: 0px !important; background-color: #fff;">
														5o.
													</td>
													<td style="padding: 0px !important; background-color: #fff;">
														6o.
													</td>
													<td style="padding: 0px !important; background-color: #fff;">
														7o.
													</td>
													<td style="padding: 0px !important; background-color: #fff;">
														8o.
													</td>
													<td style="padding: 0px !important; background-color: #fff;">
														9o.
													</td>
													<td style="padding: 0px !important; background-color: #fff;">
														10o.
													</td>
													<td style="padding: 0px !important; background-color: #fff;">
														11o.
													</td>
													<td style="padding: 0px !important; background-color: #fff;">
														<b><?php echo $form->labelEx($formacionAcademica,'mesGrado',array('style'=>'margin-bottom: 0px;')); ?></b>
													</td>
													<td style="padding: 0px !important; background-color: #fff;">
														<div class="form-group" style="margin-bottom: 0px;">
															<div class="col-md-12">
																<?php echo $form->dropDownList($formacionAcademica,'mesGrado',Formacionacademica::getListMeses(),array('class'=>'chosen-select-deselect form-control')); ?>
																<?php echo $form->error($formacionAcademica,'mesGrado'); ?>
															</div>
														</div>
													</td>
													<td style="padding: 0px !important; background-color: #fff;">
														<b><?php echo $form->labelEx($formacionAcademica,'anioGrado',array('style'=>'margin-bottom: 0px;')); ?></b>
													</td>
													<td colspan="2" style="padding: 0px !important; background-color: #fff;">
														<div class="form-group" style="margin-bottom: 0px;">
															<div class="col-md-4">
																<?php echo $form->textField($formacionAcademica,'anioGrado',array('class'=>'form-control inpmobile','maxlength'=>4,'style'=>'padding: 0px 12px;')); ?>
																<?php echo $form->error($formacionAcademica,'anioGrado'); ?>
															</div>
														</div>
													</td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td style="padding: 0px !important;">
							<h5><b><i>EDUCACION SUPERIOR (PREGRADO Y POSTGRADO)</i></b></h5>
							DILIGENCIE ESTE PUNTO EN ESTRICTO ORDEN CRONOLÓGICO, EN MODALIDAD ACADÉMICA ESCRIBA:
							<div class="row">
								<div class="col-md-3">
									<b>TC</b> (TÉCNICA),
								</div>
								<div class="col-md-3">
									<b>TL</b> (TECNOLÓGICA),
								</div>
								<div class="col-md-3">
									<b>TE</b> (TECNOLÓGICA ESPECIALIZADA),
								</div>
								<div class="col-md-3">
									<b>UN</b> (UNIVERSITARIA),
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<b>ES</b> (ESPECIALIZACIÓN),
								</div>
								<div class="col-md-3">
									<b>MG</b> (MAESTRÍA O MAGISTER),
								</div>
								<div class="col-md-3">
									<b>DOC</b> (DOCTORADO O PHD),
								</div>
								<div class="col-md-3">
									&nbsp;
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									RELACIONE AL FRENTE EL NÚMERO DE LA TARJETA PROFESIONAL (SI ÉSTA HA SIDO PREVISTA EN UNA LEY).
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td style="padding: 0px !important;">
							<table class="table table-bordered" style="margin-bottom: 0px; background-color: #d9edf7; color: #222;">
								<tr>
									<td align="center" style="padding: 0px !important;">
										<i>MODALIDAD</i>
									</td>
									<td align="center" style="padding: 0px !important;">
										<i>No.SEMESTRES</i>
									</td>
									<td align="center" colspan="2" style="padding: 0px !important;">
										<i>GRADUADO</i>
									</td>
									<td align="center" style="padding: 0px !important;">
										<i>NOMBRE DE LOS ESTUDIOS</i>
									</td>
									<td align="center" colspan="2" style="padding: 0px !important;">
										<i>TERMINACIÓN</i>
									</td>
									<td align="center" style="padding: 0px !important;">
										<i>No. DE TARJETA</i>
									</td>
								</tr>
								<tr>
									<td align="center" style="padding: 0px !important;">
										<i>ACADÉMICA</i>
									</td>
									<td align="center" style="padding: 0px !important;">
										<i>APROBADOS</i>
									</td>
									<td align="center" style="padding: 0px !important;">
										<i>SI</i>
									</td>
									<td align="center" style="padding: 0px !important;">
										<i>NO</i>
									</td>
									<td align="center" style="padding: 0px !important;">
										<i>O TÍTULO OBTENIDO</i>
									</td>
									<td align="center" style="padding: 0px !important;">
										<i>MES</i>
									</td>
									<td align="center" style="padding: 0px !important;">
										<i>AÑO</i>
									</td>
									<td align="center" style="padding: 0px !important;">
										<i>PROFESIONAL</i>
									</td>
								</tr>
								<?php
									$html1 = '';
									for($i=0;$i<5;$i++)
									{
										$html1 .='<tr fila="'.$i.'">
													<td style="padding: 0px !important; background-color: #fff;">
														<div class="col-md-12">
															<select class="chosen-select-deselect form-control" name="Educacionsuperior[modalidad][]" id="Educacionsuperior_modalidad">
																<option value=""></option>
																<option value="TC">TC</option>
																<option value="TL">TL</option>
																<option value="TE">TE</option>
																<option value="UN">UN</option>
																<option value="ES">ES</option>
																<option value="MG">MG</option>
																<option value="DOC">DOC</option>
															</select>
														
															
														</div>
													</td>
													<td style="padding: 0px !important; background-color: #fff;">
														<div class="col-md-4">
															<input class="form-control inpmobile" maxlength="2" style="padding: 0px 12px;" name="Educacionsuperior[semestresAprobados][]" id="Educacionsuperior_semestresAprobados" type="text">
														</div>
													</td>
													<td style="padding: 0px !important; background-color: #fff;">
														<div class="col-md-4">
															<div class="btn-group btnsTipoGra">
																<input value="" name="Educacionsuperior[graduado][]" id="Educacionsuperior_graduado_'.$i.'" type="hidden">
																<i val="Si" index="'.$i.'" select="" class="fa fa-circle-o fa-lg cursito graduado"></i>
															</div>
														</div>
													</td>
													<td style="padding: 0px !important; background-color: #fff;">
														<div class="col-md-4">
															<div class="btn-group btnsTipoGra">
																<i val="No" index="'.$i.'" select="" class="fa fa-circle-o fa-lg cursito graduado"></i>
															</div>
														</div>
													</td>
													<td style="padding: 0px !important; background-color: #fff;">
														<div class="col-md-12">
															<input class="form-control inpmobile" maxlength="45" style="padding: 0px 12px;" name="Educacionsuperior[tituloObtenido][]" id="Educacionsuperior_tituloObtenido" type="text">
														</div>
													</td>
													<td style="padding: 0px !important; background-color: #fff;">
														<div class="col-md-5">
															<input class="form-control inpmobile" maxlength="2" style="padding: 0px 12px;" name="Educacionsuperior[mesTerminacion][]" id="Educacionsuperior_mesTerminacion" type="text">
														</div>
													</td>
													<td style="padding: 0px !important; background-color: #fff;">
														<div class="col-md-6">
															<input class="form-control inpmobile" maxlength="4" style="padding: 0px 12px;" name="Educacionsuperior[anioTerminacion][]" id="Educacionsuperior_anioTerminacion" type="text">
														</div>
													</td>
													<td style="padding: 0px !important; background-color: #fff;">
														<div class="col-md-12">
															<input class="form-control inpmobile" maxlength="4" style="padding: 0px 12px;" name="Educacionsuperior[tarjetaProfesional][]" id="Educacionsuperior_tarjetaProfesional" type="text">
														</div>
													</td>
												</tr>';
									}
									echo $html1;
								?>
							</table>
						</td>
					</tr>
					<tr>
						<td style="padding: 0px !important;">
							ESPECÍFIQUE LOS IDIOMAS DIFERENTES AL ESPAÑOL QUE: HABLA, LEE, ESCRIBE DE FORMA, REGULAR (<b>R</b>), BIEN (<b>B</b>) O MUY BIEN (<b>MB</b>)
							<div class="row">
								<div class="col-md-12">
									<div class="panel panel-info" style="-webkit-box-shadow: 4px 6px 12px rgba(0,0,0,0.175); margin: 15px 50px;">
										<div class="panel-heading">
											<table class="table table-bordered" style="margin-bottom: 0px; background-color: #d9edf7; color: #222;">
												<tr>
													<td align="center" valign="middle" rowspan="2" style="padding: 0px !important;">
														<i>IDIOMA</i>
													</td>
													<td align="center" valign="middle" colspan="3" style="padding: 0px !important; background-color: #fff;">
														<i>LO HABLA</i>
													</td>
													<td align="center" valign="middle" colspan="3" style="padding: 0px !important; background-color: #fff;">
														<i>LO LEE</i>
													</td>
													<td align="center" valign="middle" colspan="3" style="padding: 0px !important; background-color: #fff;">
														<i>LO ESCRIBE</i>
													</td>
												</tr>
												<tr>
													<td align="center" valign="middle" style="padding: 0px !important; background-color: #fff;">
														R
													</td>
													<td align="center" valign="middle" style="padding: 0px !important; background-color: #fff;">
														B
													</td>
													<td align="center" valign="middle" style="padding: 0px !important; background-color: #fff;">
														MB
													</td>
													<td align="center" valign="middle" style="padding: 0px !important; background-color: #fff;">
														R
													</td>
													<td align="center" valign="middle" style="padding: 0px !important; background-color: #fff;">
														B
													</td>
													<td align="center" valign="middle" style="padding: 0px !important; background-color: #fff;">
														MB
													</td>
													<td align="center" valign="middle" style="padding: 0px !important; background-color: #fff;">
														R
													</td>
													<td align="center" valign="middle" style="padding: 0px !important; background-color: #fff;">
														B
													</td>
													<td align="center" valign="middle" style="padding: 0px !important; background-color: #fff;">
														MB
													</td>
												</tr>
												<tr>
													<td style="padding: 0px !important; background-color: #fff;">
														<?php echo $form->textField($idioma,'nombre',array('name'=>'Idioma[]nombre','class'=>'form-control inpmobile','maxlength'=>4,'style'=>'padding: 0px 12px;')); ?>
														<?php echo $form->error($idioma,'nombre'); ?>
													</td>
													<td style="padding: 0px !important; background-color: #fff;" class="radio_flat_status">
														<?php echo $form->radioButton($idioma,'loHabla',array('name'=>'Idioma[]loHabla','value'=>'R','class'=>'form-control inpmobile','maxlength'=>4,'style'=>'padding: 0px 12px; vertical-align: middle; text-align: -webkit-center;')); ?>
													</td>
													<td style="padding: 0px !important; background-color: #fff;" class="radio_flat_status">
														<?php echo $form->radioButton($idioma,'loHabla',array('name'=>'Idioma[]loHabla','value'=>'B','class'=>'form-control inpmobile','maxlength'=>4,'style'=>'padding: 0px 12px; vertical-align: middle; text-align: -webkit-center;')); ?>
													</td>
													<td style="padding: 0px !important; background-color: #fff;" class="radio_flat_status">
														<?php echo $form->radioButton($idioma,'loHabla',array('name'=>'Idioma[]loHabla','value'=>'MB','class'=>'form-control inpmobile','maxlength'=>4,'style'=>'padding: 0px 12px; vertical-align: middle; text-align: -webkit-center;')); ?>
														<?php echo $form->error($idioma,'loHabla'); ?>
													</td>
													<td style="padding: 0px !important; background-color: #fff;" class="radio_flat_status">
														<?php echo $form->radioButton($idioma,'loLee',array('name'=>'Idioma[]loLee','value'=>'R','class'=>'form-control inpmobile','maxlength'=>4,'style'=>'padding: 0px 12px; vertical-align: middle; text-align: -webkit-center;')); ?>
													</td>
													<td style="padding: 0px !important; background-color: #fff;" class="radio_flat_status">
														<?php echo $form->radioButton($idioma,'loLee',array('name'=>'Idioma[]loLee','value'=>'B','class'=>'form-control inpmobile','maxlength'=>4,'style'=>'padding: 0px 12px; vertical-align: middle; text-align: -webkit-center;')); ?>
													</td>
													<td style="padding: 0px !important; background-color: #fff;" class="radio_flat_status">
														<?php echo $form->radioButton($idioma,'loLee',array('name'=>'Idioma[]loLee','value'=>'MB','class'=>'form-control inpmobile','maxlength'=>4,'style'=>'padding: 0px 12px; vertical-align: middle; text-align: -webkit-center;')); ?>
														<?php echo $form->error($idioma,'loLee'); ?>
													</td>
													<td style="padding: 0px !important; background-color: #fff;" class="radio_flat_status">
														<?php echo $form->radioButton($idioma,'loEscribe',array('name'=>'Idioma[]loEscribe','value'=>'R','class'=>'form-control inpmobile','maxlength'=>4,'style'=>'padding: 0px 12px; vertical-align: middle; text-align: -webkit-center;')); ?>
													</td>
													<td style="padding: 0px !important; background-color: #fff;" class="radio_flat_status">
														<?php echo $form->radioButton($idioma,'loEscribe',array('name'=>'Idioma[]loEscribe','value'=>'B','class'=>'form-control inpmobile','maxlength'=>4,'style'=>'padding: 0px 12px; vertical-align: middle; text-align: -webkit-center;')); ?>
													</td>
													<td style="padding: 0px !important; background-color: #fff;" class="radio_flat_status">
														<?php echo $form->radioButton($idioma,'loEscribe',array('name'=>'Idioma[]loEscribe','value'=>'MB','class'=>'form-control inpmobile','maxlength'=>4,'style'=>'padding: 0px 12px; vertical-align: middle; text-align: -webkit-center;')); ?>
														<?php echo $form->error($idioma,'loEscribe'); ?>
													</td>
												</tr>
												<tr>
													<td style="padding: 0px !important; background-color: #fff;">
														<?php echo $form->textField($idioma2,'nombre',array('name'=>'Idioma[]nombre','class'=>'form-control inpmobile','maxlength'=>4,'style'=>'padding: 0px 12px;')); ?>
														<?php echo $form->error($idioma2,'nombre'); ?>
													</td>
													<td style="padding: 0px !important; background-color: #fff;" class="radio_flat_status">
														<?php echo $form->radioButton($idioma2,'loHabla',array('name'=>'Idioma[]loHabla','value'=>'R','class'=>'form-control inpmobile','maxlength'=>4,'style'=>'padding: 0px 12px; vertical-align: middle; text-align: -webkit-center;')); ?>
													</td>
													<td style="padding: 0px !important; background-color: #fff;" class="radio_flat_status">
														<?php echo $form->radioButton($idioma2,'loHabla',array('name'=>'Idioma[]loHabla','value'=>'B','class'=>'form-control inpmobile','maxlength'=>4,'style'=>'padding: 0px 12px; vertical-align: middle; text-align: -webkit-center;')); ?>
													</td>
													<td style="padding: 0px !important; background-color: #fff;" class="radio_flat_status">
														<?php echo $form->radioButton($idioma2,'loHabla',array('name'=>'Idioma[]loHabla','value'=>'MB','class'=>'form-control inpmobile','maxlength'=>4,'style'=>'padding: 0px 12px; vertical-align: middle; text-align: -webkit-center;')); ?>
														<?php echo $form->error($idioma2,'loHabla'); ?>
													</td>
													<td style="padding: 0px !important; background-color: #fff;" class="radio_flat_status">
														<?php echo $form->radioButton($idioma2,'loLee',array('name'=>'Idioma[]loLee','value'=>'R','class'=>'form-control inpmobile','maxlength'=>4,'style'=>'padding: 0px 12px; vertical-align: middle; text-align: -webkit-center;')); ?>
													</td>
													<td style="padding: 0px !important; background-color: #fff;" class="radio_flat_status">
														<?php echo $form->radioButton($idioma2,'loLee',array('name'=>'Idioma[]loLee','value'=>'B','class'=>'form-control inpmobile','maxlength'=>4,'style'=>'padding: 0px 12px; vertical-align: middle; text-align: -webkit-center;')); ?>
													</td>
													<td style="padding: 0px !important; background-color: #fff;" class="radio_flat_status">
														<?php echo $form->radioButton($idioma2,'loLee',array('name'=>'Idioma[]loLee','value'=>'MB','class'=>'form-control inpmobile','maxlength'=>4,'style'=>'padding: 0px 12px; vertical-align: middle; text-align: -webkit-center;')); ?>
														<?php echo $form->error($idioma2,'loLee'); ?>
													</td>
													<td style="padding: 0px !important; background-color: #fff;" class="radio_flat_status">
														<?php echo $form->radioButton($idioma2,'loEscribe',array('name'=>'Idioma[]loEscribe','value'=>'R','class'=>'form-control inpmobile','maxlength'=>4,'style'=>'padding: 0px 12px; vertical-align: middle; text-align: -webkit-center;')); ?>
													</td>
													<td style="padding: 0px !important; background-color: #fff;" class="radio_flat_status">
														<?php echo $form->radioButton($idioma2,'loEscribe',array('name'=>'Idioma[]loEscribe','value'=>'B','class'=>'form-control inpmobile','maxlength'=>4,'style'=>'padding: 0px 12px; vertical-align: middle; text-align: -webkit-center;')); ?>
													</td>
													<td style="padding: 0px !important; background-color: #fff;" class="radio_flat_status">
														<?php echo $form->radioButton($idioma2,'loEscribe',array('name'=>'Idioma[]loEscribe','value'=>'MB','class'=>'form-control inpmobile','maxlength'=>4,'style'=>'padding: 0px 12px; vertical-align: middle; text-align: -webkit-center;')); ?>
														<?php echo $form->error($idioma2,'loEscribe'); ?>
													</td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<span class="badge" style="background-color: #222;">3</span><i class="fa fa-minus" style="color: #bce8f1;"></i><span class="badge" style="background-color: #222;">EXPERIENCIA LABORAL</span>
		<br>
		<div class="panel panel-info" style="-webkit-box-shadow: 4px 6px 12px rgba(0,0,0,0.175); margin-top: 15px;">
			<div class="panel-body">
				Panel content
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<span class="badge" style="background-color: #222;">4</span><i class="fa fa-minus" style="color: #bce8f1;"></i><span class="badge" style="background-color: #222;">TIEMPO TOTAL DE EXPERIENCIA</span>
		<br>
		<div class="panel panel-info" style="-webkit-box-shadow: 4px 6px 12px rgba(0,0,0,0.175); margin-top: 15px;">
			<div class="panel-body">
				Panel content
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<span class="badge" style="background-color: #222;">5</span><i class="fa fa-minus" style="color: #bce8f1;"></i><span class="badge" style="background-color: #222;">FIRMA DEL SERVIDOR P&Uacute;BLICO O CONTRATISTA</span>
		<br>
		<div class="panel panel-info" style="-webkit-box-shadow: 4px 6px 12px rgba(0,0,0,0.175); margin-top: 15px;">
			<div class="panel-body">
				Panel content
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<span class="badge" style="background-color: #222;">6</span><i class="fa fa-minus" style="color: #bce8f1;"></i><span class="badge" style="background-color: #222;">OBSERVACIONES DEL JEFE DE RECURSOS HUMANOS Y/O CONTRATOS</span>
		<br>
		<div class="panel panel-info" style="-webkit-box-shadow: 4px 6px 12px rgba(0,0,0,0.175); margin-top: 15px;">
			<div class="panel-body">
				Panel content
			</div>
		</div>
	</div>
</div>


	<?php echo $form->textFieldRow($model,'idUsuario',array('class'=>'form-control')); ?>

	<?php echo $form->textFieldRow($model,'idCiudadDiligenciamiento',array('class'=>'form-control')); ?>

	<?php echo $form->textFieldRow($model,'idCiudadRecurHuma',array('class'=>'form-control')); ?>

	

	<?php echo $form->textFieldRow($model,'fechaDiligenciamiento',array('class'=>'form-control')); ?>

	<?php echo $form->textFieldRow($model,'firmaSerContra',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'observaRecurHuma',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'fechaRecurHuma',array('class'=>'form-control','maxlength'=>45)); ?>

	<div class="form-group">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
<script>
	$(function() {
	
		//======================iCheck===================
        $('.radio_flat_status input').iCheck({
            labelHover: true,
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });
        //======================iCheck===================
	
		$('.chosen-select').chosen({search_contains: true });
		$('.chosen-select-deselect').chosen({ allow_single_deselect: true, search_contains: true });
		
		$(document).on('click', '.graduado', function(){
				var index = $(this).attr('index');
				var value = $(this).attr('val');
				var select= $(this).attr('select');
				
				$('i[index="'+index+'"]').each(function(){
					
					var index2 = $(this).attr('index');
					var value2 = $(this).attr('val');
					var select2= $(this).attr('select');
					
					if( value2 == value && select  == '' )
					{
						$(this).removeClass('fa-circle-o').addClass('fa-dot-circle-o');
						$(this).attr('select',1);
						$('#Educacionsuperior_graduado_'+index).val(value);
					}
					else if( value2 == value && select  != '' )
					{
						$(this).removeClass('fa-dot-circle-o').addClass('fa-circle-o');
						$(this).attr('select','');
						$('#Educacionsuperior_graduado_'+index).val('');
					}
					else if( value2 != value && select2  != '' )
					{
						$(this).removeClass('fa-dot-circle-o').addClass('fa-circle-o');
						$(this).attr('select','');
					}
				});
			
		});
		
		$(document).on('click', '.type1, .type2, .type3', function(){
			if( $(this).attr('select') == "" )
			{
				$('.btnsTipoDoc').find('i').each(function(){
				
					if( $(this).attr('select') == 1 )
					{
						$(this).removeClass('fa-dot-circle-o').addClass('fa-circle-o');
						$(this).attr('select','');
					}
				});
				$(this).removeClass('fa-circle-o').addClass('fa-dot-circle-o');
				$(this).attr('select',1);
				$('#Datospersonales_tipoDocumento').val($(this).attr('val'));
			}
			else
			{
				$('#Datospersonales_tipoDocumento').val('');
				$(this).removeClass('fa-dot-circle-o').addClass('fa-circle-o');
				$(this).attr('select','');
			}			
		});
		
		$(document).on('click', '.sex1, .sex2', function(){
			if( $(this).attr('select') == "" )
			{
				$('.btnsTipoSex').find('i').each(function(){
				
					if( $(this).attr('select') == 1 )
					{
						$(this).removeClass('fa-dot-circle-o').addClass('fa-circle-o');
						$(this).attr('select','');
					}
				});
				$(this).removeClass('fa-circle-o').addClass('fa-dot-circle-o');
				$(this).attr('select',1);
				$('#Datospersonales_sexo').val($(this).attr('val'));
			}
			else
			{
				$('#Datospersonales_sexo').val('');
				$(this).removeClass('fa-dot-circle-o').addClass('fa-circle-o');
				$(this).attr('select','');
			}			
		});
		
		$(document).on('click', '.nac1, .nac2', function(){
			if( $(this).attr('select') == "" )
			{
				$('.btnsTipoNac').find('i').each(function(){
				
					if( $(this).attr('select') == 1 )
					{
						$(this).removeClass('fa-dot-circle-o').addClass('fa-circle-o');
						$(this).attr('select','');
					}
				});
				$(this).removeClass('fa-circle-o').addClass('fa-dot-circle-o');
				$(this).attr('select',1);
				$('#Datospersonales_nacionalidad').val($(this).attr('val'));
			}
			else
			{
				$('#Datospersonales_nacionalidad').val('');
				$(this).removeClass('fa-dot-circle-o').addClass('fa-circle-o');
				$(this).attr('select','');
			}			
		});
		
		$(document).on('click', '.lib1, .lib2', function(){
			if( $(this).attr('select') == "" )
			{
				$('.btnsTipoLib').find('i').each(function(){
				
					if( $(this).attr('select') == 1 )
					{
						$(this).removeClass('fa-dot-circle-o').addClass('fa-circle-o');
						$(this).attr('select','');
					}
				});
				$(this).removeClass('fa-circle-o').addClass('fa-dot-circle-o');
				$(this).attr('select',1);
				$('#Datospersonales_tipoLibretaMilitar').val($(this).attr('val'));
			}
			else
			{
				$('#Datospersonales_tipoLibretaMilitar').val('');
				$(this).removeClass('fa-dot-circle-o').addClass('fa-circle-o');
				$(this).attr('select','');
			}			
		});
	});
</script>