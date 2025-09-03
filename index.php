<?php
// Archivo principal: recibe POST, usa QrService y renderiza vistas
require __DIR__ . '/app/QrService.php';

$qrService = new QrService();
$qrBase64 = null;
$textoGenerado = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $textoGenerado = htmlspecialchars($_POST['text'], ENT_QUOTES, 'UTF-8');
    $qrBase64 = $qrService->generateBase64($textoGenerado);
}

// Incluir header
include __DIR__ . '/views/header.php';
?>

<!-- Instrucciones -->
<div class="text-center mb-4">
    <h1>Generador de Códigos QR</h1>
    <p class="lead">
        Escribe cualquier texto, URL o información en el campo de abajo y genera tu propio código QR. 
        <br> Esta herramienta es de acceso libre y no requiere registro.
    </p>
</div>

<!-- Formulario -->
<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="qr-box">
            <form method="POST" class="mb-3">
                <div class="mb-3">
                    <label for="text" class="form-label">Texto o enlace para codificar</label>
                    <input type="text" class="form-control" id="text" name="text" required>
                </div>
                <button type="submit" class="btn btn-custom w-100">Generar QR</button>
            </form>

            <?php if ($qrBase64 && $textoGenerado): ?>
                <div class="text-center">
                    <h3 class="mb-3">QR generado con el texto:</h3>
                    <p><strong><?= $textoGenerado ?></strong></p>
                    <img src="data:image/png;base64,<?= $qrBase64 ?>" 
                         alt="QR Code" class="img-fluid mb-3" style="max-width:300px;">
                    <br>
                    <a href="data:image/png;base64,<?= $qrBase64 ?>" 
                       download="qr.png" class="btn btn-custom">Descargar QR</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php include __DIR__ . '/views/footer.php'; ?>
