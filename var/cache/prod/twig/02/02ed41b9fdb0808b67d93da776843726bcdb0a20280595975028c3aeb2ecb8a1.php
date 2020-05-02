<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__3c599f97fee1c1b911b3a80602ffc1bf99ff75d9c7e501b311ff944566ac815d */
class __TwigTemplate_765e77b874bfff0228bd2e6847e8603b4d519fdb7ca62ab6ee31a22b20143f5f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"mx\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/tienda/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/tienda/img/app_icon.png\" />

<title>Añadir nuevo • Melitzaak</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminEmployees';
    var iso_user = 'mx';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-MX';
    var country_iso_code = 'MX';
    var _PS_VERSION_ = '1.7.6.5';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Un nuevo pedido se ha colocado en su tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en su tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer el mensaje';
    var token = 'aee96eaa7561960ac07abf48a6a34f7e';
    var token_admin_orders = '809937e3e167266bd37e79895261c8f5';
    var token_admin_customers = '300e45a23cab88818a3a059fd6b847fc';
    var token_admin_customer_threads = '0438ab10a1456c74f0374f111eba08d2';
    var currentIndex = 'index.php?controller=AdminEmployees';
    var employee_token = 'aee96eaa7561960ac07abf48a6a34f7e';
    var choose_language_translate = 'Elegir idioma';
    var default_language = '1';
    var admin_modules_link = '/tienda/admin321jkbfut/index.php/improve/modules/catalog/recommended?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA';
    var admin_notification_get_link = '/tienda/admin321jkbfut/index.php/common/notifications?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA';
    var admin_notification_push_link = '/tienda/admin321jkbfut/index.php/common/notifications/ack?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA';
    var tab_modules_list = '';
    var update_success_msg = 'Actualización con éxito';
    var errorLogin = 'PrestaShop no pudo iniciar sesión en Addons. Por favor, verifica tus datos de acceso y tu conexión a Internet.';
    var search_product_msg = 'Buscar un producto';
  </script>

      <link href=\"/tienda/admin321jkbfut/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/tienda/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/tienda/admin321jkbfut/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/tienda\\/admin321jkbfut\\/\";
var baseDir = \"\\/tienda\\/\";
var changeFormLanguageUrl = \"\\/tienda\\/admin321jkbfut\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\";
var currency = {\"iso_code\":\"MXN\",\"sign\":\"\$\",\"name\":\"Peso mexicano\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"MXN\",\"currencySymbol\":\"\$\",\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/tienda/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/tienda/admin321jkbfut/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/tienda/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/tienda/js/admin.js?v=1.7.6.5\"></script>
<script type=\"text/javascript\" src=\"/tienda/admin321jkbfut/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/tienda/js/tools.js?v=1.7.6.5\"></script>
<script type=\"text/javascript\" src=\"/tienda/admin321jkbfut/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/tienda/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/tienda/admin321jkbfut/themes/default/js/vendor/nv.d3.min.js\"></script>

  <script type=\"text/javascript\">
/*
 * Return total of notification per checkbox checked
 * @param  int nbNewCustomer
 * @param  int nbNewOrder
 * @param  int nbNewMessage
 * @return int result        Total of Notification
 */
function getNotification(nbNewCustomer, nbNewOrder, nbNewMessage) {
    let result = 0;
    //if radiobutton is checked
     result += nbNewOrder;      result += nbNewCustomer;      result += nbNewMessage; 
    return result;
}

function loadAjax(adminController) {
    \$.ajax({
        type: 'POST',
        dataType: 'JSON',
        url: adminController,
        data: {
            ajax: true,
            action: \"GetNotifications\",
        },

        success: function(data) {

            let nbNewCustomers = parseInt(data.customer.total);
            let nbNewOrders = parseInt(data.order.total);
            let nbNewCustomerMessages = parseInt(data.customer_message.total);

            let nbTotalNotification = getNotification(nbNewCustomers, nbNewOrders, nbNewCustomerMessages);

            favicon.badge(nbTotalNotification);
        },
        error: function(err) {
            console.log(err);
            console.log(adminController);
        },
    });
}

function updateNotifications(type) {
  \$.post(
    baseAdminDir + \"ajax.php\",
    {
      \"updateElementEmployee\": \"1\",
      \"updateElementEmployeeType\": type
    }
  );
}

\$(document).ready(function() {
    adminController = adminController.replace(/\\amp;/g, '');
    //set the configuration of the favicon
    window.favicon = new Favico({
        animation: 'popFade',
        bgColor: BgColor,
        textColor: TxtColor,
    });
    loadAjax(adminController)
    setInterval(function() {
        loadAjax(adminController);
    }, 60000); //refresh notification every 60 seconds

    //update favicon when you click on the customer tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomers', function (e) {
        updateNotifications('customer');
    });
    //update favicon when you click on the customer service tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomerThreads', function (e) {
        updateNotifications('customer_message');
    });
    //update favicon when you click on the order tab into your backoffice
    \$(document).on('click', '#subtab-AdminOrders', function (e) {
        updateNotifications('order');
    });
});
</script>

<script type=\"text/javascript\">
    let BgColor = \"#DF0067\";
    let TxtColor = \"#ffffff\";
    let CheckBoxOrder = \"1\";
    let CheckBoxCustomer = \"1\";
    let CheckBoxMessage = \"1\";
    let adminController = \"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminAjaxFaviconBO&amp;token=20588cf69660bd5408ad236cbcb24c6b\";
</script>



";
        // line 167
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-mx adminemployees\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminDashboard&amp;token=4471b5215d1f5f56bea6c1ea25fb03ae\"></a>
      <span id=\"shop_version\">1.7.6.5</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=ca2b7c63bdbe3b5acc4bcbc55b243e7f\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/tienda/admin321jkbfut/index.php/improve/modules/manage?token=78b6fa106e5ae05454b3ffdc3b911450\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/tienda/admin321jkbfut/index.php/sell/catalog/categories/new?token=78b6fa106e5ae05454b3ffdc3b911450\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=7e7923c4e451acbf022c5db14c041392\"
                 data-item=\"Nuevo cupón\"
      >Nuevo cupón</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/tienda/admin321jkbfut/index.php/sell/catalog/products/new?token=78b6fa106e5ae05454b3ffdc3b911450\"
                 data-item=\"Nuevo producto\"
      >Nuevo producto</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminOrders&amp;token=809937e3e167266bd37e79895261c8f5\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"10\"
        data-icon=\"icon-AdminParentEmployees\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/employees/new?-urIoU9quG2z5mGop9hrilYJh0ZoA\"
        data-post-link=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminQuickAccesses&token=f760fd94047c29999527905c1e74e2e8\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Empleados - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Agregar página actual al Acceso Rápido
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminQuickAccesses&token=f760fd94047c29999527905c1e74e2e8\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/tienda/admin321jkbfut/index.php?controller=AdminSearch&amp;token=b6523d9c7d5ffc956863d34c540d78cc\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        En todas partes
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"En todas partes\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> En todas partes</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, SKU, referencia...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, nombre...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Número de factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BUSCAR</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/tienda/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Ver mi tienda
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Ha comprobado recientemente su tipo de cambio?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              Se encuentra activo en las redes sociales últimamente?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              ¡Eso significa más tiempo para otra cosa!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/oscar.pech%40cbtis72.edu.mx.jpg\" /></span>
      <span class=\"employee_profile\">Bienvenido de nuevo, Oscar Daniel</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/tienda/admin321jkbfut/index.php/configure/advanced/employees/1/edit?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\">
      <i class=\"material-icons\">settings</i>
      Tu perfil
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Recursos</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Entrenamiento</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Encontrar un Experto</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> Marketplace de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Centro de ayuda</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminLogin&amp;logout=1&amp;token=7e9ca9f61eb77f2283743a89ed0e65e2\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/tienda/admin321jkbfut/index.php/configure/advanced/employees/toggle-navigation?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminDashboard&amp;token=4471b5215d1f5f56bea6c1ea25fb03ae\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Panel de control</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Ventas</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminOrders&amp;token=809937e3e167266bd37e79895261c8f5\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Pedidos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminOrders&amp;token=809937e3e167266bd37e79895261c8f5\" class=\"link\"> Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/tienda/admin321jkbfut/index.php/sell/orders/invoices/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminSlip&amp;token=b5f9a4c9b3bc2cbc052b265f41758dc0\" class=\"link\"> Notas de Crédito
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/tienda/admin321jkbfut/index.php/sell/orders/delivery-slips/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Albaranes de entrega
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminCarts&amp;token=62a24f95c04543dae4a4f58bda1eee83\" class=\"link\"> Carros de compra
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/tienda/admin321jkbfut/index.php/sell/catalog/products?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catalogue
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/tienda/admin321jkbfut/index.php/sell/catalog/products?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/tienda/admin321jkbfut/index.php/sell/catalog/categories?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Categorías
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminTracking&amp;token=eee0305cb63bc7eb7828351ceff06eb5\" class=\"link\"> Monitoreo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminAttributesGroups&amp;token=86d0844c45f61f594ac9bb6639897442\" class=\"link\"> Atributos y Características
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/tienda/admin321jkbfut/index.php/sell/catalog/brands/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Marcas y Proveedores
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminAttachments&amp;token=7ec07ae0b6a8b0bf2685c1200dc827c9\" class=\"link\"> Archivos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminCartRules&amp;token=7e7923c4e451acbf022c5db14c041392\" class=\"link\"> Descuentos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/tienda/admin321jkbfut/index.php/sell/stocks/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/tienda/admin321jkbfut/index.php/sell/customers/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clientes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/tienda/admin321jkbfut/index.php/sell/customers/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminAddresses&amp;token=a362caacbdda380325d66aca91e2c8ea\" class=\"link\"> Direcciones
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminCustomerThreads&amp;token=0438ab10a1456c74f0374f111eba08d2\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Servicio a Clientes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminCustomerThreads&amp;token=0438ab10a1456c74f0374f111eba08d2\" class=\"link\"> Servicio a Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminOrderMessage&amp;token=cd6637428d8d888062465dd9b1a2ef0e\" class=\"link\"> Mensajes de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminReturn&amp;token=283092721d7c15905db4feeb8553708c\" class=\"link\"> Devoluciones de mercancía
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminStats&amp;token=ca2b7c63bdbe3b5acc4bcbc55b243e7f\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Estadísticas
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Mejoras</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/tienda/admin321jkbfut/index.php/improve/modules/manage?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Módulos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/tienda/admin321jkbfut/index.php/improve/modules/manage?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"/tienda/admin321jkbfut/index.php/improve/modules/catalog?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Catálogo de Módulos
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/tienda/admin321jkbfut/index.php/improve/design/themes/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Diseño
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/tienda/admin321jkbfut/index.php/improve/design/themes/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Tema y logotipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\" id=\"subtab-AdminThemesCatalog\">
                              <a href=\"/tienda/admin321jkbfut/index.php/improve/design/themes-catalog/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Catálogo de Temas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                              <a href=\"/tienda/admin321jkbfut/index.php/improve/design/mail_theme/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Tema Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/tienda/admin321jkbfut/index.php/improve/design/cms-pages/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Páginas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/tienda/admin321jkbfut/index.php/improve/design/modules/positions/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Posiciones
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminImages&amp;token=cfae73df990148e90309e9751047ca7e\" class=\"link\"> Ajustes de imágenes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/tienda/admin321jkbfut/index.php/modules/link-widget/list?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminCarriers&amp;token=b6fa402b2b30958afded30c6907626b1\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Envío
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminCarriers&amp;token=b6fa402b2b30958afded30c6907626b1\" class=\"link\"> Paqueterias
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/tienda/admin321jkbfut/index.php/improve/shipping/preferences?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/tienda/admin321jkbfut/index.php/improve/payment/payment_methods?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Pago
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/tienda/admin321jkbfut/index.php/improve/payment/payment_methods?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Métodos de pago
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/tienda/admin321jkbfut/index.php/improve/payment/preferences?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/tienda/admin321jkbfut/index.php/improve/international/localization/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Internacional
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/tienda/admin321jkbfut/index.php/improve/international/localization/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminZones&amp;token=794c0f44972cf33cab707397a4ef6ce8\" class=\"link\"> Ubicaciones Geográficas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/tienda/admin321jkbfut/index.php/improve/international/taxes/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> IVAs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/tienda/admin321jkbfut/index.php/improve/international/translations/settings?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Traducciones
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/tienda/admin321jkbfut/index.php/configure/shop/preferences/preferences?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Configuración de la Tienda
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/tienda/admin321jkbfut/index.php/configure/shop/preferences/preferences?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Général
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/tienda/admin321jkbfut/index.php/configure/shop/order-preferences/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Configuración de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/tienda/admin321jkbfut/index.php/configure/shop/product-preferences/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Configuración de Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/tienda/admin321jkbfut/index.php/configure/shop/customer-preferences/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Configuración de Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/tienda/admin321jkbfut/index.php/configure/shop/contacts/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Contacto
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/tienda/admin321jkbfut/index.php/configure/shop/seo-urls/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Tráfico &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminSearchConf&amp;token=cd4f7fa9a416144a983e5735a9223d29\" class=\"link\"> Buscar
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/tienda/admin321jkbfut/index.php/configure/advanced/system-information/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Parámetros Avanzados
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/tienda/admin321jkbfut/index.php/configure/advanced/system-information/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Información
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/tienda/admin321jkbfut/index.php/configure/advanced/performance/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Rendimiento
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/tienda/admin321jkbfut/index.php/configure/advanced/administration/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Administración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/tienda/admin321jkbfut/index.php/configure/advanced/emails/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Correo electrónico
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/tienda/admin321jkbfut/index.php/configure/advanced/import/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Importar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/tienda/admin321jkbfut/index.php/configure/advanced/employees/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Equipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/tienda/admin321jkbfut/index.php/configure/advanced/sql-requests/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Base de datos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/tienda/admin321jkbfut/index.php/configure/advanced/logs/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Registros/Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/tienda/admin321jkbfut/index.php/configure/advanced/webservice-keys/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" class=\"link\"> Servicios Web
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Equipo</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/tienda/admin321jkbfut/index.php/configure/advanced/employees/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" aria-current=\"page\">Empleados</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Añadir nuevo          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/tienda/admin321jkbfut/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fmx%252Fdoc%252FAdminEmployees%253Fversion%253D1.7.6.5%2526country%253Dmx/Ayuda?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <li class=\"nav-item\">
                    <a href=\"/tienda/admin321jkbfut/index.php/configure/advanced/employees/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" id=\"subtab-AdminEmployees\" class=\"nav-link tab active current\" data-submenu=\"110\">
                      Empleados
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/tienda/admin321jkbfut/index.php/configure/advanced/profiles/?_token=WtucT_89cSkCOj-urIoU9quG2z5mGop9hrilYJh0ZoA\" id=\"subtab-AdminProfiles\" class=\"nav-link tab \" data-submenu=\"111\">
                      Perfiles
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminAccess&token=b1baceb37f8e4d000bb81491f4766aa9\" id=\"subtab-AdminAccess\" class=\"nav-link tab \" data-submenu=\"112\">
                      Permisos
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                      </ul>
    </div>
    
</div>
      
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1163
        $this->displayBlock('content_header', $context, $blocks);
        // line 1164
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1165
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1166
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1167
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utilice una computadora de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://localhost/tienda/admin321jkbfut/index.php?controller=AdminDashboard&amp;token=4471b5215d1f5f56bea6c1ea25fb03ae\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Volver
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-MX&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/mx/login?email=oscar.pech%40cbtis72.edu.mx&amp;firstname=Oscar+Daniel&amp;lastname=Pech+Pool&amp;website=http%3A%2F%2Flocalhost%2Ftienda%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-MX&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/tienda/admin321jkbfut/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecta tu tienda con el marketplace de PrestaShop para importar automáticamente todas tus compras de Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>¿No tiene una cuenta?</h4>
\t\t\t\t\t\t<p class='text-justify'>¡Descubra el poder de PrestaShop Addons! Explore el Marketplace oficiadl de Prestashop y encuentre más de 3 500 módulos innovadores y temas para optimizar sus ratios de conversión, incrementar el tráfico, fidelizar a sus clientes y maximizar su productividad</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectar con PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/mx/forgot-your-password\">Olvidé mi contraseña</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/mx/login?email=oscar.pech%40cbtis72.edu.mx&amp;firstname=Oscar+Daniel&amp;lastname=Pech+Pool&amp;website=http%3A%2F%2Flocalhost%2Ftienda%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-MX&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCree una cuenta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Iniciar sesión
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1274
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 167
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1163
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1164
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1165
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1166
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1274
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__3c599f97fee1c1b911b3a80602ffc1bf99ff75d9c7e501b311ff944566ac815d";
    }

    public function getDebugInfo()
    {
        return array (  1364 => 1274,  1359 => 1166,  1354 => 1165,  1349 => 1164,  1344 => 1163,  1335 => 167,  1327 => 1274,  1218 => 1167,  1215 => 1166,  1212 => 1165,  1209 => 1164,  1207 => 1163,  207 => 167,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3c599f97fee1c1b911b3a80602ffc1bf99ff75d9c7e501b311ff944566ac815d", "");
    }
}
