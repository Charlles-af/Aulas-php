<div class="titulo">Integração HTML</div>

<h1>
    <?php
    echo 'Olá'; 
    echo '<small> Mundo! </small>';
    ?>
</h1>

<?= "<div>Outra Forma de me 'expressar'!</div>" ?>

<br>

<style>
    button {
        padding: 5px 20px;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }
</style>

<div><button><?= "Legal" ?></button></div>