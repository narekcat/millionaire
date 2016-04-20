<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Game Questions'), ['controller' => 'GameQuestions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game Question'), ['controller' => 'GameQuestions', 'action' => 'add']) ?></li>
    </ul>
</nav> -->
<style>
    #answers {
        width: 90%;
        float: left;
    }

    label[for = 'right-answer'] {
        clear: both;
    }

    a.add_answer, a.delete_answer {
    	padding: 5px;
    	display: inline-block;
    	background-color: aliceblue;
    	margin: 3px;
    	border-radius: 5px;
    	text-align: center;
    	border: 1px solid gray;
    	line-height: 1em;
        width: 20px;
    }

    div.answer_box {
        clear: both;
    }
</style>

<script language = "javascript">
    $(document).ready(function () {
        $("a.add_answer").click(function (event) {
            event.preventDefault();
            const MAXANSWERS = 4;
            var answerBoxesCount = $("div.answer_box").length;
            if (answerBoxesCount < MAXANSWERS) {
                var answerBox = $("div.answer_box:last");
                var newAnswerBox = answerBox.clone();
                answerBox.after(newAnswerBox);
            }
        });

        $("a.delete_answer").click(function (event) {
            event.preventDefault();
            var answerBoxesCount = $("div.answer_box").length;
            if (answerBoxesCount > 1) {
                var lastAnswerBox = $("div.answer_box:last");
                lastAnswerBox.remove();
            }
        });
    });
</script>
<div class="questions form large-9 medium-8 columns content">
    <?= $this->Form->create($question) ?>
    <fieldset>
        <legend><?= __('Add Question') ?></legend>
        <?php
            echo $this->Form->input('question');
            echo $this->Form->input('answers', [
                'templates' => [
                    'inputContainer' => '<div class="answer_box input {{type}}{{required}}">{{content}}</div>',
                    'inputContainerError' => '<div class="answer_box input {{type}}{{required}} error">{{content}}{{error}}</div>'
                ],
                'name' => 'answers[]'
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
