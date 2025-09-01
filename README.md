# Generador de Códigos QR - Jesús Uscanga

Este proyecto es un **Generador de Códigos QR** en PHP que permite a cualquier usuario crear códigos QR de forma libre y descargar la imagen generada. Está desarrollado siguiendo buenas prácticas de **Clean Code** y principios **SOLID**, con una estructura modular y frontend responsivo usando **Bootstrap 5**.

---

## 🎨 Paleta de colores

- **Fondo:** `#e4e2dd`  
- **Títulos:** `#293a84`  
- **Texto principal:** `#292929`  
- **Botones:** `#293a84` (hover `#292929`)  

---

## 📂 Estructura del proyecto

```
/tu-proyecto
├── index.php              # Entrada principal
├── composer.json
├── composer.lock
├── /vendor                # Dependencias de Composer
├── /app                   # Código PHP de la aplicación
│   ├── QrService.php      # Clase para generar QR
│   └── config.php         # Configuración (colores, parámetros)
└── /views                 # Archivos de vista / layout
    ├── header.php         # Header común con estilos y bootstrap
    └── footer.php         # Footer con redes y créditos
```

---

## ⚙️ Instalación

1. **Clonar el repositorio:**
   ```bash
   git clone <url-del-repositorio>
   cd <nombre-del-proyecto>
   ```

2. **Instalar dependencias usando Composer:**
   ```bash
   composer install
   ```

3. **Este proyecto requiere las librerías:**
   - `endroid/qr-code`
   - `phpmailer/phpmailer` (opcional si decides enviar QR por email)

4. **Abrir `index.php` en tu servidor local o remoto con soporte PHP 8+.**

---

## 🖥️ Uso

1. Abrir la página en el navegador.
2. Escribir el texto, URL o información que quieras codificar en el formulario.
3. Presionar "Generar QR".
4. Visualizar el código QR generado y descargarlo con el botón "Descargar QR".
5. Se muestra el texto usado para generar el QR justo arriba de la imagen.

---

## 📌 Características

- Generación de QR en Base64, sin necesidad de guardar archivos temporales.
- Página responsiva y accesible desde cualquier dispositivo.
- Footer con información de contacto y enlaces a redes sociales del autor.
- Código modular, siguiendo principio de responsabilidad única (SRP).

---

## 🔗 Redes del autor

- **LinkedIn:** [Jesús Uscanga](https://linkedin.com/in/jesus-uscanga)
- **Instagram:** [@soyjesususcanga](https://instagram.com/soyjesususcanga)
- **TikTok:** [@soyjesususcanga24](https://tiktok.com/@soyjesususcanga24)
- **YouTube:** [JesusUscangaMx](https://youtube.com/@JesusUscangaMx)

---

## 📄 Licencia

Este proyecto es de acceso libre y puede ser utilizado, modificado y distribuido libremente.

