$(function() {

    var App = {};

    App.User = Backbone.Model.extend({
        urlRoot: 'user'
    });

    var user = new App.User({
        id: 5
    });

    user.fetch();

});