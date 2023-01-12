<?php include_once $_SERVER['DOCUMENT_ROOT']."/php/header.php"; ?>

    <main>

        <h1>Games Available:</h1>

        <div class="games_list">
            <?php for ($i = 0; $i < count($games); $i++): ?>
                <a href="game.php?id=<?=$i?>" class="game">
                    <div>
                        <img src="<?= $games[$i]['img'] ?>" alt="no image">
                        <p><?= $games[$i]['about'] ?></p>
                    </div>
                </a>
            <?php endfor; ?>
        </div>

    </main>
    
<?php include_once $_SERVER['DOCUMENT_ROOT']."/php/footer.php"; ?>