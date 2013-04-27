(function($){

    var ArticleModel = Backbone.Model.extend();
    var ArticlesCollection = Backbone.Collection.extend({
        url: '/api/articles',
        model: ArticleModel,
        comparator : function(article) { return article.get("order"); }
    });

    var ArticlesView = Backbone.View.extend({
        el : $('#article-content'),
        initialize : function (){
        var that = this;
        this.collection = new ArticlesCollection();
        this.collection.fetch({ success: function () { that.render(); }});
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

    var articleView = new ArticlesView();
})(jQuery);