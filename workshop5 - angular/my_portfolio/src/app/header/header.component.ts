import { Component } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-header',
  standalone: true,
  imports: [],
  templateUrl: './header.component.html',
  styleUrl: './header.component.css'
})
export class HeaderComponent {

  constructor(
    private router: Router
    ){};
  
    gotoIndex(){
      this.router.navigate(['']);
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
