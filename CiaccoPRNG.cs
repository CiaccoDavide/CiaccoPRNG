using System;

public class CiaccoRandom
{
    private static int tree=0;

    // set the seed
    public void plantSeed(int seed)
    {
        tree = Math.Abs(seed) % 9999999+1;
        getRand(0, 9999999);
    }

    // get a random int between $min and $max [both included]
    public int getRand(int min, int max)
    {
        tree = (tree*123)%69522569;
        return tree%(max-min+1)+min;
    }
}
