/**
 * Created by hallak on 4/26/17.
 */

$(document).ready(function() {
    $('pre code').each(function(i, block) {
        hljs.highlightBlock(block);
    });
    $('textarea').each(function(i, block) {
        hljs.highlightBlock(block);
    });

    $(".run-button").click(function () {
        var userQuery = $("#enteredQuery").val();

        var request = $.ajax({
            type: "POST",
            url: "backend.php",
            data: {
                query: userQuery
            }
        });

        request.done(function(data){
            $(".queryResultBody").append(data);
        });

    });


});