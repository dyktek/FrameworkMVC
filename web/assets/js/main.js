/// <reference path="./app/libts/jquery.d.ts"/>
System.register(['./app/app'], function(exports_1) {
    var app;
    var application;
    return {
        setters:[
            function (app_1) {
                app = app_1;
            }],
        execute: function() {
            application = new app.App();
        }
    }
});
//# sourceMappingURL=main.js.map