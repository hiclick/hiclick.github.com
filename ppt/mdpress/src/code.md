# Here's Ruby code!

    def fib x
      return x if x < 2
      fib(x - 1) + fib(x - 2)
    end

----

# Here's Java code!

```java
/**
 *  Create a new array of doubles that is a copy of 
 *  a given array.
 *  @param source the array that is to be copied; the 
 *  value can be null
 *  @return a copy of source; if source is null, then 
 *  the return value is also null
 */
public static double[]  copy( double[] source ) {
    if ( source == null )
       return null;
    double[]  cpy;  // A copy of the source array.
    cpy = new double[source.length];
    System.arraycopy( source, 0, cpy, 0, source.length );
    return cpy;
}
```