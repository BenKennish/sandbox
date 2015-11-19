<?php

// this is how I write nicely formatted PHP
// by Ben Kennish, Sept 2012

/*
Try and be consistent across your code
And do stuff for a good reason
*/

// space after commas and between logical operators
if (strpos($_SERVER['SERVER_NAME'], 'Apache') !== false) 
{
    // no spaces between function name and opening bracket

    // 4 space indents - spaces and NEVER tabs
    echo 'Hooray - we are running on Apache!';
}
else
{
    echo 'Uh oh .. we aren\'t running Apache, we are running this : '.$_SERVER['SERVER_NAME'];
    // no space with string concatenation (.)
}

// space after ';' - no space before '++'
for ($i = 1; $i < count($array); $i++)
{
     // no space after !
     if (!$array[$i]) continue;  // all-on-one-line if statement

     echo "array[$i] = $array[$i] ";
}


$qry = mysql_query('SELECT * FROM language WHERE name = "PHP"')
    or trigger_error(mysql_error(), E_USER_ERROR);

// FIXME: should we have spaces either side of '=' in MySQL query or not?
// TODO: is this 'or die' method ok?



// NB: Don't end the script with question-mark-close-triangle bracket as without it there are no problems with trailing spaces 
// This comment added pointlessly
