namespace ControleLaSaisie
{
    internal class Program
    {
        static void Main(string[] args)
        {
            string name;

            Console.WriteLine("Saisissez votre prenom");
            
            name = Console.ReadLine();

            Console.WriteLine("Bonjour " + name);
            
            while(name.Length < 2)
            {
                Console.WriteLine("Veuillez ressayer, le prenom contient moins de 2 carractere");
                name = Console.ReadLine();

            }
            Console.WriteLine("Vous avez epuiser toutes vos chances !");
        } 
    }
}
