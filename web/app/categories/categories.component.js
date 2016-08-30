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
var router_1 = require('@angular/router');
var categories_service_1 = require('./categories.service');
var CategoriesComponent = (function () {
    function CategoriesComponent(router, categoriesService) {
        this.router = router;
        this.categoriesService = categoriesService;
        this.getCategories();
    }
    CategoriesComponent.prototype.getCategories = function () {
        var _this = this;
        this.categoriesService.getCategories(1)
            .subscribe(function (categories) {
            _this.categories = categories.data;
            _this.totalRecords = categories.totalRecords;
        }, function (error) { return console.log('onError: %s', error); });
    };
    CategoriesComponent.prototype.editCategory = function (category) {
        if (category) {
            this.router.navigate(['/backoffice/category/' + category.catId]);
        }
        else {
            this.router.navigate(['/backoffice/category/0']);
        }
    };
    CategoriesComponent = __decorate([
        core_1.Component({
            selector: 'my-app',
            templateUrl: 'app/categories/categories.component.html',
            providers: [categories_service_1.CategoriesService]
        }), 
        __metadata('design:paramtypes', [router_1.Router, categories_service_1.CategoriesService])
    ], CategoriesComponent);
    return CategoriesComponent;
}());
exports.CategoriesComponent = CategoriesComponent;
//# sourceMappingURL=categories.component.js.map