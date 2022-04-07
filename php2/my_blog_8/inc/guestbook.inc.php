<h2>Unser Gästebuch </h2>
<form action="inc/guestbook_insert.php" method="POST" class="registrierung">
    <fieldset>
        <legend>Pflichtfelder</legend>
        <input type="text" name="titel" placeholder="Titel eingeben" required>
        <textarea name="comment" placeholder="Kommentar schreiben"></textarea>
        <input type="hidden" name="userid" value="<?= $_SESSION['id'] ?>">                  <!-- hidden damit das Feld für den User nicht sichtbar ist -->
    </fieldset>
    <?php if(isset($_SESSION['eingeloggt'])):?>
    <input type="submit" value="Kommentar schicken">
    <?php else:?>
        <strong>Nach der Anmeldung können Sie sich im Gästebuch verewigen</strong>
    <?php endif;?>
</form>
<!-- ======================================================================== -->

<article>
    <h2>Gästebucheinträge</h2>
    <?php
    $sql = 'SELECT *, guestbook.CREATED_AT AS datum FROM guestbook INNER JOIN users
                    ON
                    guestbook.user_id = users.id
                    ORDER BY guestbook.created_at DESC';
    $st = $db->query($sql);
    $daten = $st->fetchAll();

    $count = $st->rowCount();

    if($count < 1) {
        echo 'Keine Einträge vorhanden';
    } else {
        echo '<p>'.$count.' Kommentare</p>';
    //========================================================================
    $pro_seite = 5;
    if($count % $pro_seite === 0) {
        $max = $count / $pro_seite;
    } else {
        $max = $count / $pro_seite + 1;
    }

    
    $sql2 = 'SELECT * FROM guestbook INNER JOIN users
                        ON
                        guestbook.user_id = users.id
                        ORDER BY guestbook.created_at DESC
                        LIMIT 0, 5';
    $st2 = $db->query($sql2);
    $daten2 = $st2->fetchAll();
    foreach($daten2 AS $values):
    ?>
<section class="gastbook">
    <h3 class="header"><?= bereinige($values['titel'])?></h3>
    <p class="datum">Geschrieben von: <?= bereinige($values['name'])?></p>
    <p class="ueber"><?= nl2br(bereinige($values['post']))?></p>
</section>

<?php endforeach;?>
<div>
    <?php
    for($i = 1; $i <= $max; $i++) {
    ?>
    <a href="index.php?page=guestbook&seite=<?= $i ?>"> <?= $i ?></a>
    <?php
    }
    //ende else
?>
</div>
</article>
<?php
    }
    //ende else
?>