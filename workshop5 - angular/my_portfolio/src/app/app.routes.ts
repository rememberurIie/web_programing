import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { SchoolListComponent } from './school-list/school-list.component';
import { HobbyListComponent } from './hobby-list/hobby-list.component';
import { ContactListComponent } from './contact-list/contact-list.component';

export const routes: Routes = [
    { path: '', component: SchoolListComponent },
    { path: 'hobby', component: HobbyListComponent },
    { path: 'contact', component: ContactListComponent },
    // Other routes
  ];
  
@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
