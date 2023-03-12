import { RouterModule, Routes } from '@angular/router';

import { AdminComponent } from './admin/admin.component';
import { ArticleComponent } from './article/article.component';
import { ArticlePageComponent } from './article-page/article-page.component';
import { HomeComponent } from './home/home.component';
import { NgModule } from '@angular/core';

const routes: Routes = [
  { path: "", component: HomeComponent },
  { path: "article", component: ArticleComponent },
  { path: "article/:id", component: ArticlePageComponent },
  { path: "admin", component: AdminComponent }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
