import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { SchoolListComponent } from './school-list/school-list.component';


@Component({
  selector: 'app-root',
  standalone: true,
  imports: [
    SchoolListComponent
  ],
  templateUrl: './app.component.html',
  styleUrl: './app.component.css'
})
export class AppComponent {
  title = 'my_portfolio';
}
