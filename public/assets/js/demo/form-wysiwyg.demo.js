/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 5
Version: 5.4.1
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin/
*/

var handleBootstrapWysihtml5 = function () {
    "use strict";
    $('#wysihtml5').wysihtml5();
};

var handleCkeditor = function() {
    var elm = document.querySelector('#editor1');
    ClassicEditor.create(elm, {
        toolbar: {
            items: [
                'bold', 
                'italic',
                'underline',
                'strikethrough',
                'code',
                'undo',
                'redo'
                // The unwanted features (Link, BlockQuote, Insert Table, Image Upload) are omitted here
            ]
        }
    }).catch(error => {
        console.error(error);
    });
};

var FormWysihtml = function () {
    "use strict";
    return {
        // Main function
        init: function () {
            handleCkeditor();
            handleBootstrapWysihtml5();
        }
    };
}();

$(document).ready(function() {
    FormWysihtml.init();
    
    $(document).on('theme-reload', function() {
        $('.wysihtml5-sandbox, input[name="_wysihtml5_mode"], .wysihtml5-toolbar').remove();
        $('#wysihtml5').show();
        handleBootstrapWysihtml5();
    });
});
