<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Demo</title>
</head>

<body>
  <h1>Recommended books</h1>

  <?php
  $books = [
    [
      'name' => 'Do Androids Dream of Electric Sheep',
      'author' => 'Philip K. Dick',
      'purchaseUrl' => 'http://example.com',
      'releaseDate' => '2012'
    ],
    [
      'name' => 'Project Hail Mary',
      'author' => 'Andy Weir',
      'purchaseUrl' => 'http://example.com',
      'releaseDate' => '2010.'
    ]
  ];

  ?>

  <ul>
    <?php foreach ($books as $book): ?>
      <li>
        <a href="<?= $book['purchaseUrl']; ?>">
          <?= $book['name']; ?>  (<?= $book['releaseDate'] ?>)
        </a>
      </li>
    <?php endforeach; ?>
  </ul>

</body>

</html>