/**
 * Created by rg on 29.11.15.
 */

var User = {
    ajax: {
        ebayLogin: function(form) {
            var form = jQuery(form);

            $.post(form.attr('action') , form.serialize() );

            return false;
        }
    }
};

Epar['User'] = User;