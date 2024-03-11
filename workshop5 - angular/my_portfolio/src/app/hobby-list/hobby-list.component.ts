import { Component } from '@angular/core';
import {CommonModule} from '@angular/common';

import { hobbys } from './hobby';

import { HeaderComponent } from '../header/header.component';
import { FooterComponent } from '../footer/footer.component';

@Component({
    selector: 'app-hobby-list',
    standalone: true,
    imports: [
        CommonModule,
        HeaderComponent,
        FooterComponent
    ],
    templateUrl: './hobby-list.component.html',
    styleUrl: './hobby-list.component.css'
})
export class HobbyListComponent {

    hobbys = [...hobbys];

}
