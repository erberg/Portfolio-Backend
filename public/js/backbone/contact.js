(function($){

    var ContactModel = Backbone.Model.extend({
        url : '/api/sendmail',
        validate : function() {
            if(!this.validEmail()){return "Please enter a valid E-mail address.";}
            if(!this.get("Subject") || !this.get("Message") )
            {return "Please fill out all fields.";}
        },
        validEmail : function () {
            var needle = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
            return needle.test(this.get("From"));
        }
    });

    var ContactView = Backbone.View.extend({
        el : $('#emailsubmit'),

        events: {'click' : 'saveToModel'},

        saveToModel: function(){
        this.model.set("From",$('#email').val());
        this.model.set("Subject",$('#subject').val());
        this.model.set("Message",$('#message').val());
        this.sendMail();
        },

        sendMail: function(){
            var error=this.model.validate();
            if(!error) {
                    $("#emailresponse").html('E-mail Sent.').css('color', 'green');
                    this.$el.attr("disabled", "disabled");
                    this.model.save();
                }
            else { $("#emailresponse").html(error).css('color', 'red'); }
        }
    });

    var contactModel = new ContactModel();
    var contactView = new ContactView({model: contactModel});

})(jQuery);