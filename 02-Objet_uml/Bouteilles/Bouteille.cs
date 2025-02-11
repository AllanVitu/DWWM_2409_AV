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
        //attributs
        private float contenanceEnLitre;
        private float contenuEnLitre;
        private bool estOuverte;

        //constructeurs

        //constructeur par defaut
        public Bouteille()
            : this(1f, 1f, false)
        {
        }
        //constructeur classique
        public Bouteille(float contenanceEnLitre,
                         float contenuEnLitre,
                         bool estOuverte)
        {
            this.contenanceEnLitre = contenanceEnLitre;
            this.contenuEnLitre = contenuEnLitre;
            this.estOuverte = estOuverte;
        }

        //constructeur hybride classique defaut
        public Bouteille(float contenanceEnLitre)
        : this(contenanceEnLitre, contenanceEnLitre, false)
        {
        }

        //constructeur par clonage
        //public Bouteille(Bouteille bouteilleACopier)
        //{
        //    this.contenanceEnLitre = bouteilleACopier.contenanceEnLitre;
        //    this.contenuEnLitre = bouteilleACopier.contenuEnLitre;
        //    this.estOuverte = bouteilleACopier.estOuverte;
        //}

        public Bouteille(Bouteille bouteilleACopier)
        : this(bouteilleACopier.contenanceEnLitre, bouteilleACopier.contenuEnLitre, bouteilleACopier.estOuverte)
        {
        }


        //Méthode ToString pour connaitre l'état de sa class

        public string ToString()
        {
            return base.ToString() + "contenanceEnL" + contenanceEnLitre.ToString() + "contenuEnL" + contenanceEnLitre + "estOuverte" + estOuverte;
        }
    }
}

