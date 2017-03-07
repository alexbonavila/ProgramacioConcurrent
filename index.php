<?php

function myEcho($callback){
    if (is_callable($callback)){
    call_user_func($callback);
    }else{
        echo $callback;
    }
}

function otro(){
    echo "a\n";
}

myEcho('otro');

$x=5;
myEcho($x);