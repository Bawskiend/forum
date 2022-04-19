<?php
session_start();
if($_SESSION['auth'] == true){
    $connect = mysqli_connect('localhost','root','','forum');
    $id = $_GET['id'];
    $_SESSION['topic_id'] = $id;
    $query = "select * from topics where topic_id='$id'";
    $result = mysqli_query($connect,$query) or die(mysqli_error($connect));
    $result = mysqli_fetch_assoc($result);
    if($result){
        $topic_header = $result['header'];
        $topic_text = $result['text'];
        $topic_author = $result['author_id'];
        $_SESSION['author_id'] = $topic_author;
        echo "
        <div class='topic-content'>
        <div class = 'create-heading'><a class = 'create-heading-link' href='/addtopic'>Разместить статью</a></div>
        <h1 class='topic-content__header'>$topic_header</h1>
        <p class='topic-content__text'>$topic_text</p>
        <p class=topic-content__author>$topic_author</p>
     </div>";
     $query = "select * from comments where topic_id='$id' order by date";
     $result = mysqli_query($connect,$query) or die(mysqli_error($connect));
     echo "<div class='comments'>";
     if(count($result) == 0){
     echo "<h2 class='comments__notice'>В теме пока нет комментариев</h2>";
     echo "<p>Добавьте свой комментарий</p>
     <form method='POST' action='addcomment' class='newcomment'>
         <textarea name='commenttext' class='commenttext'></textarea>
         <input type='submit' value='Опубликовать' name='addcomment' class='addcomment'>
      </form>
      </div>";
     }
     else if(count($result) > 0){
        echo "<p>Добавьте свой комментарий</p>
        <form method='POST' action='addcomment' class='newcomment'>
            <textarea name='commenttext' class='commenttext'></textarea>
            <input type='submit' value='Опубликовать' name='addcomment' class='addcomment'>
         </form>";
         while($comments = mysqli_fetch_assoc($result)){
             $author_id = $comments['author_id'];
             $query = mysqli_query($connect,"select login from users where id='$author_id'") or die(mysqli_error($connect));
             $queryresult = mysqli_fetch_assoc($query);
             $author_login = $queryresult['login'];
             $comment = $comments['text'];
             $commentdate = $comments['date'];
             echo "<div class='comment'>
             <p>$author_login</p>
             <p>$comment</p>
             <p>$commentdate</p>
             </div>";
            }
           echo "</div>";
     }
     }
    }
?>