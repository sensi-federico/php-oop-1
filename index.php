<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->


<?PHP

class Movie
{
    public $title;
    public $genre;
    public $duration;
    public $vote;
    public $top_ten;

    function __construct(string $title, string $genre, string $duration, int $vote)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->duration = $duration;
        $this->vote = $vote;
    }

    public function topTenMovies($vote)
    {
        if ($vote > 8) {
            $this->top_ten = true;
        } else {
            $this->top_ten = false;
        }
    }
}

$matrix = new Movie('The Matrix', 'TRUE STORY!', '180', 8);
$matrix->topTenMovies($matrix->vote);
// var_dump($matrix);

$avatar = new Movie('Avatar', 'Fantasy', '180', 9);
$avatar->topTenMovies($avatar->vote);
// var_dump($avatar);

$movies = [
    $avatar = new Movie('Avatar', 'Fantasy', '180', 9),
    $matrix = new Movie('The Matrix', 'TRUE STORY!', '180', 8)
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>

<body>

    <?php foreach ($movies as $movie) : ?>
        <h1>Movie</h1>
        <h4>Title: <?= $movie->title ?></h4>
        <h4>Genre: <?= $movie->genre ?></h4>
        <h4>Duration: <?= $movie->duration ?></h4>
        <h4>Vote: <?= $movie->vote ?></h4>
        <?PHP if ($movie->vote >= 8) : ?>
            <h4 class="top">IN TOP 10 ITALIA</h4>
        <?PHP else : ?>
            <h4 class="no-top">NON IN TOP 10</h4>
        <?PHP endif ?>
    <?php endforeach ?>
    <style lang="css">
        .top {
            color: green;
        }

        .no-top {
            color: red;
        }
    </style>

</body>


</html>