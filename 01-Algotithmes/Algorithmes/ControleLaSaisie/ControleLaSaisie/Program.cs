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
        }
    }
}
