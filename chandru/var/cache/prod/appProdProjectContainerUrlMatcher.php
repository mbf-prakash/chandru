<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/c')) {
                if (0 === strpos($pathinfo, '/admin/ca')) {
                    // cashdiscount
                    if ('/admin/cashdiscount' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\CashdiscountController::cashdiscountAction',  '_route' => 'cashdiscount',);
                    }

                    // category
                    if ('/admin/category' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::categoryAction',  '_route' => 'category',);
                    }

                    // cancelinvoice
                    if ('/admin/cancelinvoice' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\InvoiceController::cancelinvoiceAction',  '_route' => 'cancelinvoice',);
                    }

                }

                // changepassword
                if ('/admin/changepassword' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ChangepasswordController::changepasswordAction',  '_route' => 'changepassword',);
                }

                // changedb
                if ('/admin/changedb' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\UnitController::changedbAction',  '_route' => 'changedb',);
                }

                // customer
                if ('/admin/customer' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CustomerController::customerAction',  '_route' => 'customer',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/add')) {
                // addcategory
                if ('/admin/addcategory' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::addcategoryAction',  '_route' => 'addcategory',);
                }

                // addcustomer
                if ('/admin/addcustomer' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CustomerController::addcustomerAction',  '_route' => 'addcustomer',);
                }

                // addexpanses
                if ('/admin/addexpanses' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ExpansesController::addexpansesAction',  '_route' => 'addexpanses',);
                }

                // addinvoice
                if ('/admin/addinvoice' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\InvoiceController::addinvoiceAction',  '_route' => 'addinvoice',);
                }

                // addpinvoice
                if ('/admin/addpinvoice' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PinvoiceController::addpinvoiceAction',  '_route' => 'addpinvoice',);
                }

                // addproduct
                if ('/admin/addproduct' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ProductController::addproductAction',  '_route' => 'addproduct',);
                }

                // addstate
                if ('/admin/addstate' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\StateController::addstateAction',  '_route' => 'addstate',);
                }

                // addsupplier
                if ('/admin/addsupplier' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SupplierController::addsupplierAction',  '_route' => 'addsupplier',);
                }

                // addunit
                if ('/admin/addunit' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\UnitController::addunitAction',  '_route' => 'addunit',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/e')) {
                if (0 === strpos($pathinfo, '/admin/edit')) {
                    // editcategory
                    if ('/admin/editcategory' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::editcategoryAction',  '_route' => 'editcategory',);
                    }

                    // editcustomer
                    if ('/admin/editcustomer' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\CustomerController::editcustomerAction',  '_route' => 'editcustomer',);
                    }

                    // editexpanses
                    if ('/admin/editexpanses' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\ExpansesController::editexpansesAction',  '_route' => 'editexpanses',);
                    }

                    // editproduct
                    if ('/admin/editproduct' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\ProductController::editproductAction',  '_route' => 'editproduct',);
                    }

                    // editstate
                    if ('/admin/editstate' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\StateController::editstateAction',  '_route' => 'editstate',);
                    }

                    // editsupplier
                    if ('/admin/editsupplier' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\SupplierController::editsupplierAction',  '_route' => 'editsupplier',);
                    }

                    // editunit
                    if ('/admin/editunit' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\UnitController::editunitAction',  '_route' => 'editunit',);
                    }

                }

                // expanses
                if ('/admin/expanses' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ExpansesController::expansesAction',  '_route' => 'expanses',);
                }

                // expensesbymonth
                if ('/admin/expensesbymonth' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ExpensesbymonthController::expensesbymonthAction',  '_route' => 'expensesbymonth',);
                }

            }

            // dashboard
            if ('/admin/dashboard' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DashboardController::dashboardAction',  '_route' => 'dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/delete')) {
                // deleteexpanses
                if ('/admin/deleteexpanses' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ExpansesController::deleteexpansesAction',  '_route' => 'deleteexpanses',);
                }

                if (0 === strpos($pathinfo, '/admin/deleteinvoice')) {
                    // deleteinvoice
                    if ('/admin/deleteinvoice' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\InvoiceController::deleteinvoiceAction',  '_route' => 'deleteinvoice',);
                    }

                    // deleteinvoiceitem
                    if ('/admin/deleteinvoiceitem' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\InvoiceitemController::deleteinvoiceitemAction',  '_route' => 'deleteinvoiceitem',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/deletepinvoice')) {
                    // deletepinvoice
                    if ('/admin/deletepinvoice' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PinvoiceController::deletepinvoiceAction',  '_route' => 'deletepinvoice',);
                    }

                    // deletepinvoiceitem
                    if ('/admin/deletepinvoiceitem' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PinvoiceitemController::deletepinvoiceitemAction',  '_route' => 'deletepinvoiceitem',);
                    }

                }

            }

            // imagebrowser
            if ('/admin/imagebrowser' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ImagebrowserController::imagebrowserAction',  '_route' => 'imagebrowser',);
            }

            if (0 === strpos($pathinfo, '/admin/invoice')) {
                // invoice
                if ('/admin/invoice' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\InvoiceController::invoiceAction',  '_route' => 'invoice',);
                }

                // invoiceamount
                if (0 === strpos($pathinfo, '/admin/invoiceamount') && preg_match('#^/admin/invoiceamount/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'invoiceamount')), array (  '_controller' => 'AppBundle\\Controller\\InvoiceController::invoiceamountAction',));
                }

                // invoiceview
                if ('/admin/invoiceview' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\InvoiceController::invoiceviewAction',  '_route' => 'invoiceview',);
                }

                // invoicepdf
                if ('/admin/invoicepdf' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\InvoiceController::invoicepdfAction',  '_route' => 'invoicepdf',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_invoicepdf;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'invoicepdf'));
                    }

                    return $ret;
                }
                not_invoicepdf:

                // invoiceitem
                if ('/admin/invoiceitem' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\InvoiceitemController::invoiceitemAction',  '_route' => 'invoiceitem',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/p')) {
                if (0 === strpos($pathinfo, '/admin/pinvoice')) {
                    // pinvoice
                    if ('/admin/pinvoice' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PinvoiceController::pinvoiceAction',  '_route' => 'pinvoice',);
                    }

                    // pinvoiceamount
                    if (0 === strpos($pathinfo, '/admin/pinvoiceamount') && preg_match('#^/admin/pinvoiceamount/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pinvoiceamount')), array (  '_controller' => 'AppBundle\\Controller\\PinvoiceController::pinvoiceamountAction',));
                    }

                    // pinvoiceitem
                    if ('/admin/pinvoiceitem' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PinvoiceitemController::pinvoiceitemAction',  '_route' => 'pinvoiceitem',);
                    }

                }

                // product
                if ('/admin/product' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ProductController::productAction',  '_route' => 'product',);
                }

                if (0 === strpos($pathinfo, '/admin/purchase')) {
                    // purchasebymonth
                    if ('/admin/purchasebymonth' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PurchasebymonthController::purchasebymonthAction',  '_route' => 'purchasebymonth',);
                    }

                    // purchasebyyear
                    if ('/admin/purchasebyyear' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PurchasebyyearController::purchasebyyearAction',  '_route' => 'purchasebyyear',);
                    }

                    // purchaseitems
                    if ('/admin/purchaseitems' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PurchaseitemsController::purchaseitemsAction',  '_route' => 'purchaseitems',);
                    }

                    // purchaselog
                    if ('/admin/purchaselog' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PurchaselogController::purchaselogAction',  '_route' => 'purchaselog',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/s')) {
                if (0 === strpos($pathinfo, '/admin/sale')) {
                    // salebymonth
                    if ('/admin/salebymonth' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\SalebymonthController::salebymonthAction',  '_route' => 'salebymonth',);
                    }

                    // salebyyear
                    if ('/admin/salebyyear' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\SalebyyearController::salebyyearAction',  '_route' => 'salebyyear',);
                    }

                    // saleitems
                    if ('/admin/saleitems' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\SaleitemsController::saleitemsAction',  '_route' => 'saleitems',);
                    }

                }

                // state
                if ('/admin/state' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\StateController::stateAction',  '_route' => 'state',);
                }

                // supplier
                if ('/admin/supplier' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SupplierController::supplierAction',  '_route' => 'supplier',);
                }

            }

            // unit
            if ('/admin/unit' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\UnitController::unitAction',  '_route' => 'unit',);
            }

            if (0 === strpos($pathinfo, '/admin/register')) {
                // fos_user_registration_register
                if ('/admin/register' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_registration_register;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                    }

                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_registration_register;
                    }

                    return $ret;
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/admin/register/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_registration_check_email;
                    }

                    return $ret;
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/admin/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/admin/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/admin/register/confirmed' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirmed:

                }

            }

        }

        // home
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\HomeController::homeAction',  '_route' => 'home',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_home;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'home'));
            }

            return $ret;
        }
        not_home:

        // useradmin
        if ('/user/adminarea' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::adminareaAction',  '_route' => 'useradmin',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        // fos_user_profile_show
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_fos_user_profile_show;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
            }

            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_fos_user_profile_show;
            }

            return $ret;
        }
        not_fos_user_profile_show:

        // fos_user_profile_edit
        if ('/edit' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_profile_edit;
            }

            return $ret;
        }
        not_fos_user_profile_edit:

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        // fos_user_change_password
        if ('/profile/change-password' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_change_password;
            }

            return $ret;
        }
        not_fos_user_change_password:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
