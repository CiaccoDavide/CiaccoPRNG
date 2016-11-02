# CiaccoPRNG
A simple PRNG algorithm implemented in various languages! Same seed same sequences, ints only.

--

**Usage**

>PHP:

    require_once "CiaccoPRNG.php";
    use ciacco_PRNG\CiaccoPRNG;
    $seed = 123;
    $min = 0;
    $max = 255;
    CiaccoPRNG::seed($seed);
    CiaccoPRNG::getRand($min,$max); // returns a pseudo-random int
    
>C#:

    int seed = 123;
    int min = 0;
    int max = 255;
    CiaccoRandom randomer = new CiaccoRandom();
    randomer.plantSeed(seed);
    randomer.getRand(min, max); // returns a pseudo-random int
