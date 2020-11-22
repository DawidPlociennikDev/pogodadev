<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    function sendVerifyCode($email) {
        require 'application/libraries/mailer/config.php';
        require 'application/libraries/mailer/functions.php';
        require 'application/libraries/mailer/PHPMailerAutoload.php';
        $CI = &get_instance();
        $_POST['code_verify'] = randomCode();
        $insert['code_verify'] = $_POST['code_verify'];
        $CI->back_m->update_by_email('users', $insert, $email);
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = $cfg['smtp_host'];
        $mail->SMTPAuth = true;         
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->Username = $cfg['smtp_user'];
        $mail->Password = $cfg['smtp_pass'];
        $mail->Port = $cfg['smtp_port'];
        $mail->setFrom($cfg['smtp_user'], 'PWSZ Legnica - kod weryfikacyjny do Twojego logowania');
        $mail->AddBCC($email);
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = 'PWSZ Legnica - kod weryfikacyjny do Twojego logowania';
        $mail->Body    = build_mail_body($_POST, 'new_password.php');
        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            exit;
        }
    }

    function randomCode() {
        $alphabet = '1234567890';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        $pass[] = 1;
        return implode($pass);
    }

    function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        $pass[] = 1;
        return implode($pass);
    }

    function hashPassword($password) {
        $options = ['cost' => 12];
        $encripted_pass = password_hash($password, PASSWORD_BCRYPT, $options);
        return $encripted_pass;
    }

    function send_new_password($id, $email) {
        $new_password = randomPassword();
        $CI = &get_instance();
        $CI->load->library('email');          
        $config = array(
            'smtp_host' =>"smtp.adawards.pl",
            'smtp_user' =>"no-reply-car@adawards.pl",
            'smtp_pass' =>"8lllRuWL4H",
            'smtp_port' =>"587",
            'smtp_timeout' =>"30",
            'mailtype'  =>"html",
        );
        $CI->email->initialize($config);
        $CI->email->from('no-reply-car@adawards.pl', 'Resetowanie hasła');
        $CI->email->to($email);
        $CI->email->subject('Twoje nowe hasło!');
        $CI->email->message('Twoje nowe hasło do panelu to:<br><h4><strong>'.$new_password.'</strong></h4>');
        if($CI->email->send()) {
            $update['password'] = hashPassword($new_password);
            $CI->back_m->update('users', $update, $id);
            $CI->session->set_flashdata('flashdata', 'Na Twój adres e-mail zostało wysłane nowe hasło do panelu');
            return true;
        } else {
            $CI->session->set_flashdata('flashdata', 'Błąd podczas wysyłania wiadomości. Hasło NIE zostało zmienione');
            return false;
        }
    }