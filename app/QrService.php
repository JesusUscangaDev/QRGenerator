<?php
require __DIR__ . '/../vendor/autoload.php';

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

/**
 * Clase responsable de generar códigos QR.
 * Principio de responsabilidad única (SRP).
 */
class QrService
{
    /**
     * Genera un QR en Base64 a partir de un texto.
     *
     * @param string $text Texto a codificar
     * @return string Base64 del QR generado
     */
    public function generateBase64(string $text): string
    {
        $qrCode = new QrCode($text);
        $writer = new PngWriter();
        $result = $writer->write($qrCode);

        return base64_encode($result->getString());
    }
}
