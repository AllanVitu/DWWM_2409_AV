namespace utilisateurEnregistrer
{
    internal class Program
    {
        static void Main(string[] args)
        {
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
