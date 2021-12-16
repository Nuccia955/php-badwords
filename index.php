<?php
    #declaration of variable text
    $text = '<p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sollicitudin nec mauris sit amet porttitor. Donec pharetra et eros a dapibus. Vivamus ornare eget nunc et tincidunt. Donec rutrum porta lorem, id fermentum ipsum. Aliquam velit nunc, luctus et porta ut, fringilla a nisi. Integer neque ipsum, interdum eget nisl et, viverra accumsan tortor. Maecenas velit nibh, feugiat et sodales vehicula, lobortis sit amet felis. Nulla congue turpis dolor. Fusce pharetra et mauris ut dignissim.

    Vivamus tincidunt condimentum tellus eu tincidunt. Cras ullamcorper orci ac libero ultrices, vehicula tincidunt nunc pellentesque. Cras sed vehicula ipsum. Ut turpis dolor, sollicitudin a velit id, blandit consequat justo. Sed id nulla ultrices, malesuada augue non, sagittis lectus. Vivamus at nulla commodo, gravida erat ac, elementum risus. Nam vel sem dolor. Aliquam erat volutpat. Nunc blandit nulla mauris, vitae sagittis tortor gravida a. Aliquam at finibus nibh, quis egestas risus. Mauris malesuada, magna sit amet mollis sollicitudin, leo ante suscipit enim, ac lacinia ipsum enim ac ex. Aliquam non massa ligula.  </p>';

    #video print variable text
    echo $text;

    #video print variable length
    echo strlen($text);

    #get user input in querystring and replace the badword with ***
    echo str_replace($_GET['badword'], '***', $text);

    #video print censured text length
    echo strlen(str_replace($_GET['badword'], '***', $text));
?>