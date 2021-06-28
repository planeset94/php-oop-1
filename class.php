<pre>
<?php


// - è definita una classe ‘Movie’
// => all'interno della classe sono dichiarate delle variabili d'istanza
// => all'interno della classe è definito un costruttore
// => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

class Movie
{
    public $title;
    public $length;
    public $price;
    public $discount;

    function __construct(string $title, int $length, Float $price, bool $discount)
    {
        $this->title = $title;
        $this->length = $length;
        $this->price = $price;
        $this->discount = $discount;
    }

    /**
     * Questa funzione restituisce il prezzo di un prodotto al netto dello sconto passato alla funzione. 
     * $disc = lo sconto non va messo in percentuale, ma come numero intero.
     */
    function get_discount(int $disc)
    {

        return  $this->price * (1 - ($disc / 100));
    }

    function get_length()
    {
        if ($this->length > 60) {
            $message = "Il film dura più di un'ora";
        } else {
            $message = "Il film dura meno di un'ora";
        }
        return $message;
    }
}







// $el = $movie_db[1]->get_discount(50);
// var_dump($el);
// var_dump($movie_db[0]->get_length());

?>
</pre>