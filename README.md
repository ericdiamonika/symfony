Quelque tips pour se souvenir comment installer  Symfony

pour installer composer
-sS https://getcomposer.org/installer | php

Pour créer un projet symfony appeler sf-blog
/Applications/MAMP/bin/php/php7.2.1/bin/php composer.phar create-project symfony/skeleton sf-blog 3.4

Read the documentation at https://symfony.com/doc

voir les alias 
nano  ~/.bash_profile

sauvegarder les alias
source ~/.bash_profile

install le webserver
php ../composer.phar req webserver

démarrer les serveurs
php bin/console server:start

console symfony (help)
php bin/console

ajouter les annotations
php ../composer.phar req maker annotations

install les debug
php ../composer.phar req debug

afficher les log
cat var/log/dev.log

pour utiliser composer et installer twig
php ../composer.phar req twig

pour installer security
php ../composer.phar req security


pour installer orm 
php ../composer.phar req orm-pack

**Pour créer une page dynamique**

on installe twig
php ../composer.phar req twig



on crée un fichier twig dans le dossier template avec du hteumeuleu dedans

dans notre fichier BlogController.php 

  /**
     * @Route("/blog", name="blog")
     */

    public function blog(Request $request)
    {

        $name = $request->query->get('name');
        
        return $this->render('blog.html.twig', [
        'blog_title' => 'Mon super suuper',
        'name' => $name,
        ]);
        

    }







