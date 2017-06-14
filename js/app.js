(function($) {
    App = {
        nav: $('nav a.nav-cycle, nav a.cycle-home'),
        articles: $('article'),
        animationTime: 400,

        init: function() {
            this.initEvents();
            this.getCurrentPage();
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
        },

        getCurrentPage: function () {
            var currentPage = window.location.hash.substr(1);
            $('#link-' + currentPage).click();
        }
    };

    App.init();
})(jQuery);