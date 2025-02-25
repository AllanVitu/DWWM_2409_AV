using System.Runtime.CompilerServices;

namespace TriDeNombres
{
    internal class Program
    {
        static void Main(string[] args)
        {

            int numA;
            
            int numB;
            
            int numC;

            int[] nombres;

            string saisie;

            
            Console.WriteLine("Entrez le premier nombre");
            saisie = Console.ReadLine();
            numA = int.Parse(saisie);


            Console.WriteLine("Entrez le 2èmes nombre");
            saisie = Console.ReadLine();
            numB = int.Parse(saisie);


            Console.WriteLine("Entrez le 3èmes nombre");
            saisie = Console.ReadLine();
            numC = int.Parse(saisie);

            nombres = [numA, numB, numC];
            Array.Sort(nombres);


            for(int i = 0; i < nombres.Length; i++)
            {
                Console.WriteLine(nombres[i]);
            }

            Console.ReadLine();
   
        }
    }
}
