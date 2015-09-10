$(function() {
    /**
     * Main menu
     */
    var mainMenu = $(".sf-menu");

    // Create the responsive menu by cloning the existing one
    mainMenu.clone().removeClass().addClass("rwd-menu").prependTo(".navbar-container nav");

    // Initialize the superfish menu
    mainMenu.superfish();

    // Toggle the responsive menu
    $("#rwd-trigger").on("click", function(e) {
        e.preventDefault();

        $(".rwd-menu").slideToggle();
    });

    /**
     * Animations
     */
    $("#demo-animations").find(".demo-col").on("click", function() {
        var $this = $(this);

        $this.addClass("animated " + $this.text());
    });

    /**
     * Tabs
     */
    $(".tabs-links a").on("click", function(e) {
        e.preventDefault();

        // Get the target tab
        var newTab = $(this).attr("href");

        // Show the targeted tab content while hiding the rest
        $(newTab).show().siblings().hide();

        // Add the active class to the parent list item while removing it from the rest
        $(this).parent("li").addClass("active").siblings().removeClass("active");
    });

    /**
     * Accordions
     */
    $(".accordion-element-title").on("click", function(e) {
        e.preventDefault();

        // Get the target accordion
        var targetAccordion = $(this).attr("href");

        // Collapse all accordion elements
        $(".accordion-element-title").removeClass("active");
        $(".accordion-element-content").hide();

        // Show the targeted element only
        $(this).addClass("active");
        // $(targetAccordion).slideDown();
        $(targetAccordion).show();
    });

    /** 
     * Code Mirror
     */
    var config = {
        mode: "xml",
        htmlMode: true,
        lineNumbers: true,
        readOnly: true
    };

    var gridCodeMirror       = CodeMirror.fromTextArea(document.getElementById('grid-snippet'), config);
    var buttonsCodeMirror    = CodeMirror.fromTextArea(document.getElementById('buttons-snippet'), config);
    var formsCodeMirror      = CodeMirror.fromTextArea(document.getElementById('forms-snippet'), config);
    var iconsCodeMirror      = CodeMirror.fromTextArea(document.getElementById('icons-snippet'), config);
    var feedbackCodeMirror   = CodeMirror.fromTextArea(document.getElementById('feedback-snippet'), config);
    var navCodeMirror        = CodeMirror.fromTextArea(document.getElementById('nav-snippet'), config);
    var animationsCodeMirror = CodeMirror.fromTextArea(document.getElementById('animations-snippet'), config);
    var tabsCodeMirror       = CodeMirror.fromTextArea(document.getElementById('tabs-snippet'), config);
    var accordionCodeMirror  = CodeMirror.fromTextArea(document.getElementById('accordion-snippet'), config);
    var carouselCodeMirror   = CodeMirror.fromTextArea(document.getElementById('carousel-snippet'), config);
});