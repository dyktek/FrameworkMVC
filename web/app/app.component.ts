import { Component } from '@angular/core';
import { Router, Routes, ROUTER_DIRECTIVES } from '@angular/router';
import { Menubar } from 'primeng/primeng';
import { CategoriesComponent } from './categories/categories.component';
import { CategoryEditComponent } from './categories/category-edit.component';

@Component({
    selector: 'my-app',
    templateUrl: 'app/app.component.html',
    directives: [Menubar, ROUTER_DIRECTIVES],
})

@Routes([
    {
        path: '/backoffice/admin',
        component: AppComponent,
    },
    {
        path: '/backoffice/categories',
        component: CategoriesComponent
    },
    {
        path: '/backoffice/category/:id',
        component: CategoryEditComponent
    }
])

export class AppComponent {
    constructor(private router: Router) {}
}