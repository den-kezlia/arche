(function($) {
    App = {
        nav: $('nav a.nav-cycle'),
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
        }
    };

    App.init();
})(jQuery);