(function($) {
    App = {
        nav: $('nav a.nav-cycle, nav a.cycle-home'),
        articles: $('article'),
        animationTime: 400,

        init: function() {
            this.initEvents();
        },

        initEvents: function() {
            App.nav.click(App.showPage);
        },

        showPage: function() {
            var selectedNav = $(this);

            $('.nav-cycle, article').removeClass('active');
            selectedNav.addClass('active');

            App.articles.hide();
            $('article.' + selectedNav.data('article')).fadeIn(App.animationTime);
            $('nav').attr('id', selectedNav.data('article'));
        }
    };

    App.init();
})(jQuery);