namespace Bouteilles
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Bouteille bouteille1;
            bouteille1 = new Bouteille();
            Console.WriteLine(bouteille1.ToString());

            
            
                
            Bouteille bouteilleClone = new Bouteille(bouteille1);
            
            if (bouteille1.Equals(bouteilleClone))
            {
                Console.WriteLine(" c'est égal ");
            }
            
            int a = 0;
            
            
            
            Bouteille bouteille2; 
            bouteille2 = new Bouteille(1.2f, 0.8f, true);

            
            Bouteille bouteille3; 
            bouteille3 = new Bouteille(bouteille2);

            
            Bouteille bouteille4;
            bouteille4 = new Bouteille(bouteille3);

            
            Bouteille bouteille5;
            bouteille5 = new Bouteille(1.2f, 1.3f, false);

        }
    }
}
