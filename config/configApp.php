<?php
//Conexión de la base de datos
    const SERVER="localhost";
    const DB="kohaku";
    const USER="root";
    const PASS="50430";

    const SGBD= "mysql:host=".SERVER.";dbname=".DB;
    
    //LLAVES SECRETASV NO SEPUEDEN CONFIGUAL AL GUARDAR EN LA DB
    const METHOD = "AES-256-CBC";
	const SECRET_KEY ='$SISKHK@2021';
	const SECRET_IV = '2026591';