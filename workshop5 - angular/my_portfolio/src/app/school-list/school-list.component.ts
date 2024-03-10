import { Component } from '@angular/core';
import {CommonModule} from '@angular/common';
import { schools } from './school';
import { Router } from '@angular/router';


@Component({
  selector: 'app-school-list',
  standalone: true,
  imports: [   
    CommonModule,
  ],
  templateUrl: './school-list.component.html',
  styleUrl: './school-list.component.css'
})

export class SchoolListComponent {

  schools = [...schools];
  
  constructor(
  private router: Router
  ){};

  gotoIndex(){
    this.router.navigate(['index']);
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  gotoHobby(){
    this.router.navigate(['hobby']);
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  gotoContact(){
    this.router.navigate(['contact']);
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

}
