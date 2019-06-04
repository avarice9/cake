<h1>
All Users by Role: 
<?= $this->Text->toList($roles) ; ?>
</h1>

<section>
<?php
    foreach($users as $user) {
        ?>
        <article>
        <h4><?= $this->Html-link($user->email, $user->email)?></h4>
        <small><?= h($user->email)?></small>
        </article>
        <?php
    }
?>
</section>