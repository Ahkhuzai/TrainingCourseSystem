<?php
require_once 'Assist/Config/RedBeanPHP4_3_4/rb.php';

try { include 'Assist/Config/config.php';
            R::setup('mysql:host=localhost;dbname=' . $DBNAME, $DBUSERNAME, $DBPASSWORD);
            R::testConnection();
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
?>

