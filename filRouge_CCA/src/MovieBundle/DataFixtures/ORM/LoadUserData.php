<?php
//src/MovieBundle/DataFixtures/ORM/LoadUserData.php

namespace MovieBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MovieBundle\Entity\User;
use MovieBundle\Entity\Series;
use MovieBundle\Entity\Genres;
use MovieBundle\Entity\Acteurs;
use MovieBundle\Entity\Episodes;
use MovieBundle\Entity\Saisons;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {

        //create a super admin
        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setPrenomUtilisateur('admin');
        $userAdmin->setNomUtilisateur('admin');
        $userAdmin->setPlainPassword('admin');
        $userAdmin->setEmail('admin@talkseries.fr');
        $userAdmin->addRole('ROLE_ADMIN');
        $userAdmin->setEnabled(1);
        $manager->persist($userAdmin);

        //create a moderator
        $userModo = new User();
        $userModo->setUsername('modo');
        $userModo->setPrenomUtilisateur('Bruce');
        $userModo->setNomUtilisateur('Wayne');
        $userModo->setPlainPassword('modo');
        $userModo->setEmail('moderation@talkseries.fr');
        $userModo->addRole('ROLE_MODERATEUR');
        $userModo->setEnabled(1);
        $manager->persist($userModo);

        //create users
        $userFoobar = new User();
        $userFoobar->setUsername('foo');
        $userFoobar->setPrenomUtilisateur('Lung');
        $userFoobar->setNomUtilisateur('Seong');
        $userFoobar->setPlainPassword('bar');
        $userFoobar->setEmail('foobar@talkseries.fr');
        $userFoobar->setEnabled(1);
        $manager->persist($userFoobar);

        $userToto = new User();
        $userToto->setUsername('toto');
        $userToto->setPrenomUtilisateur('toto');
        $userToto->setNomUtilisateur('tutu');
        $userToto->setPlainPassword('imie');
        $userToto->setEmail('toto@talkseries.fr');
        $userToto->setEnabled(1);
        $manager->persist($userToto);

        $userCedric = new User();
        $userCedric->setUsername('cedric');
        $userCedric->setPrenomUtilisateur('Cedric');
        $userCedric->setNomUtilisateur('Tougeron');
        $userCedric->setPlainPassword('imie');
        $userCedric->setEmail('cedric@talkseries.fr');
        $userCedric->setEnabled(1);
        $manager->persist($userCedric);

        $userCyril = new User();
        $userCyril->setUsername('cyril');
        $userCyril->setPrenomUtilisateur('Cyril');
        $userCyril->setNomUtilisateur('Ollivier');
        $userCyril->setPlainPassword('imie');
        $userCyril->setEmail('cyril@talkseries.fr');
        $userCyril->setEnabled(1);
        $manager->persist($userCyril);

        $userAnthony = new User();
        $userAnthony->setUsername('anthony');
        $userAnthony->setPrenomUtilisateur('Anthony');
        $userAnthony->setNomUtilisateur('Baffou');
        $userAnthony->setPlainPassword('imie');
        $userAnthony->setEmail('anthony@talkseries.fr');
        $userAnthony->setEnabled(1);
        $manager->persist($userAnthony);

        //create genres
        $genreComedie = new Genres();
        $genreComedie->setNomGenre('comédie');
        $manager->persist($genreComedie);

        $genreHorreur = new Genres();
        $genreHorreur->setNomGenre('horreur');
        $manager->persist($genreHorreur);

        $genreDrame = new Genres();
        $genreDrame->setNomGenre('drame');
        $manager->persist($genreDrame);

        $genreMedical = new Genres();
        $genreMedical->setNomGenre('médical');
        $manager->persist($genreMedical);

        $genreAction = new Genres();
        $genreAction->setNomGenre('action');
        $manager->persist($genreAction);

        $genrePolicier = new Genres();
        $genrePolicier->setNomGenre('policier');
        $manager->persist($genrePolicier);

        //create actors
        $acteursCranston = new Acteurs();
        $acteursCranston->setNomActeur('Cranston');
        $acteursCranston->setPrenomActeur('Bryan');
        $acteursCranston->setDateNaissanceActeur(new \DateTime("1956-03-07 00:00:00"));
        $acteursCranston->setBioActeur('Bryan Cranston est un acteur américain, né le 7 mars 1956 à San Fernando (Californie). Il est notamment connu pour avoir interprété le rôle de Hal dans la série télévisée Malcolm et de Walter White, dit « Walt », dans Breaking Bad, rôle pour lequel il a reçu quatre Emmy Awards du meilleur acteur dans une série télévisée dramatique et le Golden Globe du meilleur acteur dans la même catégorie en 2014.');
        $manager->persist($acteursCranston);

        $acteursPaul = new Acteurs();
        $acteursPaul->setNomActeur('Paul');
        $acteursPaul->setPrenomActeur('Aaron');
        $acteursPaul->setDateNaissanceActeur(new \DateTime("1979-08-27 00:00:00"));
        $acteursPaul->setBioActeur('Aaron Paul Sturtevant est un acteur américain né le 27 août 1979 à Emmett dans l\'Idaho. Il est principalement connu pour son rôle de Jesse Pinkman dans la série télévisée Breaking Bad et pour le rôle de Tobey Marshall dans Need for Speed en 2014.');
        $manager->persist($acteursPaul);

        $acteursGunn = new Acteurs();
        $acteursGunn->setNomActeur('Gunn');
        $acteursGunn->setPrenomActeur('Anna');
        $acteursGunn->setDateNaissanceActeur(new \DateTime("1968-08-11 00:00:00"));
        $acteursGunn->setBioActeur('Anna Gunn est une actrice américaine née le 11 août 1968 à Santa Fe, au Nouveau-Mexique. Elle est connue notamment grâce à la série Breaking Bad, dans laquelle elle incarne Skyler White.');
        $manager->persist($acteursGunn);

        $acteursLincoln = new Acteurs();
        $acteursLincoln->setNomActeur('Lincoln');
        $acteursLincoln->setPrenomActeur('Andrew');
        $acteursLincoln->setDateNaissanceActeur(new \DateTime("1973-11-14 00:00:00"));
        $acteursLincoln->setBioActeur('Andrew Lincoln, de son vrai nom Andrew James Clutterbuck est un acteur britannique, né le 14 septembre 1973 à Londres (Angleterre).');
        $manager->persist($acteursLincoln);

        $acteursBride = new Acteurs();
        $acteursBride->setNomActeur('McBride');
        $acteursBride->setPrenomActeur('Melissa');
        $acteursBride->setDateNaissanceActeur(new \DateTime("1965-03-23 00:00:00"));
        $acteursBride->setBioActeur('Melissa McBride, parfois créditée sous le nom de Melissa Suzanne McBride est une actrice américaine, née le 23 mai 1965 à Lexington, Kentucky.');
        $manager->persist($acteursBride);

        $acteursReedus = new Acteurs();
        $acteursReedus->setNomActeur('Reedus');
        $acteursReedus->setPrenomActeur('Norman');
        $acteursReedus->setDateNaissanceActeur(new \DateTime("1969-01-06 00:00:00"));
        $acteursReedus->setBioActeur('Melissa McBride, parfois créditée sous le nom de Melissa Suzanne McBride est une actrice américaine, née le 23 mai 1965 à Lexington, Kentucky.');
        $manager->persist($acteursReedus);

        $acteursLaurie = new Acteurs();
        $acteursLaurie->setNomActeur('Laurie');
        $acteursLaurie->setPrenomActeur('Hugh');
        $acteursLaurie->setDateNaissanceActeur(new \DateTime("1959-04-11 00:00:00"));
        $acteursLaurie->setBioActeur('Hugh Laurie, né le 11 juin 1959 à Oxford, est un acteur, producteur, musicien, chanteur et écrivain britannique.');
        $manager->persist($acteursLaurie);

        $acteursLeonard = new Acteurs();
        $acteursLeonard->setNomActeur('Leonard');
        $acteursLeonard->setPrenomActeur('Robert Sean');
        $acteursLeonard->setDateNaissanceActeur(new \DateTime("1969-11-28 00:00:00"));
        $acteursLeonard->setBioActeur('Robert Sean Leonard, de son vrai nom Robert Lawrence Leonard, est un acteur américain né le 28 février 1969 à Ridgewood, dans le New Jersey.');
        $manager->persist($acteursLeonard);

        $acteursSpacey = new Acteurs();
        $acteursSpacey->setNomActeur('Spacey');
        $acteursSpacey->setPrenomActeur('Kevin');
        $acteursSpacey->setDateNaissanceActeur(new \DateTime("1959-07-26 00:00:00"));
        $acteursSpacey->setBioActeur('Kevin Spacey est un acteur, réalisateur et producteur américain né le 26 juillet 1959 à South Orange. Connu pour ses personnages complexes comme dans Usual Suspects, Seven, L.A.');
        $manager->persist($acteursSpacey);

        //create episodes
        $episodesBBep1 = new Episodes();
        $episodesBBep1->setNomEpisode('Chute libre');
        $episodesBBep1->setResumeEpisode('Walter White commence à produire de la methamphetamine pour subvenir aux besoins de sa famille le jour où il découvre qu\'il a un cancer des poumons. Il se met en équipe avec un de ses anciens étudiant, Jesse Pinkman, qui est dealer de meth.');
        $episodesBBep1->setDureeEpisode('45 minutes');
        $episodesBBep1->setDiffusionEpisode(new \DateTime("2008-01-20 00:00:00"));
        $episodesBBep1->setDateEpisode(new \DateTime("2008-01-20 00:00:00"));
        $episodesBBep1->setNoteMoyenneEpisode(0);
        $manager->persist($episodesBBep1);

        $episodesBBep2 = new Episodes();
        $episodesBBep2->setNomEpisode('Le choix');
        $episodesBBep2->setResumeEpisode('Walter et Jesse doivent gérer les deux corps qui se trouvent dans le camping-car. De plus Skyler s\'inquiète du comportement de Walter.');
        $episodesBBep2->setDureeEpisode('45 minutes');
        $episodesBBep2->setDiffusionEpisode(new \DateTime("2008-01-27 00:00:00"));
        $episodesBBep2->setDateEpisode(new \DateTime("2008-01-27 00:00:00"));
        $episodesBBep2->setNoteMoyenneEpisode(0);
        $manager->persist($episodesBBep2);

        $episodesBBep3 = new Episodes();
        $episodesBBep3->setNomEpisode('Dérapage');
        $episodesBBep3->setResumeEpisode('Walter n\'arrive pas a se décider s\'il doit tuer ou non Krazy-8. Pendant ce temps, Marie pense que Walter Jr. fume de la marijuana et demande à Hank de le décourager à se droguer.');
        $episodesBBep3->setDureeEpisode('45 minutes');
        $episodesBBep3->setDiffusionEpisode(new \DateTime("2008-02-10 00:00:00"));
        $episodesBBep3->setDateEpisode(new \DateTime("2008-02-10 00:00:00"));
        $episodesBBep3->setNoteMoyenneEpisode(0);
        $manager->persist($episodesBBep3);

        $episodesBB2ep1 = new Episodes();
        $episodesBB2ep1->setNomEpisode('Traqués');
        $episodesBB2ep1->setResumeEpisode('Le business de Walt et Jesse avec Tuco dérape quand ce dernier tue son associé devant leurs yeux. Paranoïaques, les deux hommes sont persuadés qu\'ils sont les prochains sur la liste.');
        $episodesBB2ep1->setDureeEpisode('45 minutes');
        $episodesBB2ep1->setDiffusionEpisode(new \Datetime("2009-03-08 00:00:00"));
        $episodesBB2ep1->setDateEpisode(new \Datetime("2009-03-08 00:00:00"));
        $episodesBB2ep1->setNoteMoyenneEpisode(0);
        $manager->persist($episodesBB2ep1);

        $episodesBB2ep2 = new Episodes();
        $episodesBB2ep2->setNomEpisode('Chasse à l\'homme');
        $episodesBB2ep2->setResumeEpisode('Hank, le beau frère de Walter, décide de mettre tout en oeuvre pour le retrouver. Toute la famille de Walter est inquiète de sa disparition.');
        $episodesBB2ep2->setDureeEpisode('45 minutes');
        $episodesBB2ep2->setDiffusionEpisode(new \Datetime("2009-03-16 00:00:00"));
        $episodesBB2ep2->setDateEpisode(new \Datetime("2009-03-16 00:00:00"));
        $episodesBB2ep2->setNoteMoyenneEpisode(0);
        $manager->persist($episodesBB2ep2);

        $episodesBB3ep1 = new Episodes();
        $episodesBB3ep1->setNomEpisode('Crash');
        $episodesBB3ep1->setResumeEpisode('Deux semaines après la collision de deux avions au-dessus d\'Albuquerque, la ville est en émoi. Walter connait sa responsabilité, mais se voile la face. Skyler compte demander le divorce et la garde des enfants, ce que Walter Jr refuse. Jesse est en cure de désintoxication. Et deux hommes armés demandent l\'aide d\'un dieu pour la mort de « Heisenberg », le personnage dealer créé par Walter.');
        $episodesBB3ep1->setDureeEpisode('45 minutes');
        $episodesBB3ep1->setDiffusionEpisode(new \Datetime("2010-03-08 00:00:00"));
        $episodesBB3ep1->setDateEpisode(new \Datetime("2010-03-08 00:00:00"));
        $episodesBB3ep1->setNoteMoyenneEpisode(0);
        $manager->persist($episodesBB3ep1);

        $episodesBB3ep2 = new Episodes();
        $episodesBB3ep2->setNomEpisode('Tentions');
        $episodesBB3ep2->setResumeEpisode('Alors que Saul réapparait dans la vie de Walter, celui-ci est désespéré de la demande de divorce de Skyler. Jesse apprend que son ancienne maison est en vente.');
        $episodesBB3ep2->setDureeEpisode('45 minutes');
        $episodesBB3ep2->setDiffusionEpisode(new \Datetime("2010-08-08 00:00:00"));
        $episodesBB3ep2->setDateEpisode(new \Datetime("2010-08-08 00:00:00"));
        $episodesBB3ep2->setNoteMoyenneEpisode(0);
        $manager->persist($episodesBB3ep2);

        $episodesBB4ep1 = new Episodes();
        $episodesBB4ep1->setNomEpisode('Le cutter');
        $episodesBB4ep1->setResumeEpisode('Jesse a tué Gale d\'une balle sous l\'oeil gauche. Skyler se doute de la situation et fait tout pour la cacher à son fils et sa sœur ; elle déplace la voiture de Walt et inspecte l\'appartement de son ex-mari. Hank ne peut rien faire, toujours paralysé et aigri malgré les attentions de Marie, ni Saul, totalement paranoïaque.');
        $episodesBB4ep1->setDureeEpisode('45 minutes');
        $episodesBB4ep1->setDiffusionEpisode(new \Datetime("2011-03-08 00:00:00"));
        $episodesBB4ep1->setDateEpisode(new \Datetime("2011-03-08 00:00:00"));
        $episodesBB4ep1->setNoteMoyenneEpisode(0);
        $manager->persist($episodesBB4ep1);

        $episodesBB4ep2 = new Episodes();
        $episodesBB4ep2->setNomEpisode('Snub 38');
        $episodesBB4ep2->setResumeEpisode('Walt se procure une arme dans l\'idée de se débarrasser de Gus et finit par demander de l\'aide auprès de Mike, qui refuse violemment.');
        $episodesBB4ep2->setDureeEpisode('45 minutes');
        $episodesBB4ep2->setDiffusionEpisode(new \Datetime("2011-08-08 00:00:00"));
        $episodesBB4ep2->setDateEpisode(new \Datetime("2011-08-08 00:00:00"));
        $episodesBB4ep2->setNoteMoyenneEpisode(0);
        $manager->persist($episodesBB4ep2);

        $episodesWDep1 = new Episodes();
        $episodesWDep1->setNomEpisode('Passé décomposé');
        $episodesWDep1->setResumeEpisode('Rick Grimes part à la recherche de sa famille, après s\'être réveillé d\'un long coma, dans un monde infesté par les morts-vivants. Sur son chemin, il rencontre Morgan et Duane; qui vont lui apprendre les règles de survie.');
        $episodesWDep1->setDureeEpisode('60 minutes');
        $episodesWDep1->setDiffusionEpisode(new \Datetime("2010-10-31 00:00:00"));
        $episodesWDep1->setDateEpisode(new \Datetime("2010-10-31 00:00:00"));
        $episodesWDep1->setNoteMoyenneEpisode(0);
        $manager->persist($episodesWDep1);

        $episodesWDep2 = new Episodes();
        $episodesWDep2->setNomEpisode('Ce qui nous attend');
        $episodesWDep2->setResumeEpisode('Après s\'être enfuis du CDC, les survivants continuent leurs chemin pour tenter d\'échapper à l\'infestation.');
        $episodesWDep2->setDureeEpisode('60 minutes');
        $episodesWDep2->setDiffusionEpisode(new \Datetime("2011-10-16 00:00:00"));
        $episodesWDep2->setDateEpisode(new \Datetime("2011-10-16 00:00:00"));
        $episodesWDep2->setNoteMoyenneEpisode(0);
        $manager->persist($episodesWDep2);

        $episodesHouse1 = new Episodes();
        $episodesHouse1->setNomEpisode('Pilote');
        $episodesHouse1->setResumeEpisode('');
        $episodesHouse1->setDureeEpisode('40 minutes');
        $episodesHouse1->setDiffusionEpisode(new \Datetime("2004-11-16 00:00:00"));
        $episodesHouse1->setDateEpisode(new \Datetime("2004-11-16 00:00:00"));
        $episodesHouse1->setNoteMoyenneEpisode(0);
        $manager->persist($episodesHouse1);

        $episodesHouse2 = new Episodes();
        $episodesHouse2->setNomEpisode('Acceptance');
        $episodesHouse2->setResumeEpisode('');
        $episodesHouse2->setDureeEpisode('40 minutes');
        $episodesHouse2->setDiffusionEpisode(new \Datetime("2005-09-13 00:00:00"));
        $episodesHouse2->setDateEpisode(new \Datetime("2005-09-13 00:00:00"));
        $episodesHouse2->setNoteMoyenneEpisode(0);
        $manager->persist($episodesHouse2);

        $episodesHouseCards1 = new Episodes();
        $episodesHouseCards1->setNomEpisode('Chapitre 1');
        $episodesHouseCards1->setResumeEpisode('');
        $episodesHouseCards1->setDureeEpisode('60 minutes');
        $episodesHouseCards1->setDiffusionEpisode(new \Datetime("2013-01-02 00:00:00"));
        $episodesHouseCards1->setDateEpisode(new \Datetime("2013-01-02 00:00:00"));
        $episodesHouseCards1->setNoteMoyenneEpisode(0);
        $manager->persist($episodesHouseCards1);

        $episodesHouseCards2 = new Episodes();
        $episodesHouseCards2->setNomEpisode('Chapitre 2');
        $episodesHouseCards2->setResumeEpisode('');
        $episodesHouseCards2->setDureeEpisode('60 minutes');
        $episodesHouseCards2->setDiffusionEpisode(new \Datetime("2013-01-13 00:00:00"));
        $episodesHouseCards2->setDateEpisode(new \Datetime("2013-01-13 00:00:00"));
        $episodesHouseCards2->setNoteMoyenneEpisode(0);
        $manager->persist($episodesHouseCards2);


        //create saisons
        $saisonsBB1 = new Saisons();
        $saisonsBB1->setNomSaison('Breaking Bad saison 1');
        $saisonsBB1->setNbEpisodeSaison(7);
        $saisonsBB1->setNoteMoyenneSaison(8);
        $manager->persist($saisonsBB1);

        $saisonsBB2 = new Saisons();
        $saisonsBB2->setNomSaison('Breaking Bad saison 2');
        $saisonsBB2->setNbEpisodeSaison(13);
        $saisonsBB2->setNoteMoyenneSaison(9);
        $manager->persist($saisonsBB2);

        $saisonsBB3 = new Saisons();
        $saisonsBB3->setNomSaison('Breaking Bad saison 3');
        $saisonsBB3->setNbEpisodeSaison(13);
        $saisonsBB3->setNoteMoyenneSaison(8);
        $manager->persist($saisonsBB3);

        $saisonsBB4 = new Saisons();
        $saisonsBB4->setNomSaison('Breaking Bad saison 4');
        $saisonsBB4->setNbEpisodeSaison(13);
        $saisonsBB4->setNoteMoyenneSaison(7);
        $manager->persist($saisonsBB4);

        $saisonsWD1 = new Saisons();
        $saisonsWD1->setNomSaison('Walking Dead saison 1');
        $saisonsWD1->setNbEpisodeSaison(6);
        $saisonsWD1->setNoteMoyenneSaison(7);
        $manager->persist($saisonsWD1);

        $saisonsWD2 = new Saisons();
        $saisonsWD2->setNomSaison('Walking Dead saison 2');
        $saisonsWD2->setNbEpisodeSaison(13);
        $saisonsWD2->setNoteMoyenneSaison(6);
        $manager->persist($saisonsWD2);

        $saisonsHouse1 = new Saisons();
        $saisonsHouse1->setNomSaison('Dr House saison 1');
        $saisonsHouse1->setNbEpisodeSaison(21);
        $saisonsHouse1->setNoteMoyenneSaison(7);
        $manager->persist($saisonsHouse1);

        $saisonsHouse2 = new Saisons();
        $saisonsHouse2->setNomSaison('Dr House saison 2');
        $saisonsHouse2->setNbEpisodeSaison(24);
        $saisonsHouse2->setNoteMoyenneSaison(5);
        $manager->persist($saisonsHouse2);

        $saisonsHouseCard1 = new Saisons();
        $saisonsHouseCard1->setNomSaison('House of Cards saison 1');
        $saisonsHouseCard1->setNbEpisodeSaison(13);
        $saisonsHouseCard1->setNoteMoyenneSaison(5);
        $manager->persist($saisonsHouseCard1);

        //create series
        $seriesHouse = new Series();
        $seriesHouse->setNomSerie('House');
        $seriesHouse->setPosterSerie('/images/02.jpg');
        $seriesHouse->setResumeSerie('Le Dr Greg House est un médecin revêche qui ne fait confiance à personne, et encore moins à ses patients. Irrévérencieux et controversé, il n\'en serait que plus heureux s\'il pouvait ne pas adresser la parole à ses patients. Mais House est un brillant médecin. Et avec son équipe d\'experts, il est prêt à tout pour résoudre les cas médicaux les plus mystérieux et sauver des vies.');
        $seriesHouse->setNoteMoyenneSerie(6);
        $seriesHouse->setDiffusionSerie(new \DateTime("2004-09-16 00:00:00"));
        $seriesHouse->setDateCreationSerie(new \DateTime("2004-09-16 00:00:00"));
        $seriesHouse->setGenreSerie($genreMedical->getNomGenre());
        $seriesHouse->setCastingSerie("[Hugh Laurie] [Robert Sean Leonard]");
        $seriesHouse->setValidation(1);
        $seriesHouse->setDateAjout(new \DateTime("now"));
        $manager->persist($seriesHouse);

        $seriesHouseCards = new Series();
        $seriesHouseCards->setNomSerie('House of Cards');
        $seriesHouseCards->setPosterSerie('/images/01.jpg');
        $seriesHouseCards->setResumeSerie('Frank Underwood, homme politique rusé et vieux briscard de Washington, est prêt à tout pour conquérir le poste "suprême"...');
        $seriesHouseCards->setNoteMoyenneSerie(7);
        $seriesHouseCards->setDiffusionSerie(new \DateTime("2013-02-01 00:00:00"));
        $seriesHouseCards->setDateCreationSerie(new \DateTime("2013-02-01 00:00:00"));
        $seriesHouseCards->setGenreSerie($genreDrame->getNomGenre());
        $seriesHouseCards->setCastingSerie("[Kevin Spacey]");
        $seriesHouseCards->setValidation(1);
        $seriesHouseCards->setDateAjout(new \DateTime("now"));
        $manager->persist($seriesHouseCards);

        $seriesWalkingDead = new Series();
        $seriesWalkingDead->setNomSerie('The Walking Dead');
        $seriesWalkingDead->setPosterSerie('/images/03.jpg');
        $seriesWalkingDead->setResumeSerie('Après une apocalypse ayant transformé la quasi-totalité de la population en zombies, un groupe d\'hommes et de femmes mené par l\'officier Rick Grimes tente de survivre... Ensemble, ils vont devoir tant bien que mal faire face à ce nouveau monde devenu méconnaissable, à travers leur périple dans le Sud profond des États-Unis.');
        $seriesWalkingDead->setNoteMoyenneSerie(6);
        $seriesWalkingDead->setDiffusionSerie(new \DateTime("2010-10-10 00:00:00"));
        $seriesWalkingDead->setDateCreationSerie(new \DateTime("2010-10-10 00:00:00"));
        $seriesWalkingDead->setGenreSerie($genreHorreur->getNomGenre());
        $seriesWalkingDead->setCastingSerie("[Andrew Lincoln] [Melissa McBride] [Norman Reedus]");
        $seriesWalkingDead->setValidation(1);
        $seriesWalkingDead->setDateAjout(new \DateTime("now"));
        $manager->persist($seriesWalkingDead);

        $seriesBreakingBad = new Series();
        $seriesBreakingBad->setNomSerie('Breaking Bad');
        $seriesBreakingBad->setPosterSerie('/images/04.jpg');
        $seriesBreakingBad->setResumeSerie('Walter White, 50 ans, est professeur de chimie dans un lycée du Nouveau-Mexique. Pour subvenir aux besoins de sa famille, il est obligé de travailler doublement. Son quotidien déjà morose devient carrément noir lorsqu\'il apprend qu\'il est atteint d\'un incurable cancer des poumons. Pour réunir rapidement beaucoup d\'argent afin de mettre sa famille à l\'abri, Walter ne voit plus qu\'une solution : mettre ses connaissances en chimie à profit pour fabriquer et vendre du crystal meth, une drogue de synthèse qui rapporte beaucoup.');
        $seriesBreakingBad->setNoteMoyenneSerie(9);
        $seriesBreakingBad->setDiffusionSerie(new \DateTime("2008-01-20 00:00:00"));
        $seriesBreakingBad->setDateCreationSerie(new \DateTime("2008-01-20 00:00:00"));
        $seriesBreakingBad->setGenreSerie($genreDrame->getNomGenre());
        $seriesBreakingBad->setCastingSerie("[Bryan Cranston] [Aaron Paul] [Anna Gunn]");
        $seriesBreakingBad->setValidation(1);
        $seriesBreakingBad->setDateAjout(new \DateTime("now"));
        $manager->persist($seriesBreakingBad);

        $seriesGOT = new Series();
        $seriesGOT->setNomSerie('Game of thrones');
        $seriesGOT->setPosterSerie('/images/affiche_GOT.jpg');
        $seriesGOT->setResumeSerie('l y a très longtemps, à une époque oubliée, une force a détruit l\'équilibre des saisons. Dans un pays où l\'été peut durer plusieurs années et l\'hiver toute une vie, des forces sinistres et surnaturelles se pressent aux portes du Royaume des Sept Couronnes. La confrérie de la Garde de Nuit, protégeant le Royaume de toute créature pouvant provenir d\'au-delà du Mur protecteur, n\'a plus les ressources nécessaires pour assurer la sécurité de tous. Après un été de dix années, un hiver rigoureux s\'abat sur le Royaume avec la promesse d\'un avenir des plus sombres.');
        $seriesGOT->setNoteMoyenneSerie(9);
        $seriesGOT->setDiffusionSerie(new \DateTime("2011-04-17 00:00:00"));
        $seriesGOT->setDateCreationSerie(new \DateTime("2011-04-17 00:00:00"));
        $seriesGOT->setGenreSerie($genreAction->getNomGenre());
        $seriesGOT->setCastingSerie("[Peter Dinklage] [Emilia Clarke] [Kit Harington]");
        $seriesGOT->setValidation(1);
        $seriesGOT->setDateAjout(new \DateTime("now"));
        $manager->persist($seriesGOT);

        $seriesGotham = new Series();
        $seriesGotham->setNomSerie('Gotham');
        $seriesGotham->setPosterSerie('/images/affiche_gotham.jpg');
        $seriesGotham->setResumeSerie('Tout le monde connaît le Commissaire Gordon, adversaire redouté de la pègre de Gotham City, un homme dont la réputation rime avec la loi et l\'ordre. Mais que sait-on de son histoire, de son ascension de policier débutant à commissaire ? Qu\'est-ce que cela coûte de se frayer un chemin dans une ville régie secrètement par la corruption telle que Gotham City, terrain fertile des méchants les plus emblématiques ? Comment sont nés ces personnages hors du commun que sont Catwoman, le Pingouin, l\'Homme-mystère, Double-Face et le Joker ?');
        $seriesGotham->setNoteMoyenneSerie(7);
        $seriesGotham->setDiffusionSerie(new \DateTime("2014-11-14 00:00:00"));
        $seriesGotham->setDateCreationSerie(new \DateTime("2014-11-14 00:00:00"));
        $seriesGotham->setGenreSerie($genreAction->getNomGenre());
        $seriesGotham->setCastingSerie("[Benjamin McKenzie] [Robin Lord Taylor] [Cory Michael Smith]");
        $seriesGotham->setValidation(1);
        $seriesGotham->setDateAjout(new \DateTime("now"));
        $manager->persist($seriesGotham);

        $seriesTrueDetective = new Series();
        $seriesTrueDetective->setNomSerie('True Detective');
        $seriesTrueDetective->setPosterSerie('/images/affiche_true_detective.jpg');
        $seriesTrueDetective->setResumeSerie('A chaque saison, son histoire. True Detective nous embarque dans des récits policiers mêlant mysticisme, réflexions philosophiques et personnages torturés.');
        $seriesTrueDetective->setNoteMoyenneSerie(8);
        $seriesTrueDetective->setDiffusionSerie(new \DateTime("2014-01-12 00:00:00"));
        $seriesTrueDetective->setDateCreationSerie(new \DateTime("2014-01-12 00:00:00"));
        $seriesTrueDetective->setGenreSerie($genrePolicier->getNomGenre());
        $seriesTrueDetective->setCastingSerie("[Matthew McConaughey] [Woody Harrelson]");
        $seriesTrueDetective->setValidation(1);
        $seriesTrueDetective->setDateAjout(new \DateTime("now"));
        $manager->persist($seriesTrueDetective);

        
        $manager->flush();
    }
}