<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title}</title>
</head>
<body>
    <h1>{$heading}</h1>
    <h4>{$content}</h4>
    <p><b>My name is :</b> {$name}</p>
    <p><b>My profile is :</b> {$profile}</p>
    <p><b>Brief Information :</b> {$para}</p>
    <h3>Fav. Characters :</h3>
    {json_encode($arr1)}
    <h3>MY Skills :</h3>
    <ul>
    {foreach $skills as $myskill}
        <li>{$myskill}</li>
    {/foreach}
    </ul>
    <h3>MY Contact :</h3>
    <ul>
    {foreach $contact as $value}
       <li>{$value@key}: {$value}</li>
    {/foreach}
    </ul>
    
    <h3>For loop</h3>
    {for $i =0 to 5}
        {$i}
    {forelse}
       loop is not working 
        {/for}
    
    <ul>
    {for $foo=1 to 3}
        <li>{$foo}</li>
    {/for}
    </ul>

    <ul>
    {for $foo=$start to $to}
        <li>{$foo}</li>
    {forelse}
      no iteration
    {/for}
    </ul>

    <h3>If Else Condition Check</h3>
    {if $fname eq 'Peter'}
    Welcome Sir.
    {elseif $fname eq 'Julia'}
        Welcome Ma'am.
    {else}
        Welcome, whatever you are.
    {/if}

    <br><br>
    {if $number is even}
    Wow... You Choose Even Number
    {/if}

    <br><br>
    {section name=jump start=$init loop=$end step=2}
    {$smarty.section.jump.index}
    {/section}

    <h3>While Loop</h3>
    {while $wloop > 0}
        <i><del>{$wloop--}</del></i>
    {/while}

    <h3>Mathematics Addition</h3>
    {math equation="x + y" x=$height y=$width}


    

</body>
</html>