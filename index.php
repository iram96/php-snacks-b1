<?php



$db = [
    'teachers' => [
      [
        'name' => 'Michele',
        'lastname' => 'Papagni'
      ],
      [
        'name' => 'Fabio',
        'lastname' => 'Forghieri'
      ]
    ],
    'pm' => [
      [
        'name' => 'Roberto',
        'lastname' => 'Marazzini'
      ],
      [
        'name' => 'Federico',
        'lastname' => 'Pellegrini'
      ]
    ]
  ];


$students = [
  [
    'name' => 'Michele',
    'lastname' => 'Papagni',
    'votes' => [8, 5, 7, 6]
  ],
  [
    'name' => 'Fabio',
    'lastname' => 'Forghieri',
    'votes' => [10, 2, 4]
  ],
  [
    'name' => 'Roberto',
    'lastname' => 'Marazzini',
    'votes' => [2, 8]
  ]
];

function getMediumValue($numericArray) {
  $sum = array_sum($numericArray);
  $medium_value = $sum / count($numericArray);
  return $medium_value;
};

// $papagni_vote = getMediumValue($students[0]);
// $forghieri_vote = getMediumValue($students[1]);
// $marazzini_vote = getMediumValue($students[2]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mariano Maselli">
    
    
    <title>XXX</title>
</head>
<body>
    
    

        
    <?php foreach ($db as $role => $people) : ?>
        <div class="<?= $role === 'pm' ? 'green' : 'gray' ?>">
            <ul>
                <?php foreach ($people as $person) : ?>
                    <div> <?php echo $person['name'] ?></div>
                <? endforeach ?>
            </ul>
        </div>
    <? endforeach ?>
    <?php foreach ($students as $student) : ?>
      <div> <?= $student['name'] ?></div>
      <div> <?= $student['lastname'] ?></div>
      <div> <?= getMediumValue($student['votes']) ?></div>
      
      <? endforeach ?>
      
     
</html>