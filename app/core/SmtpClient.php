<?php
/**
 * SmtpClient — A lightweight SMTP transport for PHP
 * Handles SSL/TLS connections and authentication without external dependencies.
 */
class SmtpClient {
    private $host;
    private $port;
    private $user;
    private $pass;
    private $timeout = 30;
    private $socket;

    public function __construct($host, $port, $user, $pass) {
        $this->host = $host;
        $this->port = $port;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function send($to, $subject, $body, $fromName, $fromEmail) {
        try {
            $this->connect();
            $this->command("EHLO " . $_SERVER['HTTP_HOST']);
            $this->command("AUTH LOGIN");
            $this->command(base64_encode($this->user));
            $this->command(base64_encode($this->pass));
            $this->command("MAIL FROM: <" . $this->user . ">");
            $this->command("RCPT TO: <" . $to . ">");
            $this->command("DATA");
            
            $headers = [
                "MIME-Version: 1.0",
                "Content-type: text/html; charset=UTF-8",
                "To: <$to>",
                "From: $fromName <$this->user>",
                "Subject: $subject",
                "Reply-To: <$fromEmail>",
                "Date: " . date("r"),
                "Message-ID: <" . time() . " @ " . $this->host . ">"
            ];
            
            $content = implode("\r\n", $headers) . "\r\n\r\n" . $body . "\r\n.";
            $this->command($content);
            $this->command("QUIT");
            $this->disconnect();
            return true;
        } catch (Exception $e) {
            error_log("SMTP Error: " . $e->getMessage());
            return false;
        }
    }

    private function connect() {
        $remote = "ssl://" . $this->host;
        $this->socket = @fsockopen($remote, $this->port, $errno, $errstr, $this->timeout);
        if (!$this->socket) {
            throw new Exception("Could not connect to $remote: $errstr ($errno)");
        }
        $this->getResponse();
    }

    private function command($cmd) {
        fwrite($this->socket, $cmd . "\r\n");
        return $this->getResponse();
    }

    private function getResponse() {
        $response = "";
        while ($line = fgets($this->socket, 515)) {
            $response .= $line;
            if (substr($line, 3, 1) == " ") break;
        }
        return $response;
    }

    private function disconnect() {
        if ($this->socket) fclose($this->socket);
    }
}
