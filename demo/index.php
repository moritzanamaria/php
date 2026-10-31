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
    ],
    [
      'name' => 'The Martian',
      'author' => 'Andy Weir',
      'purchaseUrl' => 'http://example.com',
      'releaseDate' => '2011.'
    ]
  ];
function filterByAuthor($books, $author) {
    $filteredBooks = [];

    foreach ($books as $book) {
      if ($book ['author'] === $author) {
        $filteredBooks[] = $book;      
        }
    }
        return $filteredBooks;
};
  ?>

  <ul>
    <?php foreach (filterByAuthor($books, 'Philip K. Dick') as $book) : ?>
      <?php if ($book['author'] === $book['author']) :
         ?>

      <li>
        <a href="<?= $book['purchaseUrl']; ?>">
          <?= $book['name']; ?> (<?= $book['releaseDate'] ?>) - By <?= $book['author'] ?>
        </a>
      </li>
      <?php endif; ?>
    <?php endforeach; ?>
  </ul>

</body>

</html>