$(document).ready(function (){

    $("button#postCommentMB").click(function (){
        alert("Your comment has been posted, update the comments to see it! ");
        $.post("addComment.php", $("#postMB").serialize());
    });
    
    $("button#loadMB").click(commentHandler);
    $("button#loadPC").click(commentHandlerPC);
    
    function commentHandler(){
        alert("Comments have been updated!");
        $(".commentbox").html("");
        
        $.get("classes/database/container.html", function(my_var){

            var n = my_var.split("\n");
            var tp = new Array();

            for (var k = 0; k < n.length; k++){
                tp[k] = n[k].substring(n[k].lastIndexOf("n>") + 2,n[k].lastIndexOf("</p"));
            }

            for (var i = 0; i < n.length; i++){
                var result = n[i].match($("#nickNamelabel").text());

                if(result == $("#nickNamelabel").text() && ($("#nickNamelabel").text() != "")){
                    var deleteComment = $("<form id = \"delMB\" method = \"POST\" onsubmit = \"return false\">");
                    $(n[i]).appendTo(deleteComment);
                    $("<input type=\"hidden\" name=\"delete\">").appendTo(deleteComment);
                    $("<input type=\"hidden\" value = \"meatballs\" name = \"commenttype\">").appendTo(deleteComment);
                    $("<input type='hidden' name='timestamp' value='" +
                    tp[i] + "'/></form>").appendTo(deleteComment);
                    $("<button>Delete</button>").click(deleteButtonHandler).appendTo(deleteComment);
                    $(deleteComment).appendTo(".commentbox");
                }
                else {
                    $(n[i]).appendTo(".commentbox");
                }
            }
        });
    }

    function deleteButtonHandler(){
        $.post("deleteComment.php", $(this).siblings("input").serialize());
        alert($(this).siblings("input").serialize());
    }
    
    function commentHandlerPC(){
        alert("Comments have been updated!");
        $(".commentbox").html("");
        
        $.get("classes/database/containerpancakes.html", function(my_var){

            var n = my_var.split("\n");
            var tp = new Array();

            for (var k = 0; k < n.length; k++){
                tp[k] = n[k].substring(n[k].lastIndexOf("n>") + 2,n[k].lastIndexOf("</p"));
            }

            for (var i = 0; i < n.length; i++){
                var result = n[i].match($("#nickNamelabelPC").text());

                if(result == $("#nickNamelabelPC").text() && ($("#nickNamelabelPC").text() != "")){
                    var deleteComment = $("<form id = \"delMB\" method = \"POST\" onsubmit = \"return false\">");
                    $(n[i]).appendTo(deleteComment);
                    $("<input type=\"hidden\" name=\"delete\">").appendTo(deleteComment);
                    $("<input type=\"hidden\" value = \"pancakes\" name = \"commenttype\">").appendTo(deleteComment);
                    $("<input type='hidden' name='timestamp' value='" +
                    tp[i] + "'/></form>").appendTo(deleteComment);
                    $("<button>Delete</button>").click(deleteButtonHandler).appendTo(deleteComment);
                    $(deleteComment).appendTo(".commentbox");
                }
                else {
                    $(n[i]).appendTo(".commentbox");
                }
            }
        });
    }
    function deleteButtonHandler(){
        $.post("deleteComment.php", $(this).siblings("input").serialize());
        alert(" Your comment has been deleted! "); // This should be changed!
    }
    
});