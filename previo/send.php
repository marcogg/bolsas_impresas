<?php
session_start();
date_default_timezone_set('America/Mexico_City');
require_once ('include/PHPMAILER/PHPMailerAutoload.php');

$arrEMails = array('Ventas' => 'ventas@bolsas-impresas.com');
$mail = new PHPMailer;
$mail->isMail();

switch ($_GET['mod'])
{
	case 'Contacto':
	{
		if(trim($_POST['nombre']) <> '' and trim($_POST['telefono']) <> '' and trim($_POST['cantidad']) <> '' and trim($_POST['medidas']) <> '' and trim($_POST['email']) <> ''and trim($_POST['mensaje']) <> '')
		{
			$mensaje = '<table width="80%" border="1" align="center" cellpadding="0" cellspacing="0">';
			$mensaje .= '<tr><td align="right">Nombre:</td><td>'.$_POST['nombre'].'</td></tr>';
			$mensaje .= '<tr><td align="right">Telefono:</td><td>'.$_POST['telefono'].'</td></tr>';
			$mensaje .= '<tr><td align="right">Ciudad:</td><td>'.$_POST['ciudad'].'</td></tr>';
			$mensaje .= '<tr><td align="right">E-mail:</td><td>'.$_POST['email'].'</td></tr>';
			$mensaje .= '<tr><td align="right">Producto de interes:</td><td>'.$_POST['producto'].'</td></tr>';
			$mensaje .= '<tr><td align="right">Cantidad:</td><td>'.$_POST['cantidad'].'</td></tr>';
			$mensaje .= '<tr><td align="right">Medidas:</td><td>'.$_POST['medidas'].'</td></tr>';
			$mensaje .= '<tr><td align="right">Necesidad:</td><td>'.nl2br($_POST['mensaje']).'</td></tr>';
			$mensaje .= '</table>';
								
			$mail->setFrom('webmaster@bolsas-impresas.com','Pagina web [bolsas-impresas.com]');
			foreach ($arrEMails as $k => $v)
			{
				$mail->addAddress($v,$k);
			}
			$mail->Subject = 'Ventas';
			$mail->msgHTML($mensaje);
			$mail->AltBody = 'Para ver el mensaje, por favor, utilice un visor de correo electrónico compatible con HTML!';
			if (!$mail->send())
			{
				echo "Mailer Error: " . $mail->ErrorInfo;
			}
			header('Location: gracias.html');
		}
		else
		{
			header ('Location: index.html');
		}
		break;
	}
	case 'Ventas':
	{
		if(strlen($_POST['imagetext']) == 7 and isset($_SESSION['text']) and strtolower($_POST['imagetext']) == $_SESSION['text'])
		{
			if(trim($_POST['nombre']) <> '' and trim($_POST['telefono']) <> '' and trim($_POST['cantidad']) <> '' and trim($_POST['medidas']) <> '' and trim($_POST['email']) <> ''and trim($_POST['mensaje']) <> '')
			{
				$mensaje = '<table width="80%" border="1" align="center" cellpadding="0" cellspacing="0">';
				$mensaje .= '<tr><td align="right">Nombre:</td><td>'.$_POST['nombre'].'</td></tr>';
				$mensaje .= '<tr><td align="right">Telefono:</td><td>'.$_POST['telefono'].'</td></tr>';
				$mensaje .= '<tr><td align="right">Ciudad:</td><td>'.$_POST['ciudad'].'</td></tr>';
				$mensaje .= '<tr><td align="right">E-mail:</td><td>'.$_POST['email'].'</td></tr>';
				$mensaje .= '<tr><td align="right">Producto de interes:</td><td>'.$_POST['producto'].'</td></tr>';
				$mensaje .= '<tr><td align="right">Cantidad:</td><td>'.$_POST['cantidad'].'</td></tr>';
				$mensaje .= '<tr><td align="right">Medidas:</td><td>'.$_POST['medidas'].'</td></tr>';
				$mensaje .= '<tr><td align="right">Necesidad:</td><td>'.nl2br($_POST['mensaje']).'</td></tr>';
				$mensaje .= '</table>';
									
				$mail->setFrom('webmaster@bolsas-impresas.com','Pagina web [bolsas-impresas.com]');
				foreach ($arrEMails as $k => $v)
				{
					$mail->addAddress($v,$k);
				}
				$mail->Subject = 'Ventas';
				$mail->msgHTML($mensaje);
				$mail->AltBody = 'Para ver el mensaje, por favor, utilice un visor de correo electrónico compatible con HTML!';
				if (!$mail->send())
				{
					echo "Mailer Error: " . $mail->ErrorInfo;
				}
				header('Location: gracias.html');
			}
			else
			{
				header ('Location: noticias.php');
			}
		}
		else
		{
			header ('Location: noticias.php');
		}
		break;
	}
}
?>