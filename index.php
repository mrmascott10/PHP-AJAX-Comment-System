<!-- Connect to database -->
<?php include 'db_connection.php' ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Index</title>
  </head>
  <style>
  * {
    box-sizing:border-box
  }
  .commentForm {
    width: 100%;
    color: #2a2e2e;
    cursor: text;
    resize: none;
    display: block;
    padding: 6px 0 6px 8px;
    line-height: 1.4;
    font-size: 18px;
    transition: all .15s ease-in-out;
    overflow: auto;
    background: #fff;
    border: 2px solid #dbdfe4;
    border-radius: 4px 4px 0 0;
    border-bottom: none;
  }

  .nameForm {
    border-radius: 4px;
    border: solid 2px #dbdfe4; 
    position: absolute;
    top: 0;
    left: 65px;
    right: 0;
    width: 81%;
  }

  .commentFormSubmit {
    border: none;
    background: rgba(29,47,58,.6);
    display: inline-block;
    color: #fff;
    line-height: 1.1;
    transition: background .2s;
    margin: -2px;
    white-space: nowrap;
    border-radius: 0 0 0 3px;
    font-size: 12px;
    padding: 12px 14px 13px;
    font-weight: 700;
  }
  .commentFormSubmit:hover {
    background: rgba(29,47,58,.7);
    color: #fff;
    cursor: pointer;
    transition: linear .3s;
  }
  .pp {
    border-radius: 5px;
    width: 56px;
  }
  .form-outer {
    width: 340px;
    position: relative;
  }
  .commentSubmitOuter {
    background: #f6f8f9;
    border-radius: 0 0 4px 4px;
    border: solid 2px #dbdfe4;
    bottom: 0;
    left: 0;
    right: 0;
    transition: opacity linear .2s;
  }
  </style>
  <body>
    <div class="form-outer">
    <img src="pp.png" class="pp" alt="">
      <input class="commentForm nameForm" type="text" name="name" placeholder="Name" id="commentName" required /><br>
      <textarea class="commentForm" name="comment" class="" id="commentText" placeholder="Join the Discussion..."></textarea>
      <div class="commentSubmitOuter">
      <input class="commentFormSubmit" id="commentSubmit" type="button" value="Submit" required/>
      </div>

      <div id="commentSuccess">Your comment has been submitted successfully.</div>
      <div id="commentError">There was an error submitting your comment.</div>
      </div>
  </body>

      <script>
      $("#commentSuccess").hide();
      $("#commentError").hide();


        $("#commentSubmit").click(function() {
            var name = document.getElementById("commentName").value;
            var comment = document.getElementById("commentText").value;
            var pageId = 1; //Every page with comments has an ID so I know which comments to display.

             $.ajax({
                type: "POST",
                url: "addComment.php",
                data: {
                    "name": name,
                    "comment": comment,
                    "pageId": pageId
                },
                success: function(data) {
                   $("#commentSuccess").show();
                }
            });
        });
    </script>
</html>
