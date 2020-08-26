
jQuery(document).ready(function() {
    jQuery('.carousel-item').first().addClass('active');
    jQuery('.carousel').carousel();
        
    function addison_search_init(){

        //Create plugin Search
        (function(jQuery) {
            jQuery.fn.addisonSearch = function(options) {        
                var defaults = {
                    "toggleID"      : ".header-search-btn",
                    "closeID"      : ".header-search-close",
                    "searchField"   : ".header-search-field",
                    "body"          : "body > *:not(header)",
                }; 
                
                if (this.length === 0) { return this; }
                
                return this.each(function () {
                    var addisonSearch = {}, s = jQuery(this);
                    var openClass = 'header-search-open',
                    searchClass = '.header-search';
    
                    var init = function() {
                        addisonSearch.settings = jQuery.extend({}, defaults, options);
                    },
                    open = function () {
                        jQuery(s).addClass(openClass);
                        setTimeout(function(){
                            jQuery(s).find('input.search-field').focus();
                        }, 100);
                        return false;
                    },                
                    close = function () {
                        jQuery(s).removeClass(openClass);
                    },
                    toggleSearch = function(e) {
                        if (!jQuery(s).closest(searchClass).hasClass(openClass)) {
                            open();
                        }else{
                            close();
                        }
                    },
                    eventClose = function(e) {
                        var element = jQuery(searchClass);
                        if(!jQuery(e.target).closest('.search-form').length){
                            if (jQuery(element).hasClass(openClass)) {
                                close();
                            }                        
                        }
                    };
    
                    /*Init*/
                    init();
    
                    if(jQuery(this).hasClass('search-standard')){
                        jQuery(this).find(addisonSearch.settings.toggleID).on('click', toggleSearch);
                    }else{
                        jQuery(addisonSearch.settings.toggleID).on('click', toggleSearch);
                        jQuery(addisonSearch.settings.searchField).on('click', eventClose);
                    }
                
                    jQuery(addisonSearch.settings.body).on('click', eventClose);
                    
                });
    
            };
    
        })(jQuery);
    
        jQuery('.header-search').addisonSearch();
    
    }
    addison_search_init();
});

