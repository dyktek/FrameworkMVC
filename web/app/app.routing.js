"use strict";
var router_1 = require('@angular/router');
;
var categories_component_1 = require('./categories/categories.component');
var category_edit_component_1 = require('./categories/category-edit.component');
var login_component_1 = require('./login/login.component');
var auth_guard_1 = require('./common/auth.guard');
var appRoutes = [
    {
        path: '',
        redirectTo: '/backoffice',
        pathMatch: 'full'
    },
    {
        path: 'backoffice/categories',
        component: categories_component_1.CategoriesComponent,
        canActivate: [auth_guard_1.AuthGuard]
    },
    {
        path: 'backoffice/category/:id',
        component: category_edit_component_1.CategoryEditComponent,
        canActivate: [auth_guard_1.AuthGuard]
    },
    {
        path: 'backoffice/login',
        component: login_component_1.LoginComponent
    }
];
exports.routing = router_1.RouterModule.forRoot(appRoutes);
//# sourceMappingURL=app.routing.js.map