<?php
header('Content-Type: application/json');

// Configuration
$smtpHost = 'smtp.ionos.mx';
$smtpPort = 587;
$smtpUsername = 'sales.connection@frucoiqfcorporation.mx';
$smtpPassword = 'qubby1-sasxir-riWqyc';
$fromEmail = 'sales.connection@frucoiqfcorporation.mx';
$toEmail = 'sales.connection@frucoiqfcorporation.mx';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

if (empty($name) || empty($email) || empty($message)) {
    echo json_encode(['success' => false, 'message' => 'Todos los campos son obligatorios']);
    exit;
}

// Simple SMTP Client
class SimpleSMTP
{
    private $socket;
    private $host;
    private $port;
    private $username;
    private $password;

    public function __construct($host, $port, $username, $password)
    {
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
    }

    public function send($from, $to, $subject, $body)
    {
        $this->socket = fsockopen($this->host, $this->port, $errno, $errstr, 30);
        if (!$this->socket) {
            throw new Exception("Connection failed: $errstr ($errno)");
        }

        $this->read();
        $this->cmd("EHLO " . $this->host);
        $this->cmd("STARTTLS");
        stream_socket_enable_crypto($this->socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT);
        $this->cmd("EHLO " . $this->host);
        $this->cmd("AUTH LOGIN");
        $this->cmd(base64_encode($this->username));
        $this->cmd(base64_encode($this->password));
        $this->cmd("MAIL FROM: <$from>");
        $this->cmd("RCPT TO: <$to>");
        $this->cmd("DATA");

        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
        $headers .= "From: $from\r\n";
        $headers .= "Reply-To: $from\r\n";
        $headers .= "Subject: $subject\r\n";

        $this->cmd($headers . "\r\n" . $body . "\r\n.");
        $this->cmd("QUIT");
        fclose($this->socket);
        return true;
    }

    private function cmd($command)
    {
        fputs($this->socket, $command . "\r\n");
        return $this->read();
    }

    private function read()
    {
        $response = "";
        while ($str = fgets($this->socket, 515)) {
            $response .= $str;
            if (substr($str, 3, 1) == " ")
                break;
        }
        return $response;
    }
}

try {
    $smtp = new SimpleSMTP($smtpHost, $smtpPort, $smtpUsername, $smtpPassword);

    $subject = "Nuevo mensaje de contacto de $name";
    $body = "
        <h2>Nuevo mensaje de contacto</h2>
        <p><strong>Nombre:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Mensaje:</strong><br>$message</p>
    ";

    $smtp->send($fromEmail, $toEmail, $subject, $body);
    echo json_encode(['success' => true, 'message' => 'Mensaje enviado correctamente']);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Error al enviar el correo: ' . $e->getMessage()]);
}
?>