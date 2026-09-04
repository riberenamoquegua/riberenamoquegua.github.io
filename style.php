<?php
// ==========================================
// SISTEMAS SUREÑOS - CSS OCULTO
// PROHIBIDA SU COPIA O DISTRIBUCIÓN
// ==========================================

// Si alguien intenta acceder directamente, redirigir
if ($_SERVER['REQUEST_METHOD'] === 'GET' && !isset($_SERVER['HTTP_REFERER'])) {
    header('Location: https://www.radiolakritikatropical.com/');
    exit;
}

// Verificar que viene de tu propio dominio
$referer = $_SERVER['HTTP_REFERER'] ?? '';
$dominio = 'radiolakritikatropical.com'; // Cambia por tu dominio

if (strpos($referer, $dominio) === false) {
    header('Location: https://www.google.com/');
    exit;
}

// Si pasa las validaciones, mostrar el CSS
header('Content-Type: text/css');
echo "/* ========================================== */\n";
echo "/* SISTEMAS SUREÑOS - TODOS LOS DERECHOS RESERVADOS */\n";
echo "/* +51 912 985 640 */\n";
echo "/* ========================================== */\n\n";
?>

/* ==========================================
   /* =========================
   style.css - COMPLETO
   DESARROLLADO POR SISTEMAS SUREÑOS
   +51 912 985 640
========================= */

/* LOGO */
.marco2 .gerente {
  width: 22%;
  float: left;
  margin-left: 20px;
  box-sizing: border-box;
}

.marco2 .gerente img {
  width: 260px;
  max-width: 100%;
  height: auto;
  display: block;
}

/* INFO (REDES + CONTACTO) */
.marco2 .info {
  width: 70%;
  float: right;
  color: #fff;
  box-sizing: border-box;
  padding: 0 8px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.marco2 .info-col {
  width: 48%;
  box-sizing: border-box;
}

/* TÍTULOS - LÍNEA VERDE */
.marco2 .info-title {
  color: #fff !important;
  font-family: Arial, Helvetica, sans-serif !important;
  font-size: 16px !important;
  line-height: 20px !important;
  font-weight: bold !important;
  margin: 0 0 12px 0 !important;
  padding: 0 0 6px 0 !important;
  position: relative;
}

.marco2 .info-title:after {
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  width: 28px;
  height: 2px;
  background: #00c853;
  border-radius: 5px;
}

/* REDES SOCIALES */
.marco2 .footer-redes {
  display: flex;
  gap: 10px;
  flex-wrap: wrap;
  margin-bottom: 10px;
}

.marco2 .footer-redes a {
  width: 38px !important;
  height: 38px !important;
  border-radius: 50%;
  display: flex !important;
  align-items: center;
  justify-content: center;
  padding: 0 !important;
  margin: 0 !important;
  text-decoration: none !important;
  box-sizing: border-box;
  transition: all .3s ease;
}

.marco2 .footer-redes a i {
  font-size: 18px !important;
  color: #fff !important;
  line-height: 1;
}

.marco2 .footer-redes .red-whatsapp {
  background: #25D366;
  border: 2px solid #25D366;
}
.marco2 .footer-redes .red-facebook {
  background: #1877F2;
  border: 2px solid #1877F2;
}
.marco2 .footer-redes .red-youtube {
  background: #FF0000;
  border: 2px solid #FF0000;
}
.marco2 .footer-redes .red-tiktok {
  background: #000;
  border: 2px solid #333;
}

.marco2 .footer-redes a:hover {
  transform: translateY(-3px);
  filter: brightness(1.2);
}

/* CONTACTO */
.marco2 .info-contacto {
  margin: 0;
  padding: 0;
  color: #ffffff;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 14px;
  line-height: 30px;
}

.marco2 .info-contacto i {
  color: #ffffff !important;
  font-size: 15px !important;
  width: 22px;
  text-align: center;
}

.marco2 .info-contacto span {
  padding-left: 10px;
  color: #ffffff;
  font-size: 14px !important;
}

.marco2 .info-contacto a {
  color: #ffffff !important;
  font-size: 14px !important;
  text-decoration: none !important;
}

.marco2 .info-contacto a:hover {
  color: #00c853 !important;
}

/* COPYRIGHT */
.marco2 .footer-copy {
  border-top: 1px solid #211e4d;
  color: #ffffff !important;
  font-family: Arial, Helvetica, sans-serif !important;
  font-size: 13px !important;
  line-height: 22px !important;
  padding: 12px 10px !important;
  margin-top: 10px !important;
  text-align: center;
  clear: both;
}

.marco2 .footer-copy a {
  color: #ffffff !important;
  font-size: 13px !important;
  text-decoration: none !important;
}

.marco2 .footer-copy a:hover {
  color: #00c853 !important;
}

.marco2 .footer-copy strong {
  color: #ffffff !important;
  font-size: 13px !important;
  transition: color .3s ease;
}

.marco2 .footer-copy strong:hover {
  color: #00c853 !important;
}

/* CELULAR */
@media only screen and (max-width: 720px) {
  .marco2 .gerente {
    width: 100%;
    float: none;
    text-align: center;
    margin-left: 0;
    margin-bottom: 15px;
  }
  .marco2 .gerente img {
    margin: auto;
  }
  .marco2 .info {
    width: 100%;
    float: none;
    text-align: center;
    padding: 0;
  }
  .marco2 .info-col {
    width: 100%;
    margin-bottom: 15px;
  }
  .marco2 .info-title {
    text-align: center !important;
  }
  .marco2 .info-title:after {
    left: 50%;
    transform: translateX(-50%);
  }
  .marco2 .footer-redes {
    justify-content: center;
  }
  .marco2 .info-contacto {
    text-align: center;
  }
}
========================================== */

.marco2 .gerente {
  width: 22%;
  float: left;
  margin-left: 20px;
  box-sizing: border-box;
}

/* ... resto del CSS ... */
