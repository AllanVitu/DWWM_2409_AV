namespace ControleLaSaisie
{
    internal class Program
    {
        static void Main(string[] args)
        {
            string name;

            Console.WriteLine("Saisissez votre prenom");
            
            name = Console.ReadLine();

           
            
            while(name.Length < 2)
            {
                Console.WriteLine("Veuillez ressayer, le prenom contient moins de 2 carractere");
                name = Console.ReadLine();

            }

            Console.WriteLine("Bonjour " + name);

        } 
    }
}
