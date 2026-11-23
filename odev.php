<?php
$db = new PDO('sqlite:muzik.db');
$sorgu = $db->query("SELECT sarkiid, sarkiadi FROM Sarki");
$sarkilar = $sorgu->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Müzik Veritabanı</title>
</head>
<body>
    <h2>Şarkı Listesi</h2>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Şarkı Adı</th>
        </tr>

        <?php foreach ($sarkilar as $sarki): ?>
            <tr>
                <td><?php echo $sarki['sarkiid']; ?></td>
                <td><?php echo $sarki['sarkiadi']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>