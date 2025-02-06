namespace Bouteilles
{
    internal class Program
    {
        static void Main(string[] args)
        {
           Bouteille bouteille1 = new Bouteille();

           Bouteille bouteille2 = new Bouteille(1.2f, 0.8f, true, "h2o");

           Bouteille bouteille3 = new Bouteille(bouteille2);

           Bouteille bouteille4 = new Bouteille(1.2f, 0.5f, true, "h2o");

           Bouteille bouteille5 = new Bouteille(1.2f, 1.3f, false, "h2o");



            float contenanceEnCLDeBouteille2 = bouteille2.donneContenanceEnCL();

            float contenuEnCLDeBouteille2 = bouteille2.donneContenanceEnCL();

            bool bouteilleRempli = bouteille2.remplir(1.2f);

            bool bouteilleVide = bouteille2.laVider(1.5f);

            bool bouteilleOuvert = bouteille2.ouvrir();

            bool bouteilleFermer = bouteille2.fermer();


        }
    }
}
