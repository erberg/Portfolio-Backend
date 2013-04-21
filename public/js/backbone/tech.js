(function($){

    var TechListModel = Backbone.Model.extend();
    var TechListsCollection = Backbone.Collection.extend({
        url: '/api/techlist',
        model: TechListModel
    });

    var TechListsView = Backbone.View.extend({
        el : $('#techlist-content'),
        initialize : function (){
        var that = this;
        this.collection = new TechListsCollection();
        this.collection.fetch({ success: function () { that.render(); }});
        },

        render: function () {
        var that = this;
        this.collection.each(function (techlist,index){
            var template=_.template( $('#techTemplate').html(),techlist.toJSON());
            that.$el.append(template);
            });
        }

    });

    //var techView = new TechListsView();
    //Not ready to render this yet.
})(jQuery);