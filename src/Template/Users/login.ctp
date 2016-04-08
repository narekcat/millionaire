<h1>Login</h1>
<h5><?= $this->Html->link('Registration', ['action' => 'add']) ?></h5>
<?= $this->Form->create() ?>
<?= $this->Form->input('email') ?>
<?= $this->Form->input('password') ?>
<?= $this->Form->button('Login') ?>
<?= $this->Form->end() ?>
