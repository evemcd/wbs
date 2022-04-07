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

    foreach($daten AS $werte){
    ?>
    <section class="gastbook">
        <h3 class="header"> -- <?= $werte['titel'] ?> -- </h3>
        <p class="datum">
            Geschrieben von: <?= bereinige($werte['name'])?>
            am: <?= formatiereDatum($werte['created_at'])?>
        </p>
        <p class="ueber"> <?= nl2br(bereinige($werte['post']))?> </p>
    </section>
    <?php }?>
</article>