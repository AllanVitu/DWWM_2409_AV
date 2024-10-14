namespace Contrôler_la_saisie_avec_limite
{
    internal class Program
    {
            const string MOT_DE_PAASSE = "formation";
        static void Main(string[] args)
        {
            string saisieUtilisateur = null;

            bool motDePasse = false;

            int nombreDeTentative = 3;

            int nombreTentavieRestant = 0;



            while(saisieUtilisateur == MOT_DE_PAASSE || nombreTentavieRestant < nombreDeTentative)
            {
                Console.WriteLine("Saisissez votre mot de passe : ");
                
                saisieUtilisateur = Console.ReadLine();
                
                nombreTentavieRestant++;
            }
            if(nombreTentavieRestant == nombreDeTentative)
            {
                Console.WriteLine("votre compte est bloqué");
            }
            else
            {
                saisieUtilisateur = MOT_DE_PAASSE;
                
                Console.WriteLine("Vous etes connecté");
            }
            
            Console.ReadLine();

        }
    }
}
