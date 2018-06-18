<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/b')) {
                if (0 === strpos($pathinfo, '/js/b9')) {
                    // _assetic_b9e79a6
                    if ('/js/b9e79a6.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b9e79a6',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_b9e79a6',);
                    }

                    // _assetic_b9e79a6_0
                    if ('/js/b9e79a6_jquery.easypiechart.min_1.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b9e79a6',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_b9e79a6_0',);
                    }

                    // _assetic_b96d9d7
                    if ('/js/b96d9d7.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b96d9d7',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_b96d9d7',);
                    }

                    // _assetic_b96d9d7_0
                    if ('/js/b96d9d7_._frontoffice.min_1.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b96d9d7',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_b96d9d7_0',);
                    }

                }

                // _assetic_b7817c5
                if ('/js/b7817c5.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b7817c5',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_b7817c5',);
                }

                // _assetic_b7817c5_0
                if ('/js/b7817c5_libs_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b7817c5',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_b7817c5_0',);
                }

            }

            elseif (0 === strpos($pathinfo, '/js/0')) {
                // _assetic_0404452
                if ('/js/0404452.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0404452',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_0404452',);
                }

                // _assetic_0404452_0
                if ('/js/0404452_materialize_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0404452',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_0404452_0',);
                }

                // _assetic_082e8bd
                if ('/js/082e8bd.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '082e8bd',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_082e8bd',);
                }

                // _assetic_082e8bd_0
                if ('/js/082e8bd_prism.min_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '082e8bd',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_082e8bd_0',);
                }

            }

            elseif (0 === strpos($pathinfo, '/js/4')) {
                // _assetic_4c66bca
                if ('/js/4c66bca.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4c66bca',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_4c66bca',);
                }

                // _assetic_4c66bca_0
                if ('/js/4c66bca_perfect-scrollbar.min_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4c66bca',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_4c66bca_0',);
                }

                // _assetic_44529f3
                if ('/js/44529f3.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '44529f3',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_44529f3',);
                }

                // _assetic_44529f3_0
                if ('/js/44529f3_bootstrap.min_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '44529f3',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_44529f3_0',);
                }

            }

            elseif (0 === strpos($pathinfo, '/js/d')) {
                // _assetic_d05065c
                if ('/js/d05065c.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd05065c',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_d05065c',);
                }

                // _assetic_d05065c_0
                if ('/js/d05065c_plugins_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd05065c',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_d05065c_0',);
                }

                // _assetic_d1a33a4
                if ('/js/d1a33a4.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd1a33a4',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_d1a33a4',);
                }

                // _assetic_d1a33a4_0
                if ('/js/d1a33a4_jquery-3.2.1.min_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd1a33a4',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_d1a33a4_0',);
                }

            }

            elseif (0 === strpos($pathinfo, '/js/2')) {
                if (0 === strpos($pathinfo, '/js/25')) {
                    // _assetic_2540f6c
                    if ('/js/2540f6c.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '2540f6c',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_2540f6c',);
                    }

                    // _assetic_2540f6c_0
                    if ('/js/2540f6c_popper.min_1.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '2540f6c',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_2540f6c_0',);
                    }

                    // _assetic_255a7ae
                    if ('/js/255a7ae.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '255a7ae',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_255a7ae',);
                    }

                    // _assetic_255a7ae_0
                    if ('/js/255a7ae_chartist.min_1.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '255a7ae',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_255a7ae_0',);
                    }

                }

                // _assetic_2355802
                if ('/js/2355802.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 2355802,  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_2355802',);
                }

                // _assetic_2355802_0
                if ('/js/2355802_customizer_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 2355802,  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_2355802_0',);
                }

            }

            // _assetic_f43dd91
            if ('/js/f43dd91.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f43dd91',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_f43dd91',);
            }

            // _assetic_f43dd91_0
            if ('/js/f43dd91_perfect-scrollbar.jquery.min_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f43dd91',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_f43dd91_0',);
            }

            // _assetic_73eee36
            if ('/js/73eee36.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '73eee36',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_73eee36',);
            }

            // _assetic_73eee36_0
            if ('/js/73eee36_jquery.matchHeight-min_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '73eee36',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_73eee36_0',);
            }

            // _assetic_cb6dcd3
            if ('/js/cb6dcd3.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'cb6dcd3',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_cb6dcd3',);
            }

            // _assetic_cb6dcd3_0
            if ('/js/cb6dcd3_screenfull.min_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'cb6dcd3',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_cb6dcd3_0',);
            }

            // _assetic_6e9eba3
            if ('/js/6e9eba3.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '6e9eba3',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_6e9eba3',);
            }

            // _assetic_6e9eba3_0
            if ('/js/6e9eba3_pace.min_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '6e9eba3',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_6e9eba3_0',);
            }

            // _assetic_9be4aae
            if ('/js/9be4aae.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9be4aae',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_9be4aae',);
            }

            // _assetic_9be4aae_0
            if ('/js/9be4aae_app-sidebar_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9be4aae',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_9be4aae_0',);
            }

            // _assetic_5f776c4
            if ('/js/5f776c4.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5f776c4',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_5f776c4',);
            }

            // _assetic_5f776c4_0
            if ('/js/5f776c4_dashboard1_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5f776c4',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_5f776c4_0',);
            }

            // fos_js_routing_js
            if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_js_routing_js;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
            }
            not_fos_js_routing_js:

        }

        elseif (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/5')) {
                // _assetic_5030b2f
                if ('/css/5030b2f.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5030b2f',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_5030b2f',);
                }

                // _assetic_5030b2f_0
                if ('/css/5030b2f_materialize_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5030b2f',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_5030b2f_0',);
                }

                // _assetic_515b523
                if ('/css/515b523.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '515b523',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_515b523',);
                }

                // _assetic_515b523_0
                if ('/css/515b523_flag-icon.min_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '515b523',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_515b523_0',);
                }

                // _assetic_59cf342
                if ('/css/59cf342.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '59cf342',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_59cf342',);
                }

                // _assetic_59cf342_0
                if ('/css/59cf342_materialise_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '59cf342',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_59cf342_0',);
                }

                // _assetic_54307f7
                if ('/css/54307f7.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '54307f7',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_54307f7',);
                }

                // _assetic_54307f7_0
                if ('/css/54307f7_structure2_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '54307f7',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_54307f7_0',);
                }

            }

            elseif (0 === strpos($pathinfo, '/css/b')) {
                // _assetic_bcd6434
                if ('/css/bcd6434.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bcd6434',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bcd6434',);
                }

                // _assetic_bcd6434_0
                if ('/css/bcd6434_style_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bcd6434',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_bcd6434_0',);
                }

                // _assetic_be390db
                if ('/css/be390db.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'be390db',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_be390db',);
                }

                // _assetic_be390db_0
                if ('/css/be390db_prism.min_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'be390db',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_be390db_0',);
                }

            }

            // _assetic_8b2c5d9
            if ('/css/8b2c5d9.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8b2c5d9',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_8b2c5d9',);
            }

            // _assetic_8b2c5d9_0
            if ('/css/8b2c5d9_custom_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8b2c5d9',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_8b2c5d9_0',);
            }

            if (0 === strpos($pathinfo, '/css/1')) {
                // _assetic_1ace4c0
                if ('/css/1ace4c0.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1ace4c0',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_1ace4c0',);
                }

                // _assetic_1ace4c0_0
                if ('/css/1ace4c0_perfect-scrollbar_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1ace4c0',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_1ace4c0_0',);
                }

                // _assetic_1c1a915
                if ('/css/1c1a915.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1c1a915',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_1c1a915',);
                }

                // _assetic_1c1a915_0
                if ('/css/1c1a915_chartist.min_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1c1a915',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_1c1a915_0',);
                }

            }

            // _assetic_60b9c06
            if ('/css/60b9c06.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '60b9c06',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_60b9c06',);
            }

            // _assetic_60b9c06_0
            if ('/css/60b9c06_mycard_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '60b9c06',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_60b9c06_0',);
            }

            // _assetic_ebed75f
            if ('/css/ebed75f.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ebed75f',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_ebed75f',);
            }

            // _assetic_ebed75f_0
            if ('/css/ebed75f_style_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ebed75f',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_ebed75f_0',);
            }

            // _assetic_f1ed8af
            if ('/css/f1ed8af.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f1ed8af',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_f1ed8af',);
            }

            // _assetic_f1ed8af_0
            if ('/css/f1ed8af_style_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f1ed8af',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_f1ed8af_0',);
            }

            // _assetic_cdd471d
            if ('/css/cdd471d.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'cdd471d',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_cdd471d',);
            }

            // _assetic_cdd471d_0
            if ('/css/cdd471d_perfect-scrollbar.min_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'cdd471d',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_cdd471d_0',);
            }

            // _assetic_24d3c0a
            if ('/css/24d3c0a.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '24d3c0a',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_24d3c0a',);
            }

            // _assetic_24d3c0a_0
            if ('/css/24d3c0a_app_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '24d3c0a',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_24d3c0a_0',);
            }

            // _assetic_afae4f3
            if ('/css/afae4f3.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'afae4f3',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_afae4f3',);
            }

            // _assetic_afae4f3_0
            if ('/css/afae4f3_bootstrap-3.4.4.min9b81_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'afae4f3',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_afae4f3_0',);
            }

            // _assetic_0bf727a
            if ('/css/0bf727a.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '0bf727a',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_0bf727a',);
            }

            // _assetic_0bf727a_0
            if ('/css/0bf727a_structure_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '0bf727a',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_0bf727a_0',);
            }

            // _assetic_4c030b7
            if ('/css/4c030b7.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4c030b7',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_4c030b7',);
            }

            // _assetic_4c030b7_0
            if ('/css/4c030b7_ion_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4c030b7',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_4c030b7_0',);
            }

        }

        // comment_marche
        if ('/comment-ca-marche' === $pathinfo) {
            return array (  '_controller' => 'FrontEndBundle\\Controller\\PageController::commentCaMarcheAction',  '_route' => 'comment_marche',);
        }

        // codeverification
        if (0 === strpos($pathinfo, '/inscription') && preg_match('#^/inscription/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'codeverification')), array (  '_controller' => 'ActeurBundle\\Controller\\AjaxController::verifieCodeAction',));
        }

        // porteur_admin_
        if ('/iopuy' === $pathinfo) {
            return array (  '_controller' => 'ActeurBundle\\Controller\\DefaultController::indexAction',  '_route' => 'porteur_admin_',);
        }

        if (0 === strpos($pathinfo, '/register')) {
            // code-validation
            if ('/register/code-validation' === $pathinfo) {
                return array (  '_controller' => 'ActeurBundle\\Controller\\CodeVerificationController::indexAction',  '_route' => 'code-validation',);
            }

            // donateur_register
            if ('/register/donateur' === $pathinfo) {
                return array (  '_controller' => 'ActeurBundle\\Controller\\RegistrationDonateurController::registerAction',  '_route' => 'donateur_register',);
            }

            // porteur_register
            if ('/register/porteur' === $pathinfo) {
                return array (  '_controller' => 'ActeurBundle\\Controller\\RegistrationPromoteurController::registerAction',  '_route' => 'porteur_register',);
            }

            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'ActeurBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'ActeurBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'ActeurBundle\\Controller\\RegistrationController::confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'ActeurBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        elseif (0 === strpos($pathinfo, '/espace')) {
            if (0 === strpos($pathinfo, '/espace-donateur')) {
                // donateur_admin
                if ('/espace-donateur' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'donateur_admin');
                    }

                    return array (  '_controller' => 'ActeurBundle\\Controller\\DonateursController::indexAction',  '_route' => 'donateur_admin',);
                }

                if (0 === strpos($pathinfo, '/espace-donateur/projet')) {
                    // donateur_projets_finances
                    if ('/espace-donateur/projets-finances' === $pathinfo) {
                        return array (  '_controller' => 'ActeurBundle\\Controller\\DonateursController::mesProjetsFinanacesAction',  '_route' => 'donateur_projets_finances',);
                    }

                    // payement_admin
                    if (preg_match('#^/espace\\-donateur/projet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'payement_admin')), array (  '_controller' => 'ActeurBundle\\Controller\\DonateursController::VoteProjetAction',));
                    }

                }

                // premium_index
                if ('/espace-donateur/payement' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'premium_index');
                    }

                    return array (  '_controller' => 'ActeurBundle\\Controller\\PayementController::indexAction',  '_route' => 'premium_index',);
                }

                // don_historique
                if ('/espace-donateur/historique-investissement' === $pathinfo) {
                    return array (  '_controller' => 'ActeurBundle\\Controller\\DonateursController::historiqueInvestAction',  '_route' => 'don_historique',);
                }

            }

            elseif (0 === strpos($pathinfo, '/espace-promoteur')) {
                // porteur_admin
                if ('/espace-promoteur' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'porteur_admin');
                    }

                    return array (  '_controller' => 'ActeurBundle\\Controller\\PromotteurController::indexAction',  '_route' => 'porteur_admin',);
                }

                if (0 === strpos($pathinfo, '/espace-promoteur/projet/new')) {
                    // porteur_projet_new
                    if ('/espace-promoteur/projet/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_porteur_projet_new;
                        }

                        return array (  '_controller' => 'ActeurBundle\\Controller\\PromotteurController::newAction',  '_route' => 'porteur_projet_new',);
                    }
                    not_porteur_projet_new:

                    // porteur_projet_new_confirm
                    if (preg_match('#^/espace\\-promoteur/projet/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_porteur_projet_new_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'porteur_projet_new_confirm')), array (  '_controller' => 'ActeurBundle\\Controller\\PromotteurController::confirnActon',));
                    }
                    not_porteur_projet_new_confirm:

                }

                // mes_projets
                if ('/espace-promoteur/mes-projets' === $pathinfo) {
                    return array (  '_controller' => 'ActeurBundle\\Controller\\PromotteurController::mesProjetsAction',  '_route' => 'mes_projets',);
                }

            }

            elseif (0 === strpos($pathinfo, '/espace/administration')) {
                if (0 === strpos($pathinfo, '/espace/administration/categories')) {
                    // categories_index
                    if ('/espace/administration/categories' === $trimmedPathinfo) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'categories_index');
                        }

                        return array (  '_controller' => 'AdminBundle\\Controller\\CategoriesController::indexAction',  '_route' => 'categories_index',);
                    }

                    // categories_new
                    if ('/espace/administration/categories/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_categories_new;
                        }

                        return array (  '_controller' => 'AdminBundle\\Controller\\CategoriesController::newAction',  '_route' => 'categories_new',);
                    }
                    not_categories_new:

                    // categories_show
                    if (preg_match('#^/espace/administration/categories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_categories_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categories_show')), array (  '_controller' => 'AdminBundle\\Controller\\CategoriesController::showAction',));
                    }
                    not_categories_show:

                    // cat_preview
                    if (preg_match('#^/espace/administration/categories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_cat_preview;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cat_preview')), array (  '_controller' => 'AdminBundle\\Controller\\CategoriesController::catshowAction',));
                    }
                    not_cat_preview:

                    // categories_edit
                    if (preg_match('#^/espace/administration/categories/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_categories_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categories_edit')), array (  '_controller' => 'AdminBundle\\Controller\\CategoriesController::editAction',));
                    }
                    not_categories_edit:

                    // categories_delete
                    if (preg_match('#^/espace/administration/categories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_categories_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categories_delete')), array (  '_controller' => 'AdminBundle\\Controller\\CategoriesController::deleteAction',));
                    }
                    not_categories_delete:

                }

                // homepage_admin
                if ('/espace/administration' === $pathinfo) {
                    return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage_admin',);
                }

                if (0 === strpos($pathinfo, '/espace/administration/porteur')) {
                    // porteur_index
                    if ('/espace/administration/porteur' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_porteur_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'porteur_index');
                        }

                        return array (  '_controller' => 'AdminBundle\\Controller\\PorteurController::indexAction',  '_route' => 'porteur_index',);
                    }
                    not_porteur_index:

                    // porteur_new
                    if ('/espace/administration/porteur/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_porteur_new;
                        }

                        return array (  '_controller' => 'AdminBundle\\Controller\\PorteurController::newAction',  '_route' => 'porteur_new',);
                    }
                    not_porteur_new:

                    // porteur_show
                    if (preg_match('#^/espace/administration/porteur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_porteur_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'porteur_show')), array (  '_controller' => 'AdminBundle\\Controller\\PorteurController::showAction',));
                    }
                    not_porteur_show:

                    // porteur_edit
                    if (preg_match('#^/espace/administration/porteur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_porteur_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'porteur_edit')), array (  '_controller' => 'AdminBundle\\Controller\\PorteurController::editAction',));
                    }
                    not_porteur_edit:

                    // porteur_delete
                    if (preg_match('#^/espace/administration/porteur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_porteur_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'porteur_delete')), array (  '_controller' => 'AdminBundle\\Controller\\PorteurController::deleteAction',));
                    }
                    not_porteur_delete:

                }

                elseif (0 === strpos($pathinfo, '/espace/administration/projets')) {
                    // projet_new
                    if ('/espace/administration/projets/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_projet_new;
                        }

                        return array (  '_controller' => 'AdminBundle\\Controller\\ProjetsController::newAction',  '_route' => 'projet_new',);
                    }
                    not_projet_new:

                    // projet_liste
                    if ('/espace/administration/projets/liste' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_projet_liste;
                        }

                        return array (  '_controller' => 'AdminBundle\\Controller\\ProjetsController::lesProjetsAction',  '_route' => 'projet_liste',);
                    }
                    not_projet_liste:

                    // projet_validation
                    if (0 === strpos($pathinfo, '/espace/administration/projets/validation') && preg_match('#^/espace/administration/projets/validation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_projet_validation;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_validation')), array (  '_controller' => 'AdminBundle\\Controller\\ProjetsController::vaildeProjetsAction',));
                    }
                    not_projet_validation:

                    // le_projet_admin 
                    if (0 === strpos($pathinfo, '/espace/administration/projets/fiche-projet') && preg_match('#^/espace/administration/projets/fiche\\-projet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_le_projet_admin;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'le_projet_admin ')), array (  '_controller' => 'AdminBundle\\Controller\\ProjetsController::leProjetAction',));
                    }
                    not_le_projet_admin:

                    // projet_valide
                    if ('/espace/administration/projets/projet_valide' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_projet_valide;
                        }

                        return array (  '_controller' => 'AdminBundle\\Controller\\ProjetsController::projetsEnfinancementAction',  '_route' => 'projet_valide',);
                    }
                    not_projet_valide:

                }

            }

        }

        // stripe_webhook
        if ('/wh' === $pathinfo) {
            return array (  '_controller' => 'ActeurBundle\\Controller\\StripeController::webhookAction',  '_route' => 'stripe_webhook',);
        }

        // homepage
        if ('/demo' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // accueil
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'accueil');
            }

            return array (  '_controller' => 'FrontEndBundle\\Controller\\DefaultController::indexAction',  '_route' => 'accueil',);
        }

        if (0 === strpos($pathinfo, '/pro')) {
            // projets_realises
            if ('/projets-realises' === $pathinfo) {
                return array (  '_controller' => 'FrontEndBundle\\Controller\\DefaultController::projetsRealiseAction',  '_route' => 'projets_realises',);
            }

            // projets_en_cours
            if ('/projets-en-cours' === $pathinfo) {
                return array (  '_controller' => 'FrontEndBundle\\Controller\\DefaultController::projetsEcoursAction',  '_route' => 'projets_en_cours',);
            }

            if (0 === strpos($pathinfo, '/profile')) {
                // fos_user_profile_show
                if ('/profile' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_profile_show;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ('/profile/edit' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_profile_edit;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                }
                not_fos_user_profile_edit:

                // fos_user_change_password
                if ('/profile/change-password' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_change_password;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
                }
                not_fos_user_change_password:

            }

        }

        // projets_finances
        if ('/financements-ternimes' === $pathinfo) {
            return array (  '_controller' => 'FrontEndBundle\\Controller\\DefaultController::projetsFinanceAction',  '_route' => 'projets_finances',);
        }

        // aboutus
        if ('/qui-sommes-nous' === $pathinfo) {
            return array (  '_controller' => 'FrontEndBundle\\Controller\\PageController::aboutUsAction',  '_route' => 'aboutus',);
        }

        if (0 === strpos($pathinfo, '/l')) {
            // le_projet
            if (0 === strpos($pathinfo, '/le-projet') && preg_match('#^/le\\-projet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'le_projet')), array (  '_controller' => 'FrontEndBundle\\Controller\\ProjetsController::leProjetAction',));
            }

            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
