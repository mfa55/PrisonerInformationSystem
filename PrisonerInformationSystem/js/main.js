/**
 * Created by hallak on 4/26/17.
 */

$(document).ready(function() {
    $('pre code').each(function(i, block) {
        hljs.highlightBlock(block);
    });
});