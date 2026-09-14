<?php
session_start();
require	'cek_session.php';	//	proteksi	halaman	(dibahas	di	bagian	5)
?>
<!DOCTYPE	html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .log{
             width: 100%;
            padding: 3px;
            background: #ff4757;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body class="theme-music">
    <h1>Selamat	datang,	<?php	echo	$_SESSION['user'];	?></h1>
    <p>Role	kamu:	<?php	echo	$_SESSION['role'];	?></p>
    
    <a class="log"	href="logout.php">Logout</a>
</body>
</html

