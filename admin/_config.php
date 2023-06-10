<?php

define('BASEURL', 'http://localhost/desawisataapar/admin');

$db = new mysqli('localhost', 'root', '', 'db_desawisataapar');

if ($db->connect_errno > 0) {
    die('Gagal koneksi ke database');
}
