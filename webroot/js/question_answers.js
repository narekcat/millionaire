$(document).ready(function () {
    $("a.add_answer").click(function (event) {
        event.preventDefault();
        const MAXANSWERS = 4;
        var answerBoxesCount = $("div.answer_box").length;
        if (answerBoxesCount < MAXANSWERS) {
            var answerBox = $("div.answer_box:last");
            var newAnswerBox = answerBox.clone();
            newAnswerBox.children()[1].value = '';
            answerBox.after(newAnswerBox);;
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
