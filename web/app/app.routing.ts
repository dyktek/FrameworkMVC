import { Routes, RouterModule } from '@angular/router';;
import { CategoriesComponent } from './categories/categories.component';
import { CategoryEditComponent } from './categories/category-edit.component';
import { LoginComponent } from './login/login.component';
import { AuthGuard }      from './common/auth.guard';

const appRoutes: Routes = [
    {
        path: '',
        redirectTo: '/backoffice',
        pathMatch: 'full'

    },
    {
        path: 'backoffice/categories',
        component: CategoriesComponent,
        canActivate: [AuthGuard]

    },
    {
        path: 'backoffice/category/:id',
        component: CategoryEditComponent,
        canActivate: [AuthGuard]
    },
    {
        path: 'backoffice/login',
        component: LoginComponent
    }
];

export const routing = RouterModule.forRoot(appRoutes);