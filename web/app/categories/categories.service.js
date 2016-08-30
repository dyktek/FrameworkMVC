"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var core_1 = require('@angular/core');
var http_1 = require('@angular/http');
var angular2_jwt_1 = require('angular2-jwt/angular2-jwt');
var CategoriesService = (function () {
    function CategoriesService(authHttp) {
        this.authHttp = authHttp;
    }
    CategoriesService.prototype.getCategories = function (page) {
        return this.authHttp.get('/api/categories/' + page)
            .map(function (res) { return res.json(); });
    };
    CategoriesService.prototype.getCategory = function (catId) {
        return this.authHttp.get('/api/category/' + catId)
            .map(function (res) { return res.json(); });
    };
    CategoriesService.prototype.saveCategory = function (category) {
        var headers = new http_1.Headers();
        headers.append('Content-Type', 'application/json');
        if (category.catId > 0) {
            return this.authHttp.put('/api/category', JSON.stringify(category), { headers: headers })
                .map(function (res) { return res.json(); });
        }
        else {
            return this.authHttp.post('/api/category', JSON.stringify(category), { headers: headers })
                .map(function (res) { return res.json(); });
        }
    };
    CategoriesService = __decorate([
        core_1.Injectable(), 
        __metadata('design:paramtypes', [angular2_jwt_1.AuthHttp])
    ], CategoriesService);
    return CategoriesService;
}());
exports.CategoriesService = CategoriesService;
//# sourceMappingURL=categories.service.js.map