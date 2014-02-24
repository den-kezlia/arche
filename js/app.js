(function($) {
    App = {
        nav: $('nav a'),

        init: function() {
            this.checkWindowSize();
            this.initEvents();
        },

        initEvents: function() {
            App.nav.hover(App.menuMouseOver, App.menuMouseOut);
            $(window).resize(App.checkWindowSize);
        },

        menuMouseOver: function() {
            $(this).addClass('active');
        },

        menuMouseOut: function() {
            $(this).removeClass('active');
        },

        checkWindowSize: function() {

        }
    };

    App.init();
})(jQuery);