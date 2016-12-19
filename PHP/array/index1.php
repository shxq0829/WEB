<html>
  <head>
    <title>Iteration Nation</title>
  </head>
  <body>
    <p>
      <?php
        $food = array('pizza', 'salad', 'burger');
        $salad = array('lettuce' => 'with',
                   'tomato' => 'without',
                   'onions' => 'with');

      // Looping through an array using "for".
      // First, let's get the length of the array!
      $length = count($food);

      // Remember, arrays in PHP are zero-based:
      for ($i = 0; $i < $length; $i++) {
        echo $food[$i] . '<br />';
      }

      echo '<br /><br />I want my salad:<br />';

      // Loop through an associative array using "foreach":
      foreach ($salad as $ingredient=>$include) {
        echo $include . ' ' . $ingredient . '<br />';
      }

      echo '<br /><br />';

      // Create your own array here and loop
      $myArray = array('name'=>'shxq',
                        'age'=>26,
                        'sex'=>'man');
      // through it using foreach!
      foreach ($myArray as $item=>$mine) {
        echo $item. ' ' . $mine . '<br />';
      }

      // 二维数组
      $deck = array(array('2 of Diamonds', 2),
                      array('5 of Diamonds', 5),
                      array('7 of Diamonds', 7),
                      array('9 of Diamonds', 9));

      // Imagine the first chosen card was the 7 of Diamonds.
      // This is how we would show the user what they have:
      echo 'You have the ' . $deck[2][0] . '!';

      // 关联二维数组
      // On the line below, create your own associative array:
        $myArray = array('name'=>array('shxq','xxj'),
                         'sex'=>array('man','woman'),
                         'age'=>array(26,24));

      // On the line below, output one of the values to the page:
        echo $myArray['name'][1];
        echo '<br />';
      // On the line below, loop through the array and output
      // *all* of the values to the page:
        foreach ($myArray as $item=>$array) {
            echo  $item.' '.$array[0].' '.$array[1].'<br />';
        }
      ?>
    </p>
  </body>
</html>
<!-->
This is the time to practice everything you've learned so far about associative arrays. Here's some quick reminders:
Arrays in PHP are zero-based (this means the numeric ID of the first value in the array will always be 0, not 1).
An array can contain values ("val1", "val2", etc... )\
As an associative array, it can contain keys and values ("key1" => "val1", "key2" => "val2", etc... )
A multidimensional array can contain arrays within arrays!
To loop through an array containing values only, you can use the for loop. For an array containing keys and values, you can use the foreach loop.
<-->
