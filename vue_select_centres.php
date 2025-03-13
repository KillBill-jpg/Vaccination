<h3> Liste des centres de vaccinations </h3>

<?php
if (isset($_POST['modifier'])) {
    $idcentre = $_POST['idcentre'];
    $tab = [
        'nom' => $_POST['nom'],
        'adresse' => $_POST['adresse'],
        'typecentre' => $_POST['typecentre'],
        'telephone' => $_POST['telephone']
    ];

    editCentre($idcentre, $tab);
    
    // Redirection après modification
    header("Location: index.php?page=2");
    exit();
}
?>

<table border="1">
    <tr>
        <th>ID Centre</th>
        <th>Nom du Centre</th>
        <th>Adresse</th>
        <th>Type du Centre</th>
        <th>Téléphone</th>
        <th>Opérations</th>
    </tr>

    <?php
    foreach ($lesCentres as $unCentre) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($unCentre['idcentre']) . "</td>";
        echo "<td>" . htmlspecialchars($unCentre['nom']) . "</td>";
        echo "<td>" . htmlspecialchars($unCentre['adresse']) . "</td>";
        echo "<td>" . htmlspecialchars($unCentre['typecentre']) . "</td>";
        echo "<td>" . htmlspecialchars($unCentre['telephone']) . "</td>";
        echo "<td>";
        echo "<a href='index.php?page=2&action=sup&idcentre=" . urlencode($unCentre['idcentre']) . "'>
                <img src='images/supprimer.png' height='30' width='30' alt='Supprimer'>
              </a> ";
        echo "<a href='index.php?page=2&action=edit&idcentre=" . urlencode($unCentre['idcentre']) . "'>
                <img src='images/editer.png' height='30' width='30' alt='Éditer'>
              </a>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>
