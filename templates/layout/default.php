<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Book Shop';
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake', 'bootstrap.min', 'style']) ?>
    <?= $this->Html->script(['bootstrap.bundle.min']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><span>Book</span>Shop</a>
        </div>
        <div class="top-nav-links">
            <a rel="noopener" href="<?= $this->Url->build('/') ?>">Dashboard</a>
            <a rel="noopener" href="<?= $this->Url->build('/publishers') ?>">Publishers</a>
            <a rel="noopener" href="<?= $this->Url->build('/authors') ?>">Authors</a>
            <a rel="noopener" href="<?= $this->Url->build('/books') ?>">Books</a>
        </div>
        <?php
        if ($auth->isValid()) { ?>
            <div class="top-nav-links">
                <a rel="noopener" href="<?= $this->Url->build('/users/logout') ?>">Logout</a>
            </div>
        <?php } ?>
    </nav>
    <main class="main">
        <div class="container">
            <div class="flash-message"><?= $this->Flash->render() ?></div>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Select flash message elements
            const flashMessages = document.querySelectorAll('.flash-message');
            flashMessages.forEach(function (flashMessage) {
                // Set a timeout to hide the message after 2 seconds
                setTimeout(function () {
                    flashMessage.style.transition = "opacity 0.5s ease";
                    flashMessage.style.opacity = "0";
                    setTimeout(function () {
                        flashMessage.remove();
                    }, 500); // 500ms matches the fade-out duration
                }, 2000);
            });
        });
    </script>

</body>

</html>