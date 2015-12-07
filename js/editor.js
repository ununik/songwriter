function addChord(chord){
    var position = showCaretPos();
    var text = document.getElementById("editor").innerHTML;
    //text.innerText = addOnPosition(text.innerText, position, chord)
    text = text.replace("&nbsp;", "<br>");
    test(text, position, chord)
}
function getCaretCharacterOffsetWithin(element) {
    var caretOffset = 0;
    if (typeof window.getSelection != "undefined") {
        var range = window.getSelection().getRangeAt(0);
        var preCaretRange = range.cloneRange();
        preCaretRange.selectNodeContents(element);
        preCaretRange.setEnd(range.endContainer, range.endOffset);
        caretOffset = preCaretRange.toString().length;
    } else if (typeof document.selection != "undefined" && document.selection.type != "Control") {
        var textRange = document.selection.createRange();
        var preCaretTextRange = document.body.createTextRange();
        preCaretTextRange.moveToElementText(element);
        preCaretTextRange.setEndPoint("EndToEnd", textRange);
        caretOffset = preCaretTextRange.text.length;
    }
    return caretOffset;
}

function showCaretPos() {
    var el = document.getElementById("editor");
    return getCaretCharacterOffsetWithin(el);
}

function test(text, position, chord){
    ajaxCall('controllers/writer/test.php', function(xhr) {
        document.getElementById('editor').innerHTML = xhr.responseText;
    }, 'text=' + text + '&position=' + position + '&chord=' + chord)
}