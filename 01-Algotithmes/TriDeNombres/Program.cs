namespace TriDeNombres
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int a;

            int b;

            int c;

            
            Console.WriteLine("Saisissez un nombre");
           
            a = Convert.ToInt32(Console.ReadLine());

            Console.WriteLine("Saisissez un nombre");

            b = Convert.ToInt32(Console.ReadLine());

            Console.WriteLine("Saisissez un nombre");

            c = Convert.ToInt32(Console.ReadLine());


            String result;

            
            if (a < b && b < c)
            {
                Console.WriteLine(a + " " + b + " " + c);
            }
            else if (a < c && c < b)
            {
                Console.WriteLine(a + " " + c + " " + b);
            }
            else if (b < a && a < c)
            {
                Console.WriteLine(b + " " + c + " " + a);
            }
            else if (c < b && b < a)
            {
                Console.WriteLine(c + " " + b + " " + a);
            }
            else if (c < a && a < b)
            {
                Console.WriteLine(c + " " + a + " " + b);
            }
            else if (b < c && c < a)
            {
                Console.WriteLine(b + " " + c + " " + a);
            }
            else
            {
                result = "La suite est invalide";
            }
                
            
            
        }
    }
}
