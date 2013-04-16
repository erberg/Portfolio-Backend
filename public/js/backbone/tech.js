(function($){

    var TechListModel = Backbone.Model.extend();
    var TechListsCollection = Backbone.Collection.extend({
        url: '/api/techlist',
        model: TechListModel
    });

    var TechListsView = Backbone.View.extend({
        el : $('#article-content'),
        initialize : function (){
        var that = this;
        this.collection = new TechListsCollection();
        this.collection.fetch({ success: function (articles) { that.render(); }});
        },

        render: function () {
        var that = this;
        this.collection.each(function (article,index){
            var template;
            if((index % 2)===0){
                template = _.template( $('#articleTemplate').html(),article.toJSON());
            } else {
                template = _.template( $('#articleTemplateAlt').html(),article.toJSON());
                }
            that.$el.append(template);
            });
        }

    });

    var articleView = new TechListsView();
})(jQuery);