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



            while( motDePasse == false && nombreTentavieRestant < nombreDeTentative)
            {
                Console.WriteLine("Saisissez votre mot de passe : ");
                
                saisieUtilisateur = Console.ReadLine();
                
            
                if(saisieUtilisateur == MOT_DE_PAASSE)
                {
                Console.WriteLine("Vous etes connecté");
                motDePasse = true;
                }

            else
            {
                    nombreTentavieRestant++;   
            }
                
            }
            if(nombreDeTentative == nombreTentavieRestant)
            {
                Console.WriteLine("Votre compte est bloqué");
            }
            
            
        }
    }
}
