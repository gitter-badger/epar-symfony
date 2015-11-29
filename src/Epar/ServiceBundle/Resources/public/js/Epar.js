/**
 * Created by rg on 28.11.15.
 */
var Epar = {
    ajax: {
        proxySettings: function() {
            var form = jQuery(form);

            $.post(form.attr('action') , form.serialize() );

            return false;
        }
    }
};