<?php
/* Recuperar os Dados do Formulário de Envio*/
$txtNome    = $_POST["nome"];
$txtTelefone    = $_POST["telefone"];
$txtEmail    = $_POST["email"];
$txtMensagem    = $_POST["mensagem"];
 
/* Montar o corpo do email*/
$corpoMensagem .= "<html><body class='clean-body' style='margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #FFFFFF'> <table class='nl-container' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #FFFFFF;width: 100%' cellpadding='0' cellspacing='0'> <tbody> <tr style='vertical-align: top'> <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top'> <div style='background-color:transparent;'> <div style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid '> <div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'> <div class='col num12' style='min-width: 320px;max-width: 600px;display: table-cell;vertical-align: top;'> <div style='background-color: transparent; width: 100% !important;'> <div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'> <div align='center' class='img-container center fixedwidth ' style='padding-right: 0px; padding-left: 0px;'> <img class='center fixedwidth' align='center' border='0' src='https://i.imgur.com/jbthbuO.png' alt='Image' title='Image' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: 0;height: auto;float: none;width: 100%;max-width: 360px' width='360'> </div> <div class=''> <div style='color:#555555;line-height:150%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 40px;'> <div style='font-size:12px;line-height:18px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'> <p style='margin: 0;font-size: 12px;line-height: 18px;text-align: center'> <span style='font-size: 24px; line-height: 36px;'> <span style='font-size: 34px; line-height: 51px;'>Formulário</span>&#160;</span> </p> </div> </div> </div> <div class=''> <div style='color:#555555;line-height:150%;font-family:Verdana, Geneva, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'> <div style='font-size:12px;line-height:18px;color:#555555;font-family:Verdana, Geneva, sans-serif;text-align:left;'> <p style='margin: 0;font-size: 12px;line-height: 18px'> <span style='font-size: 24px; line-height: 36px;'>Nome: $txtNome</span> </p> </div> </div> </div> <div class=''> <div style='color:#555555;line-height:120%;font-family:Verdana, Geneva, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'> <div style='font-size:12px;line-height:14px;font-family:Verdana, Geneva, sans-serif;color:#555555;text-align:left;'> <p style='margin: 0;font-size: 12px;line-height: 14px'> <span style='font-size: 24px; line-height: 28px;'>Telefone: $txtTelefone</span> </p> <p style='margin: 0;font-size: 12px;line-height: 14px'> <br data-mce-bogus='1'> </p> </div> </div> </div> <div class=''> <div style='color:#555555;line-height:120%;font-family:Verdana, Geneva, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'> <div style='font-size:12px;line-height:14px;color:#555555;font-family:Verdana, Geneva, sans-serif;text-align:left;'> <p style='margin: 0;font-size: 12px;line-height: 14px'> <span style='font-size: 12px; line-height: 14px;' id='_mce_caret' data-mce-bogus='1'> <span style='font-size: 24px; line-height: 28px;'>Email: $txtEmail</span> </span> <br data-mce-bogus='1'> </p> </div> </div> </div> <div class=''> <div style='color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'> <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;<p style='margin: 0;font-size: 12px;line-height: 14px'> <span style='font-size: 12px; line-height: 14px;' id='_mce_caret' data-mce-bogus='1'> <span style='font-size: 24px; line-height: 28px;color:#555555;margin-left:10px'>Mensagem: $txtMensagem</span> </span> <br data-mce-bogus='1'> </p> </div> </div> </div> <div align='center' class='img-container center fixedwidth ' style='padding-right: 0px; padding-left: 0px;'> <div style='line-height:35px;font-size:1px'>&#160;</div> <a href='http://www.estartandodevs.com.br/' target='_blank'> <img class='center fixedwidth' align='center' border='0' src='https://i.imgur.com/RmXiGYj.png' alt='Image' title='Image' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;width: 100%;max-width: 120px' width='120'> </a> <div style='line-height:30px;font-size:1px'>&#160;</div> </div> </div> </div> </div> </div> </div> </div> </td> </tr> </tbody> </table></body></html>";
 
/* Extender a classe do phpmailer para envio do email*/
require_once("phpmailer/class.phpmailer.php");
 
/* Definir Usuário e Senha do Gmail de onde partirá os emails*/
define('GUSER', 'contatogeneralgoods@gmail.com'); 
define('GPWD', '309gg309');
 
function smtpmailer($para, $de, $nomeDestinatario, $assunto, $corpo) { 
    global $error;
    $mail = new PHPMailer();
    /* Montando o Email*/
    $mail->IsSMTP();            /* Ativar SMTP*/
    $mail->SMTPDebug = 0;        /* Debugar: 1 = erros e mensagens, 2 = mensagens apenas*/
    $mail->SMTPAuth = true;        /* Autenticação ativada    */
    $mail->SMTPSecure = 'tls';    /* TLS REQUERIDO pelo GMail*/
    $mail->Host = 'smtp.gmail.com';    /* SMTP utilizado*/
    $mail->Port = 587;             /* A porta 587 deverá estar aberta em seu servidor*/
    $mail->Username = GUSER;
    $mail->Password = GPWD;
    $mail->SetFrom($de, $nomeDestinatario);
    $mail->Subject = $assunto;
    $mail->Body = $corpo;
    $mail->AddAddress($para);
    $mail->IsHTML(true);
 
    /* Função Responsável por Enviar o Email*/
    if(!$mail->Send()) {
        $error = "<font color='red'><b>Mail error: </b></font>".$mail->ErrorInfo; 
        return false;
    } else {
        $error = "<font color='blue'><b>Mensagem enviada com Sucesso!</b></font>";
        return true;
    }
}
 
/* Passagem dos parametros: email do Destinatário, email do remetente, nome do remetente, assunto, mensagem do email.*/
 if (smtpmailer($txtEmail, 'contatogeneralgoods@gmail.com', 'GeneralGoods', 'Contato cliente', $corpoMensagem)) {
     Header("location: ../contato.html");
}
if (!empty($error)) echo $error;
?>