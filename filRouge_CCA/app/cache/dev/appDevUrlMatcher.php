<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/acteurs')) {
                // acteurs_index
                if (rtrim($pathinfo, '/') === '/acteurs') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_acteurs_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'acteurs_index');
                    }

                    return array (  '_controller' => 'MovieBundle\\Controller\\ActeursController::indexAction',  '_route' => 'acteurs_index',);
                }
                not_acteurs_index:

                // acteurs_new
                if ($pathinfo === '/acteurs/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_acteurs_new;
                    }

                    return array (  '_controller' => 'MovieBundle\\Controller\\ActeursController::newAction',  '_route' => 'acteurs_new',);
                }
                not_acteurs_new:

                // acteurs_show
                if (preg_match('#^/acteurs/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_acteurs_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acteurs_show')), array (  '_controller' => 'MovieBundle\\Controller\\ActeursController::showAction',));
                }
                not_acteurs_show:

                // acteurs_edit
                if (preg_match('#^/acteurs/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_acteurs_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acteurs_edit')), array (  '_controller' => 'MovieBundle\\Controller\\ActeursController::editAction',));
                }
                not_acteurs_edit:

                // acteurs_delete
                if (preg_match('#^/acteurs/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_acteurs_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acteurs_delete')), array (  '_controller' => 'MovieBundle\\Controller\\ActeursController::deleteAction',));
                }
                not_acteurs_delete:

            }

            if (0 === strpos($pathinfo, '/administrateurs')) {
                // administrateurs_index
                if (rtrim($pathinfo, '/') === '/administrateurs') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_administrateurs_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'administrateurs_index');
                    }

                    return array (  '_controller' => 'MovieBundle\\Controller\\AdministrateursController::indexAction',  '_route' => 'administrateurs_index',);
                }
                not_administrateurs_index:

                // administrateurs_new
                if ($pathinfo === '/administrateurs/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_administrateurs_new;
                    }

                    return array (  '_controller' => 'MovieBundle\\Controller\\AdministrateursController::newAction',  '_route' => 'administrateurs_new',);
                }
                not_administrateurs_new:

                // administrateurs_show
                if (preg_match('#^/administrateurs/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_administrateurs_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrateurs_show')), array (  '_controller' => 'MovieBundle\\Controller\\AdministrateursController::showAction',));
                }
                not_administrateurs_show:

                // administrateurs_edit
                if (preg_match('#^/administrateurs/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_administrateurs_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrateurs_edit')), array (  '_controller' => 'MovieBundle\\Controller\\AdministrateursController::editAction',));
                }
                not_administrateurs_edit:

                // administrateurs_delete
                if (preg_match('#^/administrateurs/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_administrateurs_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrateurs_delete')), array (  '_controller' => 'MovieBundle\\Controller\\AdministrateursController::deleteAction',));
                }
                not_administrateurs_delete:

            }

        }

        if (0 === strpos($pathinfo, '/commentaires')) {
            // commentaires_index
            if (rtrim($pathinfo, '/') === '/commentaires') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_commentaires_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'commentaires_index');
                }

                return array (  '_controller' => 'MovieBundle\\Controller\\CommentairesController::indexAction',  '_route' => 'commentaires_index',);
            }
            not_commentaires_index:

            // commentaires_new
            if ($pathinfo === '/commentaires/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_commentaires_new;
                }

                return array (  '_controller' => 'MovieBundle\\Controller\\CommentairesController::newAction',  '_route' => 'commentaires_new',);
            }
            not_commentaires_new:

            // commentaires_show
            if (preg_match('#^/commentaires/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_commentaires_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaires_show')), array (  '_controller' => 'MovieBundle\\Controller\\CommentairesController::showAction',));
            }
            not_commentaires_show:

            // commentaires_edit
            if (preg_match('#^/commentaires/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_commentaires_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaires_edit')), array (  '_controller' => 'MovieBundle\\Controller\\CommentairesController::editAction',));
            }
            not_commentaires_edit:

            // commentaires_delete
            if (preg_match('#^/commentaires/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_commentaires_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaires_delete')), array (  '_controller' => 'MovieBundle\\Controller\\CommentairesController::deleteAction',));
            }
            not_commentaires_delete:

        }

        // movie_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'movie_default_index');
            }

            return array (  '_controller' => 'MovieBundle\\Controller\\DefaultController::indexAction',  '_route' => 'movie_default_index',);
        }

        // movie_default_header
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'movie_default_header');
            }

            return array (  '_controller' => 'MovieBundle\\Controller\\DefaultController::headerAction',  '_route' => 'movie_default_header',);
        }

        // movie_default_footer
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'movie_default_footer');
            }

            return array (  '_controller' => 'MovieBundle\\Controller\\DefaultController::footerAction',  '_route' => 'movie_default_footer',);
        }

        if (0 === strpos($pathinfo, '/episodes')) {
            // episodes_index
            if (rtrim($pathinfo, '/') === '/episodes') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_episodes_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'episodes_index');
                }

                return array (  '_controller' => 'MovieBundle\\Controller\\EpisodesController::indexAction',  '_route' => 'episodes_index',);
            }
            not_episodes_index:

            // episodes_new
            if ($pathinfo === '/episodes/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_episodes_new;
                }

                return array (  '_controller' => 'MovieBundle\\Controller\\EpisodesController::newAction',  '_route' => 'episodes_new',);
            }
            not_episodes_new:

            // episodes_show
            if (preg_match('#^/episodes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_episodes_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'episodes_show')), array (  '_controller' => 'MovieBundle\\Controller\\EpisodesController::showAction',));
            }
            not_episodes_show:

            // episodes_edit
            if (preg_match('#^/episodes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_episodes_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'episodes_edit')), array (  '_controller' => 'MovieBundle\\Controller\\EpisodesController::editAction',));
            }
            not_episodes_edit:

            // episodes_delete
            if (preg_match('#^/episodes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_episodes_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'episodes_delete')), array (  '_controller' => 'MovieBundle\\Controller\\EpisodesController::deleteAction',));
            }
            not_episodes_delete:

        }

        if (0 === strpos($pathinfo, '/moderateurs')) {
            // moderateurs_index
            if (rtrim($pathinfo, '/') === '/moderateurs') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_moderateurs_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'moderateurs_index');
                }

                return array (  '_controller' => 'MovieBundle\\Controller\\ModerateursController::indexAction',  '_route' => 'moderateurs_index',);
            }
            not_moderateurs_index:

            // moderateurs_new
            if ($pathinfo === '/moderateurs/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_moderateurs_new;
                }

                return array (  '_controller' => 'MovieBundle\\Controller\\ModerateursController::newAction',  '_route' => 'moderateurs_new',);
            }
            not_moderateurs_new:

            // moderateurs_show
            if (preg_match('#^/moderateurs/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_moderateurs_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moderateurs_show')), array (  '_controller' => 'MovieBundle\\Controller\\ModerateursController::showAction',));
            }
            not_moderateurs_show:

            // moderateurs_edit
            if (preg_match('#^/moderateurs/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_moderateurs_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moderateurs_edit')), array (  '_controller' => 'MovieBundle\\Controller\\ModerateursController::editAction',));
            }
            not_moderateurs_edit:

            // moderateurs_delete
            if (preg_match('#^/moderateurs/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_moderateurs_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moderateurs_delete')), array (  '_controller' => 'MovieBundle\\Controller\\ModerateursController::deleteAction',));
            }
            not_moderateurs_delete:

        }

        if (0 === strpos($pathinfo, '/realisateurs')) {
            // realisateurs_index
            if (rtrim($pathinfo, '/') === '/realisateurs') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_realisateurs_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'realisateurs_index');
                }

                return array (  '_controller' => 'MovieBundle\\Controller\\RealisateursController::indexAction',  '_route' => 'realisateurs_index',);
            }
            not_realisateurs_index:

            // realisateurs_new
            if ($pathinfo === '/realisateurs/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_realisateurs_new;
                }

                return array (  '_controller' => 'MovieBundle\\Controller\\RealisateursController::newAction',  '_route' => 'realisateurs_new',);
            }
            not_realisateurs_new:

            // realisateurs_show
            if (preg_match('#^/realisateurs/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_realisateurs_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'realisateurs_show')), array (  '_controller' => 'MovieBundle\\Controller\\RealisateursController::showAction',));
            }
            not_realisateurs_show:

            // realisateurs_edit
            if (preg_match('#^/realisateurs/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_realisateurs_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'realisateurs_edit')), array (  '_controller' => 'MovieBundle\\Controller\\RealisateursController::editAction',));
            }
            not_realisateurs_edit:

            // realisateurs_delete
            if (preg_match('#^/realisateurs/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_realisateurs_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'realisateurs_delete')), array (  '_controller' => 'MovieBundle\\Controller\\RealisateursController::deleteAction',));
            }
            not_realisateurs_delete:

        }

        if (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/series')) {
                // saisons_index
                if (preg_match('#^/series/(?P<nomSerie>[^/]++)/saisons/?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_saisons_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'saisons_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'saisons_index')), array (  '_controller' => 'MovieBundle\\Controller\\SaisonsController::indexAction',));
                }
                not_saisons_index:

                // saisons_new
                if (preg_match('#^/series/(?P<nomSerie>[^/]++)/saisons/new$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_saisons_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'saisons_new')), array (  '_controller' => 'MovieBundle\\Controller\\SaisonsController::newAction',));
                }
                not_saisons_new:

                // saisons_show
                if (preg_match('#^/series/(?P<nomSerie>[^/]++)/saisons/(?P<nomSaison>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_saisons_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'saisons_show')), array (  '_controller' => 'MovieBundle\\Controller\\SaisonsController::showAction',));
                }
                not_saisons_show:

                // saisons_edit
                if (preg_match('#^/series/(?P<nomSerie>[^/]++)/saisons/(?P<nomSaison>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_saisons_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'saisons_edit')), array (  '_controller' => 'MovieBundle\\Controller\\SaisonsController::editAction',));
                }
                not_saisons_edit:

                // saisons_delete
                if (preg_match('#^/series/(?P<nomSerie>[^/]++)/saisons/(?P<nomSaison>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_saisons_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'saisons_delete')), array (  '_controller' => 'MovieBundle\\Controller\\SaisonsController::deleteAction',));
                }
                not_saisons_delete:

            }

            if (0 === strpos($pathinfo, '/scenaristes')) {
                // scenaristes_index
                if (rtrim($pathinfo, '/') === '/scenaristes') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_scenaristes_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'scenaristes_index');
                    }

                    return array (  '_controller' => 'MovieBundle\\Controller\\ScenaristesController::indexAction',  '_route' => 'scenaristes_index',);
                }
                not_scenaristes_index:

                // scenaristes_new
                if ($pathinfo === '/scenaristes/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_scenaristes_new;
                    }

                    return array (  '_controller' => 'MovieBundle\\Controller\\ScenaristesController::newAction',  '_route' => 'scenaristes_new',);
                }
                not_scenaristes_new:

                // scenaristes_show
                if (preg_match('#^/scenaristes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_scenaristes_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'scenaristes_show')), array (  '_controller' => 'MovieBundle\\Controller\\ScenaristesController::showAction',));
                }
                not_scenaristes_show:

                // scenaristes_edit
                if (preg_match('#^/scenaristes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_scenaristes_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'scenaristes_edit')), array (  '_controller' => 'MovieBundle\\Controller\\ScenaristesController::editAction',));
                }
                not_scenaristes_edit:

                // scenaristes_delete
                if (preg_match('#^/scenaristes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_scenaristes_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'scenaristes_delete')), array (  '_controller' => 'MovieBundle\\Controller\\ScenaristesController::deleteAction',));
                }
                not_scenaristes_delete:

            }

            if (0 === strpos($pathinfo, '/series')) {
                // series_index
                if (rtrim($pathinfo, '/') === '/series') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_series_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'series_index');
                    }

                    return array (  '_controller' => 'MovieBundle\\Controller\\SeriesController::indexAction',  '_route' => 'series_index',);
                }
                not_series_index:

                // series_new
                if ($pathinfo === '/series/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_series_new;
                    }

                    return array (  '_controller' => 'MovieBundle\\Controller\\SeriesController::newAction',  '_route' => 'series_new',);
                }
                not_series_new:

                // series_show
                if (preg_match('#^/series/(?P<nomSerie>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_series_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'series_show')), array (  '_controller' => 'MovieBundle\\Controller\\SeriesController::showAction',));
                }
                not_series_show:

                // series_valid
                if (preg_match('#^/series/(?P<nomSerie>[^/]++)/valid$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_series_valid;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'series_valid')), array (  '_controller' => 'MovieBundle\\Controller\\SeriesController::validAction',));
                }
                not_series_valid:

                // series_invalid
                if (preg_match('#^/series/(?P<nomSerie>[^/]++)/invalid$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_series_invalid;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'series_invalid')), array (  '_controller' => 'MovieBundle\\Controller\\SeriesController::invalidAction',));
                }
                not_series_invalid:

                // series_edit
                if (preg_match('#^/series/(?P<nomSerie>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_series_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'series_edit')), array (  '_controller' => 'MovieBundle\\Controller\\SeriesController::editAction',));
                }
                not_series_edit:

                // series_delete
                if (preg_match('#^/series/(?P<nomSerie>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_series_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'series_delete')), array (  '_controller' => 'MovieBundle\\Controller\\SeriesController::deleteAction',));
                }
                not_series_delete:

            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_index
            if (rtrim($pathinfo, '/') === '/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_index');
                }

                return array (  '_controller' => 'MovieBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
            }
            not_user_index:

            // user_new
            if ($pathinfo === '/user/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'MovieBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_show
            if (preg_match('#^/user/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'MovieBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

            // user_edit
            if (preg_match('#^/user/(?P<username>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'MovieBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_promote
            if (preg_match('#^/user/(?P<username>[^/]++)/promote$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_promote;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_promote')), array (  '_controller' => 'MovieBundle\\Controller\\UserController::promoteAction',));
            }
            not_user_promote:

            // user_unpromote
            if (preg_match('#^/user/(?P<username>[^/]++)/unpromote$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_unpromote;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_unpromote')), array (  '_controller' => 'MovieBundle\\Controller\\UserController::unpromoteAction',));
            }
            not_user_unpromote:

            // user_delete
            if (preg_match('#^/user/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'MovieBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profil')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profil') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profil/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profil/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
