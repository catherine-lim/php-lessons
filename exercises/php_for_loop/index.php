<?php
$people = ['John','Jane','Sarah','Smithers','Anna'];
$arrayLength = count($people);
for( $peopleI = 0; $peopleI < $arrayLength; $peopleI++){
 ?>    
    <div>
       <?=$people[$peopleI];?>
    </div>
<?php
}
$film = [
    "title" => 'The Shawshank Redemption',
    "year" => 1994,
    "director" => 'Frank Darabont',
    "cast" => [
        'Andy Dufresnne' =>'Tim Robbins',
        'Ellis "Red" Redding'=> 'Morgan Freeman',
        'Warden Norton'=> 'Bob Gunton'
    ]
    ];
$sentence = "{$film['title']} was made in {$film['year']} and directed by {$film['director']}
Cast: ";

foreach($film['cast'] as $key => $keyVal){
    $sentence .= " <br> {$key} - {$keyVal}";
}
?>
<pre> 
    <?= $sentence;?> 
   <!-- or  '.$sentence.' -->
</pre>
<?php


?>