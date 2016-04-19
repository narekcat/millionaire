<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Game'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Game Questions'), ['controller' => 'GameQuestions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game Question'), ['controller' => 'GameQuestions', 'action' => 'add']) ?></li>
        <li><?= $isLoggedIn ? $this->Html->link(__('Log Out'), ['controller' => 'Users', 'action' => 'logout']) : '' ?></li>
    </ul>
</nav>