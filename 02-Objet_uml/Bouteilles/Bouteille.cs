using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using static System.Runtime.InteropServices.JavaScript.JSType;

namespace Bouteilles
{
    internal class Bouteille
    {
        private float contenanceEnL;

        private float contenuEnL;

        private bool ouvert;

        private string typeDeContenu;


        //Contructeur

        public Bouteille()
        {
            contenanceEnL = 1;

            contenuEnL = 1;

            ouvert = false;

            typeDeContenu = "h2o";
        }


        //Contructeur Classique

        public Bouteille(float _contenanceEnL, float _contenuEnL, bool _ouvert, string _typeDeContenu)
        {
            this.contenanceEnL = _contenanceEnL;

            this.contenuEnL = _contenuEnL;

            this.ouvert = _ouvert;

            this.typeDeContenu = _typeDeContenu;
        }



        //Constructeur par recopie pour clonage


        public Bouteille(Bouteille _bouteilleARecopier)
        {
            this.contenanceEnL = _bouteilleARecopier.contenanceEnL;

            this.contenuEnL = _bouteilleARecopier.contenanceEnL;

            this.ouvert = _bouteilleARecopier.ouvert;

            this.typeDeContenu = _bouteilleARecopier.typeDeContenu;
        }



        //Autre methode utiliser

        public float donneContenanceEnCL()
        {

            float result;

            result = this.contenanceEnL * 100;

            return result;
        }

        public bool estPleine()
        {

            bool open;

            open = this.ouvert;

            return open;
        }

        public bool estPleines()
        {

            bool plein;

            if (this.contenuEnL == this.contenanceEnL)
            {

                plein = true;

            }
            else plein = false;

            return plein;
        }

        public bool remplir(float quantite)
        {

            bool retour = false;

            if (this.ouvert && quantite <= (this.contenanceEnL - this.contenuEnL))
            { // Pourquoi faire?

                retour = true;

                contenuEnL += quantite;
            }

            return retour;
        }

        public bool laVider(float quantite)
        {

            bool retour;

            if (this.contenanceEnL - quantite >= 0 && this.ouvert == true)
            {     // == est une comparaison

                this.contenanceEnL -= quantite;

                retour = true;
            }
            else
            {
                retour = false;
            }

            return retour;
        }

        public bool ouvrir()
        {

            bool retour;

            if (this.ouvert == false)
            {

                this.ouvert = true;

                retour = true;
            }
            else
            {

                retour = false;
            }
            return retour;
        }

        public bool fermer()
        {

            bool retour;

            if (this.ouvert == true)
            {

                this.ouvert = false;

                retour = true;
            }
            else
            {

                retour = false;
            }

            return retour;

        }
    }
}
