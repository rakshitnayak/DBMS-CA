<?php

function inputComponent($icon, $placeholder, $name, $value)
{
    $ele = " 
     <div class=\"input-group mb-2\">
       <span class=\"input-group-text bg-warning\" id=\"basic-addon1\">$icon</span>
       <input
        autocomplete=\"off\"
        type=\"text\"
        name='$name'
        value='$value'
        class=\"form-control\"
        placeholder=$placeholder
        aria-label=\"Username\"
        aria-describedby=\"basic-addon1\"
        />
        </div>
       
    ";

    echo $ele;
}


function buttonElement($btnid, $styleclass, $text, $name, $attr)
{
    $btn = "
        <button name='$name' '$attr' class='$styleclass' id='$btnid'>$text</button>
    ";
    echo $btn;
}
