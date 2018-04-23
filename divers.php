<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: index.php');
    exit();
}
?>

<html>
<head>
<title>Paris divers | Pronostics coupe du monde 2018</title>
    <link href='https://fonts.googleapis.com/css?family=Mina'
    rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans'
    rel='stylesheet'>
    <link href='style.css' rel='stylesheet' type='text/css'>
</head>
<body>
    <div align="left">
        <font style="font-family: 'Mina'; font-size: 20px;"><a href="index.php"><b>Pronostics CDM 2018</b></a></font>
    </div>
    <div align="right">
        <font style="font-family: 'Open Sans'; font-size: 20px;"><a href="logout.php">Déconnexion</a></font>
    </div><br/>
    <div align="center">
        <?php
        include('connect.php');
        ?>
        <font style="font-family: 'Open Sans'; font-size: 30px;"><b>Considérations sportives autres</b><br/><br/></font>
    </div>
    <table width="100%" align="center">
        <tr>
            <td width="20%" align="center">
                <font style="font-family: 'Open Sans'; font-size: 15px;"><a href="predictions.php">Matchs individuels</a></font><br/><br/>
            </td>
            <td width="20%" align="center">
                <font style="font-family: 'Open Sans'; font-size: 15px;"><a href="groupes.php">Toute la compétition</a></font><br/><br/>
            </td>
            <td width="20%" align="center">
                <font style="font-family: 'Open Sans'; font-size: 15px;"><b>Paris divers</b></font><br/><br/>
            </td>
        </tr>
    </table>
    <table width="100%" align="left">
        <tr>
            <form method="post" action="divers.php">
                <td width="50%" align="right">
                    <br/>
                    <font style="font-family: 'Open Sans'; font-size: 20px;">Nombre de buts marqués pendant la compétition</font>
                    <input type="text" name="buts" size="5"/><br/><br/>
                    <font style="font-family: 'Open Sans'; font-size: 20px;">Nombre de buts marqués par la France</font>
                    <input type="text" name="buts_fr_ok" size="5"/><br/><br/>
                    <font style="font-family: 'Open Sans'; font-size: 20px;">Nombre de buts encaissés par la France</font>
                    <input type="text" name="buts_fr_ko" size="5"/><br/><br/>
                    <font style="font-family: 'Open Sans'; font-size: 20px;">Nombre de cartons pendant la compétition</font>
                    <input type="text" name="cartons" size="5"/><br/><br/>
                    </form>
                </td>
                <td width="50%" align="center">
                    <input type="submit" value="Je valide"/>
                </td>
            </form>
        </tr>
    </table>
</body>
</html>