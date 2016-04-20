<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <!-- <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li> -->
        <!-- <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li> -->
        <li><?= $this->Html->link(__('New Game Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Game Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $isLoggedIn ? $this->Html->link(__('Log Out'), ['controller' => 'Users', 'action' => 'logout']) : '' ?></li>
    </ul>
</nav>
