// Obtiene las propiedades de la página
var property= $('aside');

const page = 
    {
        lang:    property.data('lang'),                             // El idioma de la página
        site:    property.data('site'),                             // El site de la página
        module:  property.data('module'),                           // El módulo actual de la página
        user:    property.data('usuario'),                          // El id del usuario actual de la página
        perfil:  property.data('perfil'),                           // El id del perfil del usuario actual de la página
        isAdmin: property.data('isAdmin') == 1,                     // El usuario es admin o no
        empresa: property.data('empresa'),                          // El id de la empresa actual
    };

// Códigos de Error HTTP
const HTTPError = 
    {
        BadRequest:     400,
        AccessDenied:   403,
        NotFound:       404,
        NotAcceptable:  406
    };

// Opciones del menú lateral del módulo
const Menu =
    {
        Clientes         : 'clientes',
        Ventas           : 'ventas',
        Arreglos         : 'arreglos',
        Facturas         : 'facturas',
        Gastos           : 'gastos',
        Pagos            : 'pagos',




        /**
         * Fija el menú como activo
         *
         * @param {Menu} menu   Una opción de menú
         *                      Ej: Menu.Trabajadores 
         */
        active: menu => {
            // Deshabilita cualquier item menú
            $('.menu-item').removeClass('active');

            // Active el item del menú
            let menuItem = $(`.menu-item[data-id="${menu}"]`);

            menuItem.addClass('active');
        },
    };

