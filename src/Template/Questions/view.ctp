<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Question'), ['action' => 'edit', $question->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Question'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Game Questions'), ['controller' => 'GameQuestions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game Question'), ['controller' => 'GameQuestions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questions view large-9 medium-8 columns content">
    <h3><?= h($question->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Question') ?></th>
            <td><?= h($question->question) ?></td>
        </tr>
        <tr>
            <th><?= __('Answers') ?></th>
            <td><?= h($question->answers) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($question->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Right Answer') ?></th>
            <td><?= $this->Number->format($question->right_answer) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($question->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($question->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Game Questions') ?></h4>
        <?php if (!empty($question->game_questions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Game Id') ?></th>
                <th><?= __('Question Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($question->game_questions as $gameQuestions): ?>
            <tr>
                <td><?= h($gameQuestions->id) ?></td>
                <td><?= h($gameQuestions->game_id) ?></td>
                <td><?= h($gameQuestions->question_id) ?></td>
                <td><?= h($gameQuestions->created) ?></td>
                <td><?= h($gameQuestions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'GameQuestions', 'action' => 'view', $gameQuestions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'GameQuestions', 'action' => 'edit', $gameQuestions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'GameQuestions', 'action' => 'delete', $gameQuestions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gameQuestions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
