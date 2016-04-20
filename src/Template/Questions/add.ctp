<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Game Questions'), ['controller' => 'GameQuestions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game Question'), ['controller' => 'GameQuestions', 'action' => 'add']) ?></li>
    </ul>
</nav> -->
<?= $this->Html->css('questions.css') ?>
<?= $this->Html->script('question_answers.js') ?>
<div class="questions form large-9 medium-8 columns content">
    <?= $this->Form->create($question) ?>
    <fieldset>
        <legend><?= __('Add Question') ?></legend>
        <?php
            echo $this->Form->input('question');
            echo $this->Form->input('answer', [
                'templates' => [
                    'inputContainer' => '<div class="answer_box input {{type}}{{required}}">{{content}}</div>',
                    'inputContainerError' => '<div class="answer_box input {{type}}{{required}} error">{{content}}{{error}}</div>'
                ],
                'name' => 'answers[]',
                'id' => 'answers'
            ]);
            echo $this->Html->link('+', '#', [
                'class' => 'add_answer'
            ]);
            echo $this->Html->link('-', '#', [
                'class' => 'delete_answer'
            ]);
            echo $this->Form->input('right_answer');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
