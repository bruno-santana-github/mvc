<?php
	namespace Models;

	class ContatoModel{

		public static function enviarFormulario(){
			$mail = new \Email('seu host aqui','seu email aqui','sua senha aqui','seu nome');
			$mail->addAdress('seu email','seu nome');
			$mail->formatarEmail(array('assunto'=>'Mensagem do site','corpo'=>'Aqui é uma mensagem do site!'));
			$mail->enviarEmail();
		}

	}

?>