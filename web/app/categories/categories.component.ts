import { Component } from '@angular/core';
import { Router, ROUTER_DIRECTIVES } from '@angular/router';
import { DataTable, Column, LazyLoadEvent } from 'primeng/primeng';
import { Category } from './category';
import { CategoriesService } from './categories.service';


@Component({
    selector: 'my-app',
    templateUrl: 'app/categories/categories.component.html',
    providers: [CategoriesService],
    directives: [DataTable, Column, ROUTER_DIRECTIVES]
})

export class CategoriesComponent {

    categories: Array<Category>;
    totalRecords: Number;

    constructor(
        private router: Router,
        private categoriesService : CategoriesService) {}

    loadLazy(event: LazyLoadEvent) {

        this.categoriesService.getCategories(event.first / 10)
            .subscribe(
                categories => {
                    this.categories = categories.data;
                    this.totalRecords = categories.totalRecords
                },
                error => console.log('onError: %s', error)
            );
    }

    editCategory(category: Category) {
        this.router.navigate(['/backoffice/category/' + category.catId]);
    }
}
