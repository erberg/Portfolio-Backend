(function($){

    var ArticleModel = Backbone.Model.extend();

    var ArticlesCollection = Backbone.Collection.extend({
        url: '/api/articles',
        model: ArticleModel
    });

    var ArticlesView = Backbone.View.extend({
        el : $('.articletable'),
        initialize : function (){

        this.collection = new ArticlesCollection();
        this.collection.on("reset", this.render, this);

        this.collection.fetch({
            success: function (article) {
            //alert(article.get(1)['id']);
            }
        });
        //alert(this.collection.pluck(0));
        },
        render: function () {
        alert("test" + JSON.stringify(this.collection));
        }
    });


    var articleView = new ArticlesView();
})(jQuery);