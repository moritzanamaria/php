<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lambda functions</title>
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
    ],
    [
      'name' => 'The Martian',
      'author' => 'Andy Weir',
      'purchaseUrl' => 'http://example.com',
      'releaseDate' => '2011.'
    ]
  ];


$filteredBooks = array_filter($books, function ($book) {
    return $book ['author'] === 'Andy Weir';
});
  ?>

  <ul>
    <?php foreach ($filteredBooks as $book) : ?>
 
      <li>
        <a href="<?= $book['purchaseUrl']; ?>">
          <?= $book['name']; ?> (<?= $book['releaseDate'] ?>) - By <?= $book['author'] ?>
        </a>
      </li>
      
    <?php endforeach; ?>
  </ul>

</body>
</html>