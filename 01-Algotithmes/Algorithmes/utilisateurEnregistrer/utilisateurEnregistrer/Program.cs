using System.Collections;

namespace utilisateurEnregistrer
{
    internal class Program
    {
        static void Main(string[] args)
        {

            /*ArrayList utilisateurs = new ArrayList();

            utilisateurs.Add(1);
            utilisateurs.Add("toto");
            utilisateurs.Add(new DateTime());


            try
            {
                int entier = (int)utilisateurs[0];
            }
            catch (Exception ex)
            {
                // gestion de l'erreur
            }

            

            int? int entier2 = utilisateurs[0] as int?;

            if(entier2 != null)
            {

            }
            if (utilisateurs[0] is int entier3)
            {

            }
            
            Console.Read();

            object toto = 1;
            object tata = "chaine";

            string result = (string)tata;*/<



            
            string[] utilisateurs;

            string saisieNomPrenom;

            char saisieOUiNon;

            string[] tabTempo;


            utilisateurs = new string[] { };

            do
            {
                Console.WriteLine("Saisissez votre nom et prenom :");

                saisieNomPrenom = Console.ReadLine() ?? " ";

                tabTempo = utilisateurs;

                utilisateurs = new string[utilisateurs.Length + 1];

                tabTempo.CopyTo(utilisateurs, 0);

                utilisateurs[utilisateurs.Length - 1] = saisieNomPrenom;

                Console.WriteLine("Souhaitez vous ajouter un autre utlisateur ? (N/O) ");

                saisieOUiNon = Console.ReadKey().KeyChar;
            }
            
            while (saisieOUiNon == 'o' || saisieOUiNon == 'O');
        }
    }
}
