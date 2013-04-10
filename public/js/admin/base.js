(function($){

    var ArticleModel = Backbone.Model.extend();
    var ArticlesCollection = Backbone.Collection.extend({
        url: '/api/articles',
        model: ArticleModel
    });

    var ArticlesView = Backbone.View.extend({
        el : $('#articlecontent'),

        initialize : function (){
        var that = this;
        this.collection = new ArticlesCollection();
        this.collection.fetch({ success: function (article) { that.render(); }});
        },

        render: function () {
        var that = this;
        this.collection.each(function (article){ addButtons(article,that); });
        this.collection.each(function (article){ addFormData(article,that); });
        }

    });

    /*****************FOR FUTURE DEVELOPMENT OF BACKEND (Forms to add Articles!)*/
    var addFormData = function (article,that) {
        that.$el.append('<form class="articleform" id="art' + article.get("id") + '">');
        that.$el.append('<br>Title: <input type="text" value="'+ article.get("title") +'">');
        that.$el.append('Subtitle: <input type="text" value="'+ article.get("subtitle") +'">');
        that.$el.append('Image Location: <input type="text" value="'+ article.get("img_location") +'">');
        that.$el.append('Content: <textarea style="width:100%;height:125px">'+ article.get("content") +'</textarea>');
        that.$el.append('<input type="submit" value="Update Article"></form>');
    };

    var addButtons = function(article,that){
        that.$el.append('<button type="button" class="showhide" id="' + article.get("id") + '"> Edit article ' +
                            article.get("id") + ': ' + article.get("title") + '</button>');
    };
    
    var articleView = new ArticlesView();
})(jQuery);