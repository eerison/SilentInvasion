<form method="post">
    <label>
        user
        <input type="text" name="user">
    </label>
    <button type="submit">login</button>
    <button type="button" onclick="alert(document.cookie)">cookie</button>
</form>

<a href="?logout=true">sair</a>
<?php
session_start();

if($_POST['user'])
    $_SESSION['user'] = $_POST['user'];

if($_GET['logout'])
    session_destroy();

if($_SESSION['user'])
    echo 'Logado com : ' . $_SESSION['user'];


