
public class queue{
public static boolean isOrdered(Queue<Integer> q)
{
    int index = 1 ;
    int count = q.length();
    boolean isordered =true;
    Integer e1  = q.serve();
    index ++ ;
    while ( index <= count)
    {
        Integer e2 = q.serve();
        index ++ ;
        if (e1 > e2)
            isordered = false;
            q.enqueue(e1);
            e1 = e2; 
    }
    return isordered;
}

public static <T>  void print(Queue<T> q)
{
    int index = 1 ;
    int count = q.length();
     
    while (index  <= count ){
        T e = q.serve();
        q.enqueue(e);
        System.out.print(e + "   ");
        index ++;
    }
    System.out.println("");
}

    public static void main(String[] args) {
        // TODO code application logic here
    //==================================================================================
        // Problem 4.1 14
        Queue <Integer> qq = new LinkedQueue <Integer> ();
        qq.enqueue(1);
        qq.enqueue(4);
        qq.enqueue(4);
        qq.enqueue(7);
        qq.enqueue(9);
        print(qq);
        
        if (isOrdered(qq) == true)
            System.out.println("ordered queue");
        else
            System.out.println("NOT ordered queue");
        }
    }
    