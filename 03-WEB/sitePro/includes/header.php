<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Site Pro</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<nav>
    <div class="menu-toggle" id="menu-toggle">
        &#9776; <!-- icône burger -->
    </div>
    <ul id="menu">
        <li class="deroulant">
            <a href="#">Menu</a>
            <ul>
                <li><a href="index.php">Accueil</a></li> 
                <li><a href="about.php">À propos</a></li> 
                <li><a href="contact.php">Connexion</a></li> 
                <li><a href="inscription.php">Inscription</a></li>   
            </ul>
        </li>
    </ul>
</nav>



<script>
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');
    const deroulant = document.querySelector('.deroulant');

    toggle.addEventListener('click', () => {
        menu.classList.toggle('active');
    });

    deroulant.addEventListener('click', (e) => {
        if (window.innerWidth <= 768) {
            e.preventDefault();
            deroulant.classList.toggle('active');
        }
    });
</script>




<style>
    /* Réinitialisation */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', sans-serif;
    background-color:rgb(224, 224, 224);
}

nav {
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    padding: 0.5rem 1rem;
    position: relative;
}

/* Burger menu */
.menu-toggle {
    display: none;
    font-size: 1.5rem;
    cursor: pointer;
}

/* Menu principal */
nav ul {
    list-style: none;
    display: flex;
    flex-direction: row;
}

/* Menu item */
nav ul li {
    position: relative;
}

nav ul li > a {
    display: block;
    padding: 0.75rem 1rem;
    color: #333;
    text-decoration: none;
}

/* Sous-menu */
nav ul li ul {
    position: absolute;
    top: 100%;
    left: 0;
    display: none;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 0.25rem;
    box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    min-width: 160px;
    z-index: 1000;
}

nav ul li ul li a {
    display: block;
    padding: 0.75rem 1rem;
    color: #333;
    text-decoration: none;
}

nav ul li ul li a:hover {
    background-color:rgb(252, 85, 73);
}

/* Afficher le sous-menu au survol */
nav ul li.deroulant:hover ul {
    display: block;
}

/* Responsive */
@media (max-width: 768px) {
    .menu-toggle {
        display: block;
    }

    nav ul {
        flex-direction: column;
        display: none;
    }

    nav ul.active {
        display: flex;
    }

    nav ul li {
        width: 100%;
    }

    nav ul li ul {
        position: static;
        box-shadow: none;
        border: none;
    }

    nav ul li.deroulant:hover ul {
        display: none;
    }

    nav ul li.deroulant.active ul {
        display: block;
    }
}
</style>

</body>
</html>
