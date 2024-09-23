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


            static String LesNombresDeMort(int a, int b, int c)
            {
                String result;

                if (a < b && b < c)
                {
                    result = (a + " " + b + " " + c);
                }
                else if (a < c && c < b)
                {
                    result = (a + " " + c + " " + b);
                }
                else if (b < a && a < c)
                {
                    result = (b + " " + c + " " + a);
                }
                else if (c < b && b < a)
                {
                    result = (c + " " + a + " " + b);
                }
                else if (c < b && a < c)
                {
                    result = (c + " " + b + " " + a);
                }
                else
                {
                    result = "La suite est invalide";
                }

                return result;
            }






        }
    }    
}

