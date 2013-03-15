<?php
    if($this->Session->read('Auth.User.id') == $id){
         echo "<h1>";
        echo h($user['User']['username']);
        echo "</h1>";
        echo "<a href='edit'>edit</a>";
    }else{
        echo "<h1>";
        echo h($user['User']['username']);
        echo "</h1>";
    }