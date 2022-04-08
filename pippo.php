<?php
/* Oggi ci eserciteremo con alcuni snack per prendere confidenza con la nuova sintassi di PHP e rinfrescare le basi di logica! Vi chiediamo di fare 3 snack ma ne lasciamo altri 2 come bonus
Snack 1
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
Snack 2
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.
 BONUS:
Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi in base ai punti: ogni punto un nuovo paragrafo.
Snack 5
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.*/




//  ! SNACK 1

// $name = $_GET['name'] ?? '';
// $mail = $_GET['mail'] ?? '';
// $age = $_GET['age'] ?? '';
// $response_name = '';
// $response_mail = '';
// $response_age = '';
// $invalid_response = 'Invalid';
// $valid_response = 'Valid';
// $response_name = (strlen($name) < 3) ?  $invalid_response : $valid_response;

// if (strpos($mail, '@') && strpos($mail, '.')){    
//      $response_mail = $valid_response;    
// } else {
//      $response_mail = $invalid_response;
// };

// if (is_numeric($age)) {
//     $response_age = $valid_response;
// } else {
//     $response_age = $invalid_response;
// };

// if ($response_age  === $valid_response && $response_name  === $valid_response && $response_mail  === $valid_response){
//     echo 'VALIDATION SUCCESFUL';
// } else {
//     echo 'VALIDATION UNSUCCESFUL';
// }
/* <p>Name: <?php echo $response_name ?> </p>
     <p>Mail: <?php echo $response_mail ?> </p>
     <p>Age: <?php echo $response_age ?> </p> */

// ! ---------------------------------------------------------------------------

// ! SNACK 2

// $posts = [

//     '10/01/2019' => [
//         [
//             'title' => 'Post 1',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 1'
//         ],
//         [
//             'title' => 'Post 2',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 2'
//         ],
//     ],
//     '10/02/2019' => [
//         [
//             'title' => 'Post 3',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 3'
//         ]
//     ],
//     '15/05/2019' => [
//         [
//             'title' => 'Post 4',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 4'
//         ],
//         [
//             'title' => 'Post 5',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 5'
//         ],
//         [
//             'title' => 'Post 6',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 6'
//         ]
//     ],
// ];
// $data = '';
// $text = '';

// for ($i = 0; $i < strlen($posts); $i++){
//     $data = $posts[$i];
//     $text = $posts[$i]['text'];
// }

//  ! SNACK 4

// $paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum sed recusandae, dolor magnam sint ut porro ipsam nemo assumenda dolores beatae nulla molestiae vero adipisci cumque! Tempora recusandae laborum aliquid.
// Magnam doloribus deleniti officiis nam vero unde aliquid voluptatibus beatae quasi optio. Unde mollitia deserunt atque sed facere culpa non? Id exercitationem dolorum, minima sequi provident ad atque commodi blanditiis!
// Debitis fuga incidunt ex placeat, eaque quos. Rem itaque veniam eius dolore sint, ullam, voluptates nesciunt qui quo ducimus quaerat odit soluta quae? Nesciunt, numquam dignissimos consequuntur doloribus in dolore?
// Quia dolor quaerat eligendi possimus vitae autem cumque odio est saepe omnis consectetur dignissimos iusto, accusantium unde eveniet labore necessitatibus laudantium corporis placeat veniam fugit? Cumque recusandae ducimus maxime blanditiis?
// Possimus, odit? Velit tempore, libero illum impedit necessitatibus optio cupiditate possimus omnis consequuntur fugiat excepturi nobis vitae fuga animi voluptas amet, porro sint! Itaque, amet natus. Adipisci et deleniti eaque?
// Blanditiis ipsum ratione excepturi placeat ab. Placeat culpa maiores perspiciatis ex doloribus, explicabo corporis odio eaque officia quidem repellat enim similique esse distinctio numquam cumque! Aut fuga minus iusto et.
// Quo voluptas magni rerum expedita fugit deserunt unde dolor assumenda optio soluta, impedit ipsa culpa minima nesciunt cupiditate est nisi neque aliquid modi consequuntur. Quos soluta illo ipsum cum quasi?
// Quibusdam vitae autem aperiam soluta dolores vero, facilis odit dignissimos maxime excepturi provident sed error aliquam maiores placeat libero eum enim commodi ullam nisi. Impedit, suscipit repellendus. Veniam, delectus sit.
// Hic, laudantium. Incidunt ratione consequuntur cum nam ullam blanditiis a ex voluptas aliquid sequi eum sed ad officia fugit magni, earum veniam enim rem architecto itaque possimus? Nemo, accusamus similique.
// Eum labore sunt iure hic accusamus, eligendi vero saepe quas neque fugiat. Repudiandae voluptates, totam unde, temporibus fugit corrupti cum animi incidunt iure perferendis dicta enim iste laudantium optio quia?";

// $paragraphs = explode( '.', $paragraph);


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
   
     
</html>