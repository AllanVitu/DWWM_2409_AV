namespace Bouteilles
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Bouteille bouteille1;
            bouteille1 = new Bouteille();
            
            
            Bouteille bouteille2; 
            bouteille2 = new Bouteille(1.2f, 0.8f, true);

            
            Bouteille bouteille3; 
            bouteille3 = new Bouteille(bouteille2);

            
            Bouteille bouteille4;
            bouteille4 = new Bouteille(bouteille3);

            
            Bouteille bouteille5;
            bouteille5 = new Bouteille(1.2f, 1.3f, false);



            //float contenanceEnLitre = bouteille2contenuEnLitre();

            //float contenuEnLitreDeBouteille2 = bouteille2.contenuEnLitre();

            //bool bouteilleRempli = bouteille2.Remplir(1.2f);

            //bool bouteilleVide = bouteille2.LaVider(1.5f);
            
            //bool bouteilleOuvert = bouteille2.Ouvrir();

            //bool bouteilleFermer = bouteille2.Fermer();


        }
    }
}
