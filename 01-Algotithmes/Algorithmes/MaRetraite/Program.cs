namespace EsTuMajeur
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int numberA;
            
            int ageDeLaRetraite = 60;

            int ageDiff;

            string saisie;

            Console.WriteLine("Veuillez saisir votre age s'il vous-plait");
            saisie = Console.ReadLine();
            numberA = int.Parse(saisie);

            if (numberA > ageDeLaRetraite)
            {
                ageDiff = numberA - ageDeLaRetraite;
                Console.WriteLine("Vous êtes à la retraite depuis " + ageDiff + " années");
                Console.ReadLine();
            }
            else if (numberA < ageDeLaRetraite)
            {
                ageDiff = ageDeLaRetraite - numberA;
                Console.WriteLine("Il vous reste " + ageDiff + " années avant la retraite.");
                Console.ReadLine();
            }
            else if (numberA == ageDeLaRetraite)
            {
                Console.WriteLine("C’est le moment de prendre sa retraite.");
                Console.ReadLine();

            }
            else
            {
                Console.WriteLine("La valeur fournie n’est pas un âge valide.");
            }
            Console.ReadLine();
            {
                 
            }

        }
    }
}